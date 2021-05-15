@extends('admin.layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="d-flex justify-content-between mb20">
            <h1 class="title-bar">{{ __('All Users')}}</h1>

        </div>
        @include('admin.message')
        <div class="filter-div d-flex justify-content-between ">
            <div class="col-left">
                @if(!empty($rows))
                    <form method="post" action="{{  route('dashboard.user.bulkEdit')}}" class="filter-form filter-form-left d-flex justify-content-start">
                        {{csrf_field()}}
                        <select name="action" class="form-control">
                            <option value="">{{__(" Bulk Actions ")}}</option>
                            {{--<option value="publish">{{__(" Publish ")}}</option>--}}
                            {{--<option value="draft">{{__(" Move to Draft ")}}</option>--}}
                            <option value="delete">{{__(" Delete ")}}</option>
                        </select>
                        <button data-confirm="{{__("Do you want to delete?")}}" class="btn-info btn btn-icon dungdt-apply-form-btn" type="button">{{__('Apply')}}</button>
                    </form>
                @endif
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
                            <th>{{__('Name')}}</th>
                            <th>{{__('Email')}}</th>
                            <th>{{__('Phone')}}</th>
                            <th>{{__('Photo')}}</th>
                            <th>{{__('Status')}}</th>
                            <th class="date">{{ __('Date')}}</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($rows as $row)
                            <tr>
                                <td><input type="checkbox" name="ids[]" value="{{$row->id}}" class="check-item"></td>
                                <td class="title">
                                    <a href="{{   route('dashboard.user.edit', $row->id)}}">{{$row->getDisplayName()}}</a>
                                </td>
                                <td>{{$row->email}}</td>
                                <td>{{$row->phone}}</td>
                                <td><img src="{{ asset('images/' . $row->avatar)}}" style="max-width: 50px;"></td>
                                <td>{{  $row->status}}</td>
                                <td>{{ display_date($row->created_at)}}</td>
                                <td>
                                    <a class="btn btn-sm btn-primary" href="{{   route('dashboard.user.edit', $row->id)}}">{{__('Edit')}}</a>
                                    <a class="btn btn-sm btn-info" href="{{   route('dashboard.user.password',$row->id)}}">{{__('Change Password')}}</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    </div>
                </form>
                {{$rows->appends(request()->query())->links()}}
            </div>
        </div>
    </div>
@endsection
