<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Tours;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
class ToursController extends Controller
{

    protected $tours;

    public function __construct()
    {
        $this->tours = Tours::class;
      }


    public function index(Request $request)
    {


        $query = $this->tours::query() ;

        $query->orderBy('id', 'desc');

        if (!empty($property_name = $request->input('s'))) {
            $query->where('title', 'LIKE', '%' . $property_name . '%');
            $query->orderBy('title', 'asc');
        }


        $data = [
            'rows'   => $query->paginate(20),
            'breadcrumbs'        => [
                [
                    'name' => __('Tours'),
                    'url'  => 'dashboard/tours'
                ],
            ],
            'page_title'=>__("Tours Management")
        ];

        return view('admin.tours.index', $data);
    }

    public function create(Request $request)
    {

        return view('admin.tours.create');
    }


    public function edit(Request $request, $id)
    {

        $row = $this->tours::findOrFail($id);

        return view('admin.tours.edit',compact('row'));
    }

    public function store( Request $request){



        $request->validate([

            'title'   => 'required',
            'content' => 'required',
            'price'   => 'required',
            'status'  => 'required',
            'file'    => 'required | mimes:jpg,png,jpeg',
        ]);


        $input = $request->except(['file', 'gallery']);


        $mainimage = $request->file('file');

        $gallery = $request->file('gallery');


        if($mainimage){


            $fileName = $mainimage->getClientOriginalName();

            $fileName = uniqid() . $fileName;

            $mainimage->move('images/', $fileName);

            $input['image_id'] = $fileName;

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

       }

       $input['slug'] = Str::slug($request->title, '-');

       Tours::create($input);


        return redirect('dashboard/tours')->with('success',  __('Tour Created') );

    }




    public function update(Request $request, $id){


        $row = $this->tours::findOrFail($id);

        $request->validate([

            'title'   => 'required',
            'content' => 'required',
            'price'   => 'required',
            'status'  => 'required',
         ]);


        $input = $request->except(['file', 'gallery']);


        $mainimage = $request->file('file');

        $gallery = $request->file('gallery');



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


      $input['slug'] = Str::slug($request->title, '-');

      $row->update($input);

        return redirect('dashboard/tours')->with('success',  __('Tour updated') );

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

                    $query = $this->tours::where("id", $id)->first();

                    if(!empty($query)){
                        $query->delete();
                    }
                }
                return redirect()->back()->with('success', __('Deleted success!'));
                break;
            case "clone":
                 foreach ($ids as $id) {
                    (new $this->tours())->saveCloneByID($id);
                }
                return redirect()->back()->with('success', __('Clone success!'));
                break;
            default:
                // Change status
                foreach ($ids as $id) {
                    $query = $this->tours::where("id", $id);

                    $query->update(['status' => $action]);
                }
                return redirect()->back()->with('success', __('Update success!'));
                break;
        }


    }
}


