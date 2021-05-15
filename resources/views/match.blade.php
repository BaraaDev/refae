@extends('layouts.main')

@section('content')



    <div class="page-title-area ptb-100">
        <div class="container">
            <div class="page-title-content">
                <h1>{{ $match->title }}</h1>
                <ul>
                    <li class="item"><a href="{{ url('/')}}">Home</a></li>
                    <li class="item"><a href="#"><i class='bx bx-chevrons-right'></i>{{ $match->title }}</a></li>
                </ul>
            </div>
        </div>
        <div class="bg-image">
            <img src="{{ asset('/images/matchsbg.jpg') }}" alt="Demo Image">
        </div>
    </div>


    <section class="destinations-details-section pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <h2>{{ $match->title}}</h2>
            </div>
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="destination-details-desc mb-30">
                        <div class="row align-items-center">
                            <div class="col-sm-12">
                                <div class="image mb-30">
                                    <img style="width: 100%;min-height: 376px;" src="{{ asset('images/' . $match->image_id) }}" alt="Demo Image" />
                                </div>
                            </div>
                        </div>
                        <div class="content mb-20">
                             <p>
                                {!! $match->content !!}
                            </p>

                        </div>

                        <div class="info-content">
                            <h3 class="sub-title">Some Information</h3>
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="content-list">
                                        <i class='bx bx-map-alt'></i>
                                        <h6><span>Stadium :</span> {{ $match->stadium }}</h6>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="content-list">
                                        <i class='bx bx-book-reader'></i>
                                        <h6><span>Date :</span>  {{ $match->date }}</h6>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="content-list">
                                        <i class='bx bx-notepad'></i>
                                        <h6><span>Price :</span>  ${{ $match->price }}</h6>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="content-list">
                                        <i class='bx bx-user'></i>
                                        <h6><span>Views  :</span>  {{ $match->views }}</h6>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4 col-md-12">

                    <a id="add-to-cart" class="btn-primary">Book Now</a>
                    <input type="hidden" id="prop" value="{{ $match->id }}">
                    <input type="hidden" id="type" value="match">

                    <aside class="widget-area">

                        @if($match->video)
                        <div class="widget widget-video mb-30">
                            <div class="video-image">
                                <img src="{{ asset('images/video-bg3.jpg') }}" alt="video" />
                            </div>
                            <a href="{{ $match->video }}" class="youtube-popup video-btn">
                                <i class='bx bx-right-arrow'></i>
                            </a>
                        </div>
                        @endif

                        @php  $matches = App\Models\Matches::where('id', '!=', $match->id)->take(3)->get();  @endphp

                        @if($matches->count() > 0)

                        <div class="widget widget-article mb-30">
                            <h3 class="sub-title">Popular Matches</h3>

                            @foreach ($matches as $item)

                            <article class="article-item">
                                <div class="image">
                                    <img src="{{ asset('images/' . $item->image_id) }}" alt="Demo Image" />
                                </div>
                                <div class="content">
                                     <h3>
                                        <a href="{{ route('match', $item->slug)}}">{{ $item->title }}</a>
                                    </h3>
                                    <ul class="list">
                                        <li><i class='bx bx-time'></i>{{ $item->days }} Days</li>
                                        <li>${{ $item->price }}</li>
                                    </ul>
                                </div>
                            </article>

                            @endforeach

                        </div>
                        @endif

                        @if($match->gallery)

                        <div class="widget widget-gallery mb-30">
                            <h3 class="sub-title">Gallery</h3>
                            <ul class="instagram-post">

                                @foreach (explode(',', $match->gallery) as $photo)
                                <li>
                                    <img src="{{ asset('images/'. $photo )}}" alt="Demo Image">
                                 </li>
                                @endforeach


                            </ul>
                        </div>

                        @endif

                    </aside>
                </div>
            </div>
        </div>
    </section>


@endsection
