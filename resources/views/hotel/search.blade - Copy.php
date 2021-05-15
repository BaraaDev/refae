@extends('layouts.app')
@section('head')
   <link href="{{ asset('dist/frontend/module/property/css/property.css?_ver='.config('app.version')) }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset("libs/ion_rangeslider/css/ion.rangeSlider.min.css") }}"/>
@endsection
@section('content')

     <div class="bravo_search_property">
          <div class="bravo_banner" @if($bg = setting_item("property_page_search_banner")) style="background-image: url({{get_file_url($bg,'full')}})" @endif >
            <div class="container">
                <h1>
                    {{setting_item_with_lang("property_page_search_title")}}
                </h1>
            </div>
        </div>

            <section class="our-listing bgc-f7 pb30-991">
                <div class="container">

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="dn db-991">
                                <div id="main2">
                                    <span id="open2" class="flaticon-filter-results-button filter_open_btn style3"> {{__('Show Filter')}}</span>
                                </div>
                            </div>
                            <div class="breadcrumb_content style2 mt30-767 mb30-767">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{url('/')}}">{{__('Home')}}</a></li>
                                    <li class="breadcrumb-item active text-thm" aria-current="page">{{__('List Property')}}</li>
                                </ol>
                                <h2 class="breadcrumb_title">{{__('List Property')}}</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-xl-4">

                            @include('layouts.search.side-form')

                        </div>
                        <div class="col-md-12 col-lg-8">
                            <div class="bravo-list-item">
                                <div class="row">
                                    <div class="grid_list_search_result">
                                        <div class="col-sm-12 col-md-4 col-lg-4 col-xl-5">
                                            <div class="left_area tac-xsd">
                                                <p>
                                                    @if($rows->total() > 1)
                                                        {{ __(":count properties found",['count'=>$rows->total()]) }}
                                                    @else
                                                        {{ __(":count property found",['count'=>$rows->total()]) }}
                                                    @endif
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-8 col-lg-8 col-xl-7">
                                            <div class="right_area text-right tac-xsd">
                                                <form method="GET">
                                                    <ul>
                                                         <li class="list-inline-item"><span class="stts">Status:</span>
                                                            <select class="selectpicker show-tick">
                                                                <option>All Status</option>
                                                                <option>Recent</option>
                                                                <option>Old Review</option>
                                                            </select>
                                                        </li>
                                                        <li class="list-inline-item"><span class="shrtby">{{__('Sort by')}}:</span>
                                                            <select value="{{$filter}}" onchange="this.form.submit()" name="filter" class="selectpicker show-tick">
                                                                <option value="new" @if(Request::input('filter') == 'new') selected @endif>{{__('Newest')}}</option>
                                                                <option value="old" @if(Request::input('filter') == 'old') selected @endif>{{__('Oldest')}}</option>
                                                                <option value="price_high" @if(Request::input('filter') == 'price_high') selected @endif>{{__('Price [high to low]')}}</option>
                                                                <option value="price_low" @if(Request::input('filter') == 'price_low') selected @endif>{{__('Price [low to high]')}}</option>
                                                                <option value="name_high" @if(Request::input('filter') == 'name_high') selected @endif>{{__('Name [a->z]')}}</option>
                                                                <option value="name_low" @if(Request::input('filter') == 'name_low') selected @endif>{{__('Name [z->a]')}}</option>
                                                            </select>
                                                        </li>
                                                    </ul>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="list-item">
                                    <div class="row">
                                        @if($rows->total() > 0)
                                            @foreach($rows as $row)
                                                <div class="col-lg-6 col-md-6">
                                                    @include('layouts.search.loop-gird')
                                                </div>
                                            @endforeach
                                        @else
                                            <div class="col-lg-12">
                                                <div class="border rounded p-3 bg-white">
                                                    {{__("Property not found")}}
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-lg-12 mt20">
                                    <div class="mbp_pagination">
                                        {{$rows->appends(request()->query())->links()}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


        {{-- </div>
    </div> --}}
@endsection

@section('footer')
    <script type="text/javascript" src="{{ asset("libs/ion_rangeslider/js/ion.rangeSlider.min.js") }}"></script>
    {{-- <script type="text/javascript" src="{{ asset('module/property/js/property.js?_ver='.config('app.version')) }}"></script> --}}
@endsection
