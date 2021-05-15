@extends('layouts.site')

@section('content')


    <main id="content" class="p-top-100">

        <section class="pt-8 pb-11 bg-gray-01">
            <div class="container">
                <div class="row">

                    <div class="col-lg-4 order-2 order-lg-1 primary-sidebar sidebar-sticky" id="sidebar">

                        <div class="primary-sidebar-inner">

                            @include('inc.side-filter')

                            @include('inc.side-featured')

                        </div>
                    </div>

                    <div class="col-lg-8 mb-8 mb-lg-0 order-1 order-lg-2">
                        <div class="row align-items-sm-center mb-4">
                            <div class="col-md-6">
                                <h2 class="fs-15 text-dark mb-0">

                                @if($rows->total() > 1)

                                 <span class="text-primary">   {{ __(":count properties found",['count'=>$rows->total()]) }} </span>

                               @else

                                <span class="text-primary">  {{ __(":count property found",['count'=>$rows->total()]) }}</span>

                              @endif

                           </h2>

                            </div>

                            <div class="col-md-6 mt-4 mt-md-0">
                                <div class="d-flex justify-content-md-end align-items-center">
                                    <div class="input-group border rounded input-group-lg w-auto bg-white mr-3">
                                        <label class="input-group-text bg-transparent border-0 text-uppercase letter-spacing-093 pr-1 pl-3" for="inputGroupSelect01"><i class="fas fa-align-left fs-16 pr-2"></i>Sortby:</label>

                                        <select value="{{$filter}}" onchange="this.form.submit()" name="filter"
                                         class="form-control border-0 bg-transparent shadow-none p-0 selectpicker sortby selectpicker show-tick" data-style="bg-transparent border-0 font-weight-600 btn-lg pl-0 pr-3">
                                            <option value="new" @if(Request::input('filter') == 'new') selected @endif>{{__('Newest')}}</option>
                                            <option value="old" @if(Request::input('filter') == 'old') selected @endif>{{__('Oldest')}}</option>
                                            <option value="price_high" @if(Request::input('filter') == 'price_high') selected @endif>{{__('Price [high to low]')}}</option>
                                            <option value="price_low" @if(Request::input('filter') == 'price_low') selected @endif>{{__('Price [low to high]')}}</option>
                                            <option value="name_high" @if(Request::input('filter') == 'name_high') selected @endif>{{__('Name [a->z]')}}</option>
                                            <option value="name_low" @if(Request::input('filter') == 'name_low') selected @endif>{{__('Name [z->a]')}}</option>
                                        </select>
                                    </div>

                                </div>
                            </div>
                        </div>


                        @if($rows->total() > 0)

                        @foreach($rows as $row)


                                @include('inc.full-page-loop')


                        @endforeach

                    @else
                        <div class="col-lg-12">
                            <div class="border rounded p-3 bg-white">
                                {{__("Property not found")}}
                            </div>
                        </div>
                    @endif

                        <nav class="pt-6">
                            {{$rows->appends(request()->query())->links()}}
                        </nav>
                    </div>
                </div>
            </div>
        </section>


    </main>


    @endsection
