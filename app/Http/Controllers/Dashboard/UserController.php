<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Auth;

class UserController extends Controller
{

    public function index(Request $request)
    {

        $username = $request->query('s');

        $listUser = User::orderBy('id','desc');

        if (!empty($username)) {

             $listUser->where(function($query) use($username){
                 $query->where('first_name', 'LIKE', '%' . $username . '%');
                 $query->orWhere('id',  $username);
                 $query->orWhere('phone',  $username);
                 $query->orWhere('email', 'LIKE', '%' . $username . '%');
                 $query->orWhere('last_name', 'LIKE', '%' . $username . '%');
             });
        }

        $data = [
            'rows' => $listUser->paginate(10),
        ];

        return view('admin.users.index', $data);
    }

    public function create(Request $request)
    {

        $row = new User();

        $data = [
            'row' => $row,
            'breadcrumbs'=>[
                [
                    'name'=>__("Users"),
                    'url'=>'dashboard/users'
                ]
            ]
        ];
        return view('admin.users.detail', $data);
    }

    public function edit(Request $request, $id)
    {
        $row = User::findOrFail($id);

        $data = [
            'row'         => $row,
            'breadcrumbs' => [
                [
                    'name'  => __("Users"),
                    'url'   => 'dashboard/users'
                ],
                [
                    'name'  => __("Edit User: #:id",['id'=>$row->id]),
                    'class' => 'active'
                ],
            ]
        ];

        return view('admin.users.detail', $data);
    }

    public function password(Request $request,$id){

        $row = User::findOrFail($id);

        $data  = [
            'row'         => $row,
            'currentUser' => Auth::user()
        ];

        return view('admin.users.password',$data);
    }

    public function changepass(Request $request, $id)
    {
        $urow = User::findOrFail($id);
        $request->validate(['password' => 'required|min:6|max:255|confirmed',]);

        $password = $request->input('password');
        $urow->password = bcrypt($password);

        if ($urow->save()) {
            return redirect()->back()->with('success', __('Password updated!'));
        }
    }

    public function store(Request $request, $id)
    {
        $file = $request->file('file');

        if($id and $id>0){
            $row = User::findOrFail($id);

            $request->validate([
                'first_name'         => 'required|max:255',
                'last_name'          => 'required|max:255',
                'status'             => 'required|max:50',
                'phone'              => 'required',
                'country'            => 'required',
                'email'              => [
                                        'required',
                                        'email',
                                        'max:255',
                                        Rule::unique('users')->ignore($row->id)]
                ,
            ]);

            if($file){
                $fileName = $file->getClientOriginalName();
                $fileName = uniqid() . $fileName;
                $file->move('images/', $fileName);
                $row->avatar = $fileName;

           }else{

               $row->avatar =  $row->avatar;
           }

        }else{

            $check = Validator::make($request->input(),[
                'first_name'           => 'required|max:255',
                'last_name'            => 'required|max:255',
                'status'               => 'required|max:50',
                'phone'                => 'required',
                'country'              => 'required',
                'email'                =>[
                                           'required',
                                           'email',
                                           'max:255',
                                            Rule::unique('users')]
                ,
            ]);

            if(!$check->validated()){
                return back()->withInput($request->input());
            }

            $row = new User();
            $row->email = $request->input('email');

            if($file){

                $fileName = $file->getClientOriginalName();
                $fileName = uniqid() . $fileName;
                $file->move('images/', $fileName);
                $row->avatar = $fileName;
           }
        }

        $row->name          = $request->input('name');
        $row->first_name    = $request->input('first_name');
        $row->last_name     = $request->input('last_name');
        $row->phone         = $request->input('phone');
        $row->birthday      = $request->input('birthday');
        $row->address       = $request->input('address');
        $row->address2      = $request->input('address2');
        $row->bio           =  $request->input('bio') ;
        $row->status        = $request->input('status');
        $row->email         = $request->input('email');
        $row->country       = $request->input('country');
        $row->city          = $request->input('city');
        $row->state         = $request->input('state');
        $row->zip_code      = $request->input('zip_code');
        $row->business_name = $request->input('business_name');
        $row->rolez_id      = $request->input('rolez_id');

        if ($row->save()) {

            return back()->with('success', ($id and $id>0) ? __('User updated'):__("User created"));
        }
    }

    public function bulkEdit(Request $request)
    {

        $ids = $request->input('ids');
        $action = $request->input('action');

        if (empty($ids))

            return redirect()->back()->with('error', __('Select at leas 1 item!'));

        if (empty($action))

            return redirect()->back()->with('error', __('Select an Action!'));

        if ($action == 'delete') {
            foreach ($ids as $id) {
                $query = User::where("id", $id)->first();

                if(!empty($query)){
                    $query->email.='_d_'.uniqid().rand(0,99999);
                    $query->save();
                    $query->delete();
                }
            }

        } else {
            foreach ($ids as $id) {
                User::where("id", $id)->update(['status' => $action]);
            }
        }
        return redirect()->back()->with('success', __('Updated successfully!'));
    }


}
