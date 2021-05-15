<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;
use App\Models\Language;
use App\Models\ServiceTranslation;

class ServiceController extends Controller
{

    public function index(Request $request)
    {

        $dataNews = Service::query()->orderBy('id', 'desc');

        $post_name = $request->query('s');


        if ($post_name) {
            $dataNews->where('title', 'LIKE', '%' . $post_name . '%');
            $dataNews->orderBy('title', 'asc');
        }


        $this->filterLang($dataNews);

        $data = [
            'rows'        => $dataNews->paginate(20),
            'breadcrumbs' => [
                [
                    'name' => __('Services'),
                    'url'  => 'dashboard/services'
                ],
                [
                    'name'  => __('All'),
                    'class' => 'active'
                ],
            ],
            "languages"=>Language::getActive(false),
            "locale"=>\App::getLocale(),
            'page_title'=>__("Service Management")
        ];

        return view('admin.service.index', $data);
    }

    public function create(Request $request)
    {



        $row = new Service();

        $row->fill([  'status' => 'publish']);

        $data = [
             'row'         => $row,
            'breadcrumbs' => [
                [
                    'name' => __('News'),
                    'url'  => 'dashboard/news/create'
                ],
                [
                    'name'  => __('Add News'),
                    'class' => 'active'
                ],
            ],
            'translation'=>new ServiceTranslation()
        ];
        return view('admin.service.detail', $data);
    }

    public function edit(Request $request, $id)
    {


        $row = Service::findOrFail($id);

        $translation = $row->translateOrOrigin($request->query('lang'));

        $data = [
            'row'  => $row,
            'translation'  => $translation,
            'enable_multi_lang'=>true
        ];
        return view('admin.service.detail', $data);
    }

    public function store(Request $request, $id){


        if($id>0){

            $row = Service::find($id);

            if (empty($row)) {
                return redirect(route('dashboard.service.index'));
            }
        }else{

            $row = new Service();
            $row->status = "publish";
        }

        $file = $request->file('file');

        $input = $request->except(['image_id']);

        if($file){

            $fileName = $file->getClientOriginalExtension();

            $fileName = "Mokhtar_Ali_" . uniqid() . '.' .$fileName;

            $file->move('images/', $fileName);

            $input['image_id'] = $fileName;

       }else{

           $input['image_id'] = $row->image_id;

        }


        $row->fill($input);

        if($request->input('slug')){
            $row->slug = $request->input('slug');
        }
        $res = $row->saveOriginOrTranslation($request->query('lang'),true);

        if ($res) {
            if(is_default_lang($request->query('lang'))){
                $row->saveTag($request->input('tag_name'), $request->input('tag_ids'));
            }
            if($id > 0 ){
                return back()->with('success',  __('Service updated') );
            }else{
                return redirect(route('dashboard.service.edit',$row->id))->with('success', __('News created') );
            }
        }
    }

    public function bulkEdit(Request $request)
    {

        $ids = $request->input('ids');
        $action = $request->input('action');
        if (empty($ids) or !is_array($ids)) {
            return redirect()->back()->with('error', __('No items selected!'));
        }
        if (empty($action)) {
            return redirect()->back()->with('error', __('Please select an action!'));
        }
        if ($action == "delete") {
            foreach ($ids as $id) {
                $query = Service::where("id", $id);

                $query->first();
                if(!empty($query)){
                    $query->delete();
                }
            }
        } else {
            foreach ($ids as $id) {
                $query = News::where("id", $id);
                if (!$this->hasPermission('news_manage_others')) {
                    $query->where("create_user", Auth::id());

                }
                $query->update(['status' => $action]);
            }
        }
        return redirect()->back()->with('success', __('Update success!'));
    }

    public function trans($id,$locale){

        $row = Service::find($id);

        if(empty($row)){
            return redirect()->back()->with("danger",__("Service does not exists"));
        }

        $translated = News::query()->where('origin_id',$id)->where('lang',$locale)->first();

        if(!empty($translated)){
            redirect($translated->getEditUrl());
        }

        $language = Language::where('locale',$locale)->first();
        if(empty($language)){
            return redirect()->back()->with("danger",__("Language does not exists"));
        }

        $new = $row->replicate();

        if(!$row->origin_id){
            $new->origin_id = $row->id;
        }

        $new->lang = $locale;

        $new->save();


        return redirect($new->getEditUrl());
    }
}
