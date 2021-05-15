@extends('admin.layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="d-flex justify-content-between mb20">
            <h1 class="title-bar">{{__("Location")}}</h1>
        </div>
        @include('admin.message')
        <div class="row">
            <div class="col-md-4 mb40">
                <div class="panel">
                    <div class="panel-title">{{__("Add Location")}}</div>
                    <div class="panel-body panel-index">
                        <form action="{{route('dashboard.location.store',['lang'=>request()->query('lang')])}}" method="post">
                            @csrf
                            @include('admin.location.form',['parents'=>$rows])
                            <div class="form-group form-index-hide">
                                <label class="control-label">{{__("Location Map")}}</label>
                                <div class="control-map-group">
                                    <div id="map_content"></div>
                                    <div class="g-control d-none" >
                                        <div class="form-group">
                                            <label>{{__("Map Lat")}}:</label>
                                            <input type="text" name="map_lat" class="form-control" value="{{$row->map_lat}}">
                                        </div>
                                        <div class="form-group">
                                            <label>{{__("Map Lng")}}:</label>
                                            <input type="text" name="map_lng" class="form-control" value="{{$row->map_lng}}">
                                        </div>
                                        <div class="form-group">
                                            <label>{{__("Map Zoom")}}:</label>
                                            <input type="text" name="map_zoom" class="form-control" value="{{$row->map_zoom ?? "8"}}">
                                        </div>
                                    </div>
                                </div>
                                <p><i>{{__('Click onto map to place Location address')}}</i></p>
                            </div>
                            <div class="">
                                <button class="btn btn-primary" type="submit">{{__("Add new")}}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="filter-div d-flex justify-content-between ">

                    <div class="col-left">
                        <form method="get" action="{{ route('dashboard.location.index')}}" class="filter-form filter-form-right d-flex justify-content-end" role="search">
                            <input type="text" name="s" value="{{ Request()->s }}" class="form-control" placeholder="{{__("Search by name")}}">
                            <button class="btn-info btn btn-icon btn_search" id="search-submit" type="submit">{{__('Search')}}</button>
                        </form>
                    </div>
                </div>
                <div class="panel">
                    <div class="panel-body">
                        <form action="" class="bravo-form-item">
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th>{{__("Name")}}</th>
                                    <th class="slug d-none d-md-block">{{__("Slug")}}</th>
                                    <th class="slug d-none d-md-block">{{__("Image")}}</th>
                                    <th class="status">{{__("Status")}}</th>
                                    <th class="date d-none d-md-block" >{{__("Date")}}</th>
                                    <th class="date d-none d-md-block" >{{__("Action")}}</th>
                                </tr>
                                </thead>
                                <tbody>
                                @if( count($rows) > 0)

                                    @foreach ($rows as $row)

                                    <tr>

                                        <td class="title">
                                            <a href="{{ route('dashboard.location.edit',$row->id)}}">{{ $row->name}}</a>
                                        </td>
                                        <td class="d-none d-md-block">{{$row->slug}}</td>
                                        <td class="d-none d-md-block"><img src="{{ asset('images/'. $row->image_id)}}" style="max-width: 120px;"></td>
                                        <td><span class="badge badge-{{ $row->status }}">{{ $row->status }}</span></td>
                                        <td class="d-none d-md-block">{{display_date($row->updated_at)}}</td>
                                        <td class="d-none d-md-block">
                                            <form method="post" action="{{ route('dashboard.location.destroy', $row->id) }}">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">  Delete </button>
                                            </form>
                                        </td>
                                    </tr>

                                   @endforeach


                                @else
                                    <tr>
                                        <td colspan="5">{{__("No data")}}</td>
                                    </tr>
                                @endif
                                </tbody>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section ('script.body')
    {!! \App\Helpers\MapEngine::scripts() !!}
    <script>
        jQuery(function ($) {
            new BravoMapEngine('map_content', {
                disableScripts:true,
                fitBounds: true,
                center: [{{$row->map_lat ?? "51.505"}}, {{$row->map_lng ?? "-0.09"}}],
                zoom:{{$row->map_zoom ?? "8"}},
                ready: function (engineMap) {
                    @if($row->map_lat && $row->map_lng)
                    engineMap.addMarker([{{$row->map_lat}}, {{$row->map_lng}}], {
                        icon_options: {}
                    });
                    @endif
                    engineMap.on('click', function (dataLatLng) {
                        engineMap.clearMarkers();
                        engineMap.addMarker(dataLatLng, {
                            icon_options: {}
                        });
                        $("input[name=map_lat]").attr("value", dataLatLng[0]);
                        $("input[name=map_lng]").attr("value", dataLatLng[1]);
                    });
                    engineMap.on('zoom_changed', function (zoom) {
                        $("input[name=map_zoom]").attr("value", zoom);
                    })
                }
            });
        })
    </script>
@endsection
