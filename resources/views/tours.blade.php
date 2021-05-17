@extends('layouts.main')

@section('content')
    <div class="page-title-area ptb-100">
        <div class="container">
            <div class="page-title-content">
                <h1>Tours</h1>
                <ul>
                    <li class="item"><a href="{{ url('/')}}">Home</a></li>
                    <li class="item"><a href=""><i class='bx bx-chevrons-right'></i>Tours</a></li>
                </ul>
            </div>
        </div>
        <div class="bg-image">
            <img src="{{ asset('/images/al-masa-hotel.jpg') }}" alt="Demo Image">
        </div>
    </div>

    <section id="top-destination" class="top-destination-section pt-100 pb-70 bg-light">
        <div class="container">
            <div class="section-title">
                <h2>Top Tours</h2>
                <p>Travel has helped us to understand the meaning of life and it has helped us become better people. Each time we travel, we see the world with new eyes.</p>
            </div>
            <div class="row">
                @foreach ($tours as $tour)
                <div class="col-lg-4 col-md-6">

                    <div class="item-single mb-30">
                        <div class="image">
                            <img src="{{ asset('images/' . $tour->image_id)}}" style="width: 100%;height: 100%;max-height: 235px;" alt="Demo Image">
                        </div>
                        <div class="content">
                            <span class="location"><i class='bx bx-map'></i>{{ $tour->address }}</span>
                            <h3>
                                <a href="{{ route('tour', $tour->slug)}}">{{ $tour->title }}</a>
                            </h3>
                            <p>
                                {{ substr(strip_tags($tour->content), 0, 100)}}     </p>
                            <hr>
                            <ul class="list">
                                <li><i class='bx bx-time'></i>{{ $tour->days}} Days</li>
                                <li><i class='bx bx-group'></i>{{ $tour->views}}+</li>
                                <li>${{ $tour->price}}</li>
                            </ul>
                        </div>
                        <div class="spacer"></div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection



