@extends('admin.layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="d-flex justify-content-between mb20">
            <h1 class="title-bar">{{__("All Orders")}}</h1>

        </div>

        <div class="text-right">
            <p><i>{{__('Found :total items',['total'=>$orders->count()])}}</i></p>
        </div>
        <div class="panel">
            <div class="panel-body">
                <form action="" class="bravo-form-item">
                    <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                        <tr>

                            <th width="200px"> #</th>
                            <th width="200px"> {{ __('User Name')}}</th>
                            <th width="200px"> {{ __('Price')}}</th>
                            <th width="100px"> {{ __('Status')}}</th>
                            <th width="100px"> {{ __('Date')}}</th>
                            <th width="100px"></th>
                        </tr>
                        </thead>
                        <tbody>
                        @if($orders->count() > 0)
                            @foreach($orders as $index=>$row)
                                <tr>

                                    <td>  {{$index + 1 }}  </td>
                                    <td>  {{$row->user->name}}  </td>
                                    <td>{{ $row->grand_total }}</td>
                                    <td>{{ ($row->is_paid) ? 'Paid' : 'Not Paid'}}</td>
                                    <td>{{$row->days ?? ''}}</td>

                                    <td>{{ display_date($row->created_at)}}</td>

                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="7">{{__("No matches found")}}</td>
                            </tr>
                        @endif
                        </tbody>
                    </table>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection
