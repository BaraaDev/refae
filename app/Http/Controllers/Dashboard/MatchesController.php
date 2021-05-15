<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Matches;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
class MatchesController extends Controller
{
    protected $matches;

    public function __construct()
    {
        $this->matches = Matches::class;
      }


    public function index(Request $request)
    {


        $query = $this->matches::query() ;

        $query->orderBy('id', 'desc');

        if (!empty($property_name = $request->input('s'))) {
            $query->where('title', 'LIKE', '%' . $property_name . '%');
            $query->orderBy('title', 'asc');
        }


        $data = [
            'rows'   => $query->paginate(20),
            'breadcrumbs'        => [
                [
                    'name' => __('matches'),
                    'url'  => 'dashboard/matches'
                ],
            ],
            'page_title'=>__("matches Management")
        ];

        return view('admin.matches.index', $data);
    }

    public function create(Request $request)
    {

        return view('admin.matches.create');
    }


    public function edit(Request $request, $id)
    {

        $row = $this->matches::findOrFail($id);

        return view('admin.matches.edit',compact('row'));
    }

    public function store( Request $request){



        $request->validate([

            'title'      => 'required',
            'content'    => 'required',
            'price'      => 'required',
            'video'      => 'required',
            'status'     => 'required',
            'date'       => 'required',
            'stadium'    => 'required',
            'file'       => 'required | mimes:jpg,png,jpeg',
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

       Matches::create($input);


        return redirect('dashboard/matches')->with('success',  __('matche Created') );

    }




    public function update(Request $request, $id){


        $row = $this->matches::findOrFail($id);

        $request->validate([

            'title'      => 'required',
            'content'    => 'required',
            'price'      => 'required',
            'status'     => 'required',
            'date'       => 'required',
            'stadium'    => 'required',
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

        return redirect('dashboard/matches')->with('success',  __('matche updated') );

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

                    $query = $this->matches::where("id", $id)->first();

                    if(!empty($query)){
                        $query->delete();
                    }
                }
                return redirect()->back()->with('success', __('Deleted success!'));
                break;
            case "clone":
                 foreach ($ids as $id) {
                    (new $this->matches())->saveCloneByID($id);
                }
                return redirect()->back()->with('success', __('Clone success!'));
                break;
            default:
                // Change status
                foreach ($ids as $id) {

                    $query = $this->matches::where("id", $id);

                    $query->update(['status' => $action]);
                }
                return redirect()->back()->with('success', __('Update success!'));
                break;
        }


    }
}


