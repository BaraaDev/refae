@extends('admin.layouts.app')

@section('content')
    <form action="{{route('dashboard.news.store',['id'=>($row->id) ? $row->id : '-1','lang'=>request()->query('lang')])}}" method="post" class="dungdt-form" enctype="multipart/form-data">
        <div class="container-fluid">
            <div class="d-flex justify-content-between mb20">
                <div class="">
                    <h1 class="title-bar">{{$row->id ? __('Edit post: ').$row->title : __('Add new Post')}}</h1>

                </div>
                <div class="">
                    @if($row->slug)
                        <a class="btn btn-primary btn-sm" href="{{$row->getDetailUrl(request()->query('lang'))}}" target="_blank">{{__("View Post")}}</a>
                    @endif
                </div>
            </div>
            @include('admin.message')
       
            <div class="lang-content-box">
                <div class="row">
                    <div class="col-md-9">
                        <div class="panel">
                            <div class="panel-title"><strong>{{ __('News content')}}</strong></div>
                            <div class="panel-body">
                                @csrf
                                @include('admin/news/form',['row'=>$row])
                            </div>
                        </div>

                    </div>
                    <div class="col-md-3">
                        <div class="panel">
                            <div class="panel-title"><strong>{{__('Publish')}}</strong></div>
                            <div class="panel-body">
                                @if(is_default_lang())
                                <div>
                                    <label><input @if($row->status=='publish') checked @endif type="radio" name="status" value="publish"> {{__("Publish")}}
                                    </label></div>
                                <div>
                                    <label><input @if($row->status=='draft') checked @endif type="radio" name="status" value="draft"> {{__("Draft")}}
                                    </label></div>
                                @endif
                                <div class="text-right">
                                    <button class="btn btn-primary" type="submit"><i class="fa fa-save"></i> {{__('Save Changes')}}</button>
                                </div>
                            </div>
                        </div>

                        @if(is_default_lang())

                            <div class="panel">
                                <div class="panel-title"><strong>{{__("New Featured")}}</strong></div>
                                <div class="panel-body">
                                    <div class="form-group">
                                        <input type="checkbox" name="is_featured" @if($row->is_featured) checked @endif value="1"> {{__("Enable featured")}}
                                    </div>
                                </div>

                            </div>
 
                        @endif

             
                            <div class="panel">
                                <div class="panel-body">
                                    <h3 class="panel-body-title"> {{ __('Feature Image')}}</h3>
                                    <div class="form-group">
                                     <input type="file" name="file">
                                    </div>
                                </div>
                            </div>
                
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
