@extends('layouts.site')

@section('content')


        <section class="pt-2 pb-10 pb-lg-17 page-title bg-overlay bg-img-cover-center" style="background-image: url('images/BG4.jpg');">
            <div class="container">

                <h1 class="fs-22 fs-md-42 mb-0 text-white font-weight-normal text-center pt-17 pb-13 lh-15 px-lg-16" data-animate="fadeInDown">
                    {{ __('Locations')}}
                </h1>
            </div>
        </section>
        <section class="bg-patten-05 mb-13">
            <div class="container">

                <div class="row mb-9">

                    <?php $size_col = 0; ?>
                    @foreach ($locations as $index=>$location)

                    @php
                    $translation = $location->translateOrOrigin(app()->getLocale());
                    $link_location = false;
                   @endphp

                    <?php
                    if(($index % 2) == 0 && $size_col != 0) {
                        $size_col = 4 ? 8 : 4;
                    }else {
                        $size_col = $size_col == 4 ? 8 : 4;
                    }
                ?>


                    <div class="col-lg-{{$size_col}} col-xl-{{$size_col}}">
                        <a href="{{route('property.search', ['location_id' => $location->id])}}" style="margin-bottom: 12px;display: block;min-height: 300px;height: 250px;">
                        <div style="background-image: url({{asset('images/' . $location->image_id ) }}); background-size: cover;background-repeat: no-repeat;" class="card border-hover shadow-hover-lg-1 px-7 pb-6 pt-4 h-100 bg-transparent bg-hover-white">
                            <div class="card-img-top d-flex align-items-end justify-content-center">
                                <span class="text-primary fs-90 lh-1">
                                    {{-- <svg class="icon icon-e1">
                                        <use xlink:href="#icon-e1"></use>
                                    </svg> --}}
                                </span>
                            </div>
                            <div class="card-body px-0 pt-6 pb-0 text-center">
                                <h4 class="card-title fs-18 lh-17 text-dark mb-2">{{$translation->name}}</h4>
                                <p class="card-text px-2">
                                    @php $count = $location->getDisplayNumberServiceInLocation('property') @endphp
                                    {{$count}}
                                </p>
                            </div>
                        </div>
                        </a>
                    </div>

                @endforeach

                </div></div>


@endsection
