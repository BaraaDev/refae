<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Dashboard\AdminController;
use App\Models\Location;
use App\Models\Property;
use App\Models\PropertyTerm;
use App\Models\PropertyCategory;
use Illuminate\Support\Facades\DB;

class PropertyController extends Controller
{
    protected $property;
    protected $location;


    public function __construct()
    {
        $this->property = Property::class;
        $this->location = Location::class;
        $this->propertyCategoryClass = PropertyCategory::class;
    }



    public function index(Request $request)
    {


        $query = $this->property::query() ;

        $query->orderBy('id', 'desc');

        if (!empty($property_name = $request->input('s'))) {
            $query->where('title', 'LIKE', '%' . $property_name . '%');
            $query->orderBy('title', 'asc');
        }

        $data = [
            'rows'   => $query->with(['author'])->paginate(20),
                 'property_manage_others' => true,
            'breadcrumbs'        => [
                [
                    'name' => __('Hotels'),
                    'url'  => 'dashboard/hotel'
                ],
                [
                    'name'  => __('All'),
                    'class' => 'active'
                ],
            ],
            'page_title'=>__("Hotel Management")
        ];

        return view('admin.hotel.index', $data);
    }

    public function create(Request $request)
    {

        $row = new $this->property();

        $row->fill([ 'status' => 'publish']);

        $data = [
            'row'            => $row,
            'property_category'    => [],
            'locations' =>  Location::all(),
             'breadcrumbs'    => [
                [
                    'name' => __('Properties'),
                    'url'  => 'dashboard/hotel'
                ],
                [
                    'name'  => __('Add Hotel'),
                    'class' => 'active'
                ],
            ],
            'page_title'     => __("Add new Hotel")
        ];



        return view('admin.hotel.detail', $data);
    }


    public function edit(Request $request, $id)
    {

        $row = $this->property::findOrFail($id);



        $data = [
            'row'            => $row,
            'property_location'  => $this->location::where('status', 'publish')->get()->toTree(),
            'breadcrumbs'    => [
                [
                    'name' => __('Hotels'),
                    'url'  => 'dashboard/hotel'
                ],
                [
                    'name'  => __('Edit Hotel'),
                    'class' => 'active'
                ],
            ],
            'page_title'=>__("Edit: :name",['name'=>$row->title])
        ];


        return view('admin.hotel.detail', $data);
    }

    public function store( Request $request, $id ){



        if($id>0){

            $row = $this->property::findOrFail($id);

        }else{

            $row = new $this->property();
            $row->status = "publish";
        }

        $dataKeys = [
            'title',
            'content',
            'price',
            'status',
            'video',
            'image_id',
            'gallery',
            'bed',
            'bathroom',
            'square',
            'location_id',
            'address',
            'price',
            'is_featured',
            'image_id',
            'gallery',
        ];


        $videoimage = $request->file('banner_image_id');

        $mainimage = $request->file('file');

        $gallery = $request->file('gallery');

        $input = $request->except(['banner_image_id', 'image_id', 'gallery']);

        if($videoimage){

            $fileName = $videoimage->getClientOriginalName();

            $fileName = uniqid() . $fileName;

            $videoimage->move('images/', $fileName);

            $input['banner_image_id'] = $fileName;

       }else{

             $input['banner_image_id'] = $row->banner_image_id;
       }


        if($mainimage){


            $fileName = $mainimage->getClientOriginalName();

            $fileName = uniqid() . $fileName;

            $mainimage->move('images/', $fileName);

            $input['image_id'] = $fileName;

       }else{

        $input['image_id'] = $row->image_id;
  }

       $photos = [];

        if($gallery){

            foreach($gallery as $photo){

            $fileName = $photo->getClientOriginalName();

            $fileName = uniqid() . $fileName;

            $photo->move('images/', $fileName);

            $photos[] = $fileName;

            }

          $input['gallery'] = implode(',', $photos);

       }else{

         $input['gallery'] = $row->gallery;
             }

        $row->fillByAttr($dataKeys,$input);

        if($request->input('slug')){

            $row->slug = $request->input('slug');

        }

        $row->save();

        return redirect('dashboard/hotel')->with('success',  __('Property updated') );

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

        switch ($action){
            case "delete":
                foreach ($ids as $id) {

                    $query = $this->property::where("id", $id)->first();

                    if(!empty($query)){
                        $query->delete();
                    }
                }
                return redirect()->back()->with('success', __('Deleted success!'));
                break;
            case "clone":
                 foreach ($ids as $id) {
                    (new $this->property())->saveCloneByID($id);
                }
                return redirect()->back()->with('success', __('Clone success!'));
                break;
            default:
                // Change status
                foreach ($ids as $id) {
                    $query = $this->property::where("id", $id);

                    $query->update(['status' => $action]);
                }
                return redirect()->back()->with('success', __('Update success!'));
                break;
        }


    }
}
