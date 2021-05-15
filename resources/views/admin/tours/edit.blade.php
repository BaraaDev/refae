@extends('admin.layouts.app')

@section('content')

    <form action="{{route('dashboard.tours.update', $row->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="container-fluid">
            <div class="d-flex justify-content-between mb20">
                <div class="">
                    <h1 class="title-bar"> Edit Tour {{ $row->title }}</h1>
                </div>
            </div>

            @include('admin.message')


            <div class="lang-content-box">
                <div class="row">
                    <div class="col-md-9">

                        <div class="panel">
                            <div class="panel-title"><strong>{{__("Tour Content")}}</strong></div>
                            <div class="panel-body">
                                <div class="form-group">
                                    <label>{{__("Title")}}</label>
                                    <input type="text"  placeholder="{{__("Name of the tour")}}" name="title" value="{{ $row->title }}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label class="control-label">{{__("Content")}}</label>
                                    <div class="">
                                        <textarea name="content" class="d-none has-ckeditor" cols="30" rows="10">{{ $row->content }}</textarea>
                                    </div>
                                </div>


                                    <div class="form-group">
                                        <label class="control-label">{{__("Youtube Video")}}</label>
                                        <input type="text" name="video" value="{{ $row->video }}" class="form-control"   placeholder="{{__("Youtube link video")}}">
                                    </div>


                            </div>
                        </div>
                        @if(is_default_lang())
                        <div class="panel">
                            <div class="panel-title"><strong>{{__("Extra Info")}}</strong></div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>No. of days</label>
                                            <input type="number" value="{{ $row->days }}"   placeholder="{{__("Example: 3")}}" name="days" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif



                        <div class="panel">
                            <div class="panel-title"><strong>{{__("Locations")}}</strong></div>
                            <div class="panel-body">

                                <div class="form-group">
                                    <label class="control-label">{{__("Real address")}}</label>
                                    <input type="text" name="address" value="{{ $row->address }}" class="form-control" placeholder="{{__("Real address")}}">
                                </div>
                            </div>
                        </div>



                        <div class="panel">
                            <div class="panel-title"><strong>{{__("Pricing")}}</strong></div>
                            <div class="panel-body">

                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="control-label">{{__("Price")}}</label>
                                                <input type="number" value="{{ $row->price }}" step="any" min="0" name="price" class="form-control" placeholder="{{__("Tour Price")}}">
                                            </div>
                                        </div>

                                    </div>


                            </div>
                        </div>



                    </div>
                    <div class="col-md-3">
                        <div class="panel">
                            <div class="panel-title"><strong>{{__('Publish')}}</strong></div>
                            <div class="panel-body">

                                <div>
                                    <label><input @if($row->status=='publish') checked @endif type="radio" name="status" value="publish"> {{__("Publish")}}
                                    </label></div>
                                <div>
                                    <label><input @if($row->status=='draft') checked @endif type="radio" name="status" value="draft"> {{__("Draft")}}
                                    </label></div>

                                <div class="text-right">
                                    <button class="btn btn-primary" type="submit"><i class="fa fa-save"></i> {{__('Save Changes')}}</button>
                                </div>
                            </div>
                        </div>


                        @if(is_default_lang())
                            <div class="panel">
                                <div class="panel-title"><strong>{{__("Availability")}}</strong></div>
                                <div class="panel-body">
                                    <div class="form-group">
                                        <label>{{__('Tour Featured')}}</label>
                                        <br>
                                        <label>
                                            <input type="checkbox" name="is_featured"  value="1"> {{__("Enable featured")}}
                                        </label>
                                    </div>
                                </div>
                            </div>
                             <div class="panel">
                                <div class="panel-title"><strong>{{__('Feature Image')}}</strong></div>
                                <div class="panel-body">
                                    <div class="form-group">
                                      <input type="file" name="file">
                                    </div>
                                </div>
                            </div>

                            <div class="panel">
                                <div class="panel-title"><strong>{{__('Gallery')}}</strong></div>
                                <div class="panel-body">
                                    <div class="form-group">
                                      <input type="file" name="gallery[]" multiple>
                                    </div>
                                </div>
                            </div>
                         @endif
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection

