@extends('admin.layouts.app')
@section('content')

    <div class="container-fluid">
        <div class="d-flex justify-content-between mb20">
            <h1 class="title-bar">{{__("All Reviews")}}</h1>
        </div>
        @include('admin.message')


        <div class="panel">
            <div class="panel-body">
                <form class="bravo-form-item">
                    <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th width="60px"><input type="checkbox" class="check-all"></th>
                            <th width="150px"> {{ __('Author')}}</th>
                            <th> {{ __('Review Content')}}</th>
                            <th width="250px"> {{ __('In Response To')}}</th>
                            <th width="80px"> {{ __('Service')}}</th>
                            <th width="100px"> {{ __('Status')}}</th>
                            <th width="140px"> {{ __('Submitted On')}}</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if($rows->total() > 0)

                            @foreach($rows as $row)



                                <tr class="{{$row->status}}">
                                    <td><input type="checkbox" name="ids[]" class="check-item" value="{{$row->id}}">
                                    </td>
                                    <td>
                                        @if(!empty( $metaUser =  $row->getUserInfo))

                                            <p>

                                            </p>
                                        @else
                                            {{__("[Author Deleted]")}}
                                        @endif
                                    </td>
                                    <td>
                                        <strong>{{$row->title}}</strong>
                                        <p>{{$row->content}}</p>
                                        @if($row->rate_number)
                                            <ul class="review-star left">
                                                @for( $i = 0 ; $i < 5 ; $i++ )
                                                    @if($i < $row->rate_number)
                                                        <li><i class="fa fa-star"></i></li>
                                                    @else
                                                        <li><i class="fa fa-star-o"></i></li>
                                                    @endif
                                                @endfor
                                            </ul>
                                        @endif
                                    </td>
                                    <td>

                                    </td>
                                    <td>

                                    </td>
                                    <td>
                                     </td>
                                    <td>{{ display_datetime($row->updated_at)}}</td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="6">{{__("No data")}}</td>
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
