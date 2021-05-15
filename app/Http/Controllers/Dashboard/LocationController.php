<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Location;

class LocationController extends Controller
{



    public function index(Request $request)
    {


        $data = [
            'rows'        => Location::all(),
            'row'         => new Location(),
            'breadcrumbs' => [
                [
                    'name' => __('Location'),
                    'url'  => 'dashboard/location'
                ],
                [
                    'name'  => __('All'),
                    'class' => 'active'
                ],
            ]
        ];
        return view('admin.location.index', $data);
    }



    public function store( Request $request){
        $row = new Location();

        $row->status = "publish";

        $row->fill($request->input());

        if($request->input('slug')){

            $row->slug = $request->input('slug');
        }

        dd($request);
        return back()->with('success', __('Location created') );
    }



    public function edit(Request $request, $id)
    {

        $row = Location::findOrFail($id);

        $data = [
             'row'         => $row,
            'breadcrumbs' => [
                [
                    'name' => __('Location'),
                    'url'  => 'dashboard/location'
                ],
                [
                    'name'  => __('Edit'),
                    'class' => 'active'
                ],
            ]
        ];
        return view('admin.location.edit', $data);
    }


    public function update( Request $request, $id){



        $row = Location::findOrFail($id);

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

        return back()->with('success',  __('Location updated') );

    }


    public function destroy($id){

        Location::findOrFail($id)->delete();

        return back()->with('success',  __('Location updated') );

    }
}
