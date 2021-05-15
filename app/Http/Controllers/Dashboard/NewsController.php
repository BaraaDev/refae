<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{


    public function index(Request $request)
    {

        $dataNews = News::query()->orderBy('id', 'desc');

        $post_name = $request->query('s');

        $cate = $request->query('cate_id');

        if ($cate) {
           $dataNews->where('cat_id', $cate);
        }
        if ($post_name) {
            $dataNews->where('title', 'LIKE', '%' . $post_name . '%');
            $dataNews->orderBy('title', 'asc');
        }




        $data = [
            'rows'        => $dataNews->with("getAuthor")->paginate(20),
            'breadcrumbs' => [
                [
                    'name' => __('News'),
                    'url'  => 'dashboard/news'
                ],
                [
                    'name'  => __('All'),
                    'class' => 'active'
                ],
            ],

            'page_title'=>__("News Management")
        ];
        return view('admin.news.index', $data);
    }

    public function create(Request $request)
    {


        $row = new News();

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

        ];
        return view('admin.news.detail', $data);
    }

    public function edit(Request $request, $id)
    {


        $row = News::findOrFail($id);


        $data = [
            'row'  => $row,

        ];
        return view('admin.news.detail', $data);
    }

    public function store(Request $request, $id){


        if($id>0){

            $row = News::find($id);

            if (empty($row)) {
                return redirect(route('dashboard.news.index'));
            }
        }else{

            $row = new News();
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
                $query = News::where("id", $id);
                if (!$this->hasPermission('news_manage_others')) {
                    $query->where("create_user", Auth::id());

                }
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
        $row = News::find($id);

        if(empty($row)){
            return redirect()->back()->with("danger",__("News does not exists"));
        }



        $new = $row->replicate();

        if(!$row->origin_id){
            $new->origin_id = $row->id;
        }



        $new->save();


        return redirect($new->getEditUrl());
    }
}
