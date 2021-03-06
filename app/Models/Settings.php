<?php
namespace App\Models;

use App\BaseModel;
use Illuminate\Support\Facades\Cache;
use Illuminate\Database\Eloquent\Concerns\HasEvents;
use App\Models\Language;

class Settings extends BaseModel
{
    use HasEvents;

    protected $table = 'settings';

    public static function getSettings($group = '',$locale = '')
    {
        if ($group) {
            static::where('group', $group);
        }
        $all = static::all();
        $res = [];
        foreach ($all as $row) {
            $res[$row->name] = $row->val;
        }
        return $res;
    }

    public static function item($item, $default = false)
    {
        $value = Cache::rememberForever('setting_' . $item, function () use ($item ,$default) {
            $val = Settings::where('name', $item)->first();
            return ($val and $val['val'] != null) ? $val['val'] : $default;
        });
        return $value;
    }

    public static function store($key,$data){

        $check = Settings::where('name', $key)->first();
        if($check){
            $check->val = $data;
            $check->save();
        }else{
            $check = new self();
            $check->val = $data;
            $check->name = $key;
            $check->save();
        }

        Cache::forget('setting_' . $key);
    }

    public static function getSettingPages(){

        $allSettings = [
            [
                'id'=>'general',
                'title' => __("General Settings"),
                'position'=>10
            ],
            [
                'id'   => 'style',
                'title' => __("Style Settings"),
                'position'=>70
            ],
            [
                'id'   => 'advance',
                'title' => __("Advance Settings"),
                'position'=>80
            ],
        ];

        // Modules
        $custom_modules = \App\ServiceProvider::getModules();

        if(!empty($custom_modules)){
            foreach($custom_modules as $module){
                $moduleClass = "\\App\Models\\".ucfirst($module)."\\SettingClass";
                if(class_exists($moduleClass))
                {
                    $blockConfig = call_user_func([$moduleClass,'getSettingPages']);
                    if(!empty($blockConfig)){
                        $allSettings = array_merge($allSettings,$blockConfig);
                    }
                }
            }
        }
 

        //@todo Sort items by Position
        $allSettings = array_values(\Illuminate\Support\Arr::sort($allSettings, function ($value) {
            return $value['position'] ?? 0;
        }));

        if(!empty($allSettings)){
            foreach ($allSettings as &$item)
            {
                $item['url'] = 'admin/module/core/settings/index/'.$item['id'];
                $item['name'] = $item['title'] ?? $item['id'];
                $item['icon'] = $item['icon'] ?? '';
            }
        }
        return $allSettings;
    }
    public static function clearCustomCssCache(){
        $langs = Language::getActive();
        if(!empty($langs)){
            foreach ($langs as $lang)
            {
                Cache::forget("custom_css_".$lang->locale);
            }
        }
    }
}
