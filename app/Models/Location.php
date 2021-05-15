<?php

    namespace App\Models;

    use App\BaseModel;
    use Kalnoy\Nestedset\NodeTrait;
    use App\Helpers\FileHelper;
    use Illuminate\Database\Eloquent\SoftDeletes;
    use App\Models\SEO;

    class Location extends BaseModel
    {

        protected $table         = 'locations';
        protected $fillable      = [
            'name',
            'content',
            'image_id',
            'map_lat',
            'map_lng',
            'map_zoom',
            'status',
            'parent_id',
            'banner_image_id',
            'trip_ideas',
        ];
        protected $slugField     = 'slug';
        protected $slugFromField = 'name';
        protected $seo_type      = 'location';
        protected $casts         = [
            'trip_ideas' => 'array'
        ];

        public static function getModelName()
        {
            return __("Location");
        }




        public function getDisplayNumberServiceInLocation($service_type)
        {
            // $allServices = get_bookable_services();
            // if(empty($allServices[$service_type])) return false;
            // $module = new $allServices[$service_type];
            // return $module->getNumberServiceInLocation($this);

            $number = 0;

            $number =  Property::where('location_id', $this->id)->count();

            return __(":number Property", ['number' => $number]);

        }


        public function getDetailUrl($locale = false)
        {
            return route('property.search',['location_id'=>$this->id]);
        }

        public function getLinkForPageSearch($service_type)
        {
            $allServices = get_bookable_services();
            $module = new $allServices[$service_type];
            return $module->getLinkForPageSearch(false, ['location_id' => $this->id]);
        }
    }
