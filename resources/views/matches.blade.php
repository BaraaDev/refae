@extends('layouts.main')

@section('content')


@extends('layouts.main')

@section('content')


    <div class="page-title-area ptb-100">
        <div class="container">
            <div class="page-title-content">
                <h1>Matches</h1>
                <ul>
                    <li class="item"><a href="{{ url('/')}}">Home</a></li>
                    <li class="item"><a href=""><i class='bx bx-chevrons-right'></i>Matches</a></li>
                </ul>
            </div>
        </div>
        <div class="bg-image">
            <img src="{{ asset('/images/matchsbg.jpg') }}" alt="Demo Image">
        </div>
    </div>


    <section id="top-destination" class="top-destination-section pt-100 pb-70 bg-light">
        <div class="container">
            <div class="section-title">
                <h2>Top Matches</h2>
                <p>Travel has helped us to understand the meaning of life and it has helped us become better people. Each time we travel, we see the world with new eyes.</p>
            </div>
            <div class="row">

                @foreach ($matches as $match)

                <div class="col-lg-4 col-md-6">

                    <div class="item-single mb-30">
                        <div class="image">
                            <img src="{{ asset('images/' . $match->image_id)}}" style="width: 100%;height: 100%;max-height: 235px;" alt="Demo Image">
                        </div>
                        <div class="content">
                            <span class="location"><i class='bx bx-map'></i>{{ $match->stadium }}</span>
                            <h3>
                                <a href="{{ route('match', $match->slug)}}">{{ $match->title }}</a>
                            </h3>

                            <p>
                                {{ substr(strip_tags($match->content), 0, 100)}}     </p>
                            </p>
                            <hr>
                            <ul class="list">
                                <li><i class='bx bx-time'></i>{{ $match->date }}</li>
                                <li><i class='bx bx-group'></i>{{ $match->views }}+</li>
                                <li>${{ $match->price }}</li>
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


@endsection
