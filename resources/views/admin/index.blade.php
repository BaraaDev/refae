@extends('admin.layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="dashboard-page">
            <h4 class="welcome-title text-uppercase">
          {{__('Welcome :name!',['name'=>Auth::user()->nameOrEmail]) }}
            </h4>
        </div>
        <br>
        <div class="row">

                    <div class="col-sm-3">
                        <div class="dashboard-report-card card bg-primary">
                            <div class="card-content">
                                <span class="card-title">{{ __('Hotels') }}</span>
                                <span class="card-amount">{{ $hotels }}</span>
                                <span class="card-desc"> </span>
                            </div>
                            <div class="card-media">
                                <i class="fa fa-building-o"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="dashboard-report-card card bg-primary">
                            <div class="card-content">
                                <span class="card-title">{{ __('Tours') }}</span>
                                <span class="card-amount">{{ $tours }}</span>
                                <span class="card-desc"> </span>
                            </div>
                            <div class="card-media">
                                <i class="fa fa-building-o"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="dashboard-report-card card bg-primary">
                            <div class="card-content">
                                <span class="card-title">{{ __('Matches') }}</span>
                                <span class="card-amount">{{ $matches}}</span>
                             </div>
                            <div class="card-media">
                                <i class="fa fa-comment"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="dashboard-report-card card bg-primary">
                            <div class="card-content">
                                <span class="card-title">{{ __('News') }}</span>
                                <span class="card-amount">{{ $news}}</span>
                             </div>
                            <div class="card-media">
                                <i class="fa fa-comment"></i>
                            </div>
                        </div>
                    </div>

        </div>



    </div>
@endsection
