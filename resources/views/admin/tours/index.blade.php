@extends('admin.layouts.app')
@section('title')
    All tours |
@endsection
@section('content')
    <div class="container-fluid">
        <div class="d-flex justify-content-between mb20">
            <h1 class="title-bar">{{__("All tours")}}</h1>
            <div class="title-actions">
                <a href="{{route('dashboard.tours.create')}}" class="btn btn-primary">{{__("Add new Tour")}}</a>
            </div>
        </div>
        @include('admin.message')

        <div class="filter-div d-flex justify-content-between ">
            <div class="col-left">
                @if(!empty($rows))
                    <form method="post" action="{{route('dashboard.tours.bulkEdit')}}" class="filter-form filter-form-left d-flex justify-content-start">
                        {{csrf_field()}}
                        <select name="action" class="form-control">
                            <option value="">{{__(" Bulk Actions ")}}</option>
                            <option value="publish">{{__(" Publish ")}}</option>
                            <option value="draft">{{__(" Move to Draft ")}}</option>
                            <option value="pending">{{__("Move to Pending")}}</option>
                            <option value="clone">{{__(" Clone ")}}</option>
                            <option value="delete">{{__(" Delete ")}}</option>
                        </select>
                        <button data-confirm="{{__("Do you want to delete?")}}" class="btn-info btn btn-icon dungdt-apply-form-btn" type="button">{{__('Apply')}}</button>
                    </form>
                @endif
            </div>
            <div class="col-left">
                <form method="get" action="{{route('dashboard.hotel.index')}} " class="filter-form filter-form-right d-flex justify-content-end flex-column flex-sm-row" role="search">

                    <input type="text" name="s" value="{{ Request()->s }}" placeholder="{{__('Search by name')}}" class="form-control">
                    <button class="btn-info btn btn-icon btn_search" type="submit">{{__('Search')}}</button>
                </form>
            </div>
        </div>
        <div class="text-right">
            <p><i>{{__('Found :total items',['total'=>$rows->total()])}}</i></p>
        </div>
        <div class="panel">
            <div class="panel-body">
                <form action="" class="bravo-form-item">
                    <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th width="60px"><input type="checkbox" class="check-all"></th>
                            <th> {{ __('Name')}}</th>
                            <th width="200px"> {{ __('Address')}}</th>
                            <th width="200px"> {{ __('Price')}}</th>
                            <th width="200px"> {{ __('Days')}}</th>
                            <th width="100px"> {{ __('Status')}}</th>
                            <th width="100px"> {{ __('views')}}</th>
                            <th width="100px"> {{ __('Date')}}</th>
                            <th width="100px">Edit</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if($rows->total() > 0)
                            @foreach($rows as $row)
                                <tr class="{{$row->status}}">
                                    <td><input type="checkbox" name="ids[]" class="check-item" value="{{$row->id}}">
                                    </td>
                                    <td class="title">
                                        <a href="{{route('dashboard.tours.edit', $row->id)}}">{{$row->title}}</a>
                                    </td>
                                    <td>{{$row->address ?? ''}}</td>
                                    <td>{{$row->price ?? ''}}</td>
                                    <td>{{$row->days ?? ''}}</td>
                                    <td><span class="badge badge-{{ $row->status }}">{{ $row->status }}</span></td>
                                    <td>{{$row->views ?? ''}}</td>
                                    <td>{{ display_date($row->updated_at)}}</td>
                                    <td>
                                        <a href="{{route('dashboard.tours.edit',$row->id)}}" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> {{__('Edit')}}
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="7">{{__("No Tours found")}}</td>
                            </tr>
                        @endif
                        </tbody>
                    </table>
                    </div>
                </form>
                {{$rows->appends(request()->query())->links()}}
            </div>
        </div>
    </div>
@endsection
