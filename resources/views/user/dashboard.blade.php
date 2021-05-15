@extends('layouts.usermain')

@section('content')


                <main id="content" class="bg-gray-01">
                    <div class="px-3 px-lg-6 px-xxl-13 py-5 py-lg-10">
                        <div class="d-flex flex-wrap flex-md-nowrap mb-6">
                            <div class="mr-0 mr-md-auto">
                                <h2 class="mb-0 text-heading fs-22 lh-15">Welcome back, {{ Auth::user()->name }}</h2>
                             </div>
                            <div>
                                <a href="{{ route('user.property.create')}}" class="btn btn-primary btn-lg">
                                    <span>Add New Property</span>
                                    <span class="d-inline-block ml-1 fs-20 lh-1">
                                        <i class="fa fa-building-o"></i>
                                    </span>
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 col-xxl-3 mb-6">
                                <div class="card">
                                    <div class="card-body row align-items-center px-6 py-7">
                                        <div class="col-5">
                                            <span class="w-83px h-83 d-flex align-items-center justify-content-center fs-36 badge badge-blue badge-circle">
                                                <svg class="icon icon-1">
                                                    <use xlink:href="#icon-1"></use>
                                                </svg>
                                            </span>
                                        </div>
                                        <div class="col-7 text-center">
                                            <p class="fs-42 lh-12 mb-0 counterup" data-start="0" data-end="{{$count_property}}" data-decimals="0" data-duration="0" data-separator="">{{$count_property}}</p>
                                            <p>{{__('All Properties')}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xxl-3 mb-6">
                                <div class="card">
                                    <div class="card-body row align-items-center px-6 py-7">
                                        <div class="col-5">
                                            <span class="w-83px h-83 d-flex align-items-center justify-content-center fs-36 badge badge-green badge-circle">
                                                <svg class="icon icon-2">
                                                    <use xlink:href="#icon-2"></use>
                                                </svg>
                                            </span>
                                        </div>
                                        <div class="col-7 text-center">
                                            <p class="fs-42 lh-12 mb-0 counterup" data-start="0" data-end="{{$count_review}}" data-decimals="0" data-duration="0" data-separator="">{{$count_review}}</p>
                                            <p>{{__('Total Visitor Reviews')}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xxl-3 mb-6">
                                <div class="card">
                                    <div class="card-body row align-items-center px-6 py-7">
                                        <div class="col-4">
                                            <span class="w-83px h-83 d-flex align-items-center justify-content-center fs-36 badge badge-yellow badge-circle">
                                                <i class="fa fa-eye-o"></i>
                                            </span>
                                        </div>
                                        <div class="col-8 text-center">
                                            <p class="fs-42 lh-12 mb-0 counterup" data-start="0" data-end="{{$count_review}}" data-decimals="0" data-duration="0" data-separator="">{{$count_review}}</p>
                                            <p>{{__('Total Visitor Reviews')}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xxl-3 mb-6">
                                <div class="card">
                                    <div class="card-body row align-items-center px-6 py-7">
                                        <div class="col-5">
                                            <span class="w-83px h-83 d-flex align-items-center justify-content-center fs-36 badge badge-pink badge-circle">
                                                <i class="fa fa-heart-o"></i>
                                            </span>
                                        </div>
                                        <div class="col-7 text-center">
                                            <p class="fs-42 lh-12 mb-0 counterup" data-start="0" data-end="{{$count_wish}}" data-decimals="0" data-duration="0" data-separator="">{{$count_wish}}</p>
                                            <p>{{__('Total Favorites')}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                    </div>
                </main>
            </div>


@endsection
