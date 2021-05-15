@extends('layouts.main')

@section('content')
<div id="home" class="home-banner-area home-style-three">
    <div class="container-fluid p-0">
        <div class="banner-slider-three owl-carousel">
            <div class="slider-item item-one">
                <div class="container">
                    <div class="banner-content">
                        <span class="sub-title">Amazing Pl aces</span>
                        <h1>
                            Make Your Trip Fun & Noted
                        </h1>
                        <p>
                            Travel has helped us to understand the meaning of life and it has helped us become better people. Each time we travel, we see the world with new eyes.
                        </p>
                     </div>
                </div>
            </div>
            <div class="slider-item item-two">
                <div class="container">
                    <div class="banner-content">
                        <span class="sub-title">Amazing Places</span>
                        <h1>
                            Make Your Trip Fun & Noted
                        </h1>
                        <p>
                            Travel has helped us to understand the meaning of life and it has helped us become better people. Each time we travel, we see the world with new eyes.
                        </p>
                     </div>
                </div>
            </div>
            <div class="slider-item item-three">
                <div class="container">
                    <div class="banner-content">
                        <span class="sub-title">Amazing Places</span>
                        <h1>
                            Make Your Trip Fun & Noted
                        </h1>
                        <p>
                            Travel has helped us to understand the meaning of life and it has helped us become better people. Each time we travel, we see the world with new eyes.
                        </p>
                     </div>
                </div>
            </div>
        </div>

        {{--  <div class="search-form">
            <form id="searchForm">
                <div class="row align-items-center">
                    <div class="col-lg-11">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="select-box">
                                    <i class='bx bx-map-alt'></i>
                                    <select class="form-control">
                                        <option data-display='Destination'>Nothing</option>
                                        <option value="1">North America</option>
                                        <option value="2">Spain Madrid</option>
                                        <option value="3">Japan Tokyo</option>
                                        <option value="4">Europe City</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="select-box">
                                    <i class='bx bx-calendar'></i>
                                    <input type="text" class="date-select form-control" placeholder="Depart Date" required="required" />
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="select-box">
                                    <i class='bx bx-package'></i>
                                    <select class="form-control">
                                        <option data-display='Travel Type'>Travel Type</option>
                                        <option value="1">City Tour</option>
                                        <option value="2">Family Tours</option>
                                        <option value="3">Seasonal Tours</option>
                                        <option value="4">Outdoor Activities</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="select-box">
                                    <i class='bx bx-time'></i>
                                    <select class="form-control">
                                        <option data-display='Tour Duration'>Nothing</option>
                                        <option value="1">5 Days</option>
                                        <option value="2">12 Days</option>
                                        <option value="3">21 Days</option>
                                        <option value="4">30 Days</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-1">
                        <button type="button" class="btn-search">
                            <i class='bx bx-search-alt'></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>  --}}
    </div>
</div>


<section class="features-section pt-100 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="item-single mb-30">
                    <i class='bx bx-calendar'></i>
                    <h3><a href="#">Reservation</a></h3>
                    <p>As compared with earlier times where a reservation personnel has to update its inventory every time.</p>
                    <div class="cta-btn">
                        <a href="#" class="btn-primary">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="item-single mb-30">
                    <i class='bx bxs-plane-take-off'></i>
                    <h3><a href="#">Tour Pack</a></h3>
                    <p>You can dream, create, design, and build the most wonder ful place in the world. But it requires people.</p>
                    <div class="cta-btn">
                        <a href="#" class="btn-primary">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 m-auto">
                <div class="item-single mb-30">
                    <i class='bx bx-money'></i>
                    <h3><a href="#">Payment</a></h3>
                    <p>As compared with earlier times where a reservation personnel has to update its inventory every time.</p>
                    <div class="cta-btn">
                        <a href="#" class="btn-primary">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section id="destination" class="destination-section pt-100 pb-70 bg-light">
    <div class="container">
        <div class="section-title">
            <h2>Destinations</h2>
            <p>Travel has helped us to understand the meaning of life and it has helped us become better people. Each time we travel, we see the world with new eyes.</p>
        </div>
        <div class="row">
            <div class="col-md-8 m-auto">
                <div class="filter-group">

                    <ul id="control" class="list-control">
                        <li class="active" data-filter="all">All</li>
                        <li data-filter="1">Hotel</li>
                        <li data-filter="2">Tour</li>
                        <li data-filter="3">Matches</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row filtr-container">

            @foreach ($allhotels as $hotel)


            <div class="col-lg-4 col-md-6 filtr-item" data-category="1" data-sort="value">

                <div class="item-single mb-30">
                    <div class="image">
                        <img src="{{ asset('images/' . $hotel->image_id)}}" style="width: 100%;height: 100%;max-height: 235px;" alt="Demo Image">
                    </div>
                    <div class="content">
                        <span class="location"><i class='bx bx-map'></i>{{ $hotel->address }}</span>
                        <h3>
                            <a href="{{ route('hotel', $hotel->slug)}}">{{ $hotel->title }}</a>
                        </h3>
                        <p>
                           {{ strip_tags(substr($hotel->content, 0, 100))}}
                        </p>
                        <hr>
                        <ul class="list">
                            <li><i class='bx bx-group'></i>{{ $hotel->views}}+</li>
                            <li>${{ $hotel->price }}</li>
                        </ul>
                    </div>
                    <div class="spacer"></div>
                </div>
            </div>
            @endforeach

            @foreach ($alltours as $tour)
            <div class="col-lg-4 col-md-6 filtr-item" data-category="2" data-sort="value">
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

            @foreach ($allmatches as $match)
            <div class="col-lg-4 col-md-6 filtr-item" data-category="3" data-sort="value">
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
                            {{ substr(strip_tags($match->content), 0, 100)}}
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


<section id="about" class="about-section about-style-three ptb-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-10 m-auto">
                <div class="about-content">
                    <div class="row">
                        <div class="col-12">
                            <h2>
                                About Us
                            </h2>
                            <h6>
                                Top Tour Operators and Travel Agency. We offering in total 793 tours and holidays through-out the world. Combined we have received 1532 customer reviews.
                            </h6>
                            <p>
                                Travel has helped us to understand the meaning of life and it has helped us become better people. Each time we travel, we see the world with new eyes.Travel has helped us to understand the meaning of life and it has helped us become better people. Each time we travel, we see the world with new eyes.Travel has helped us to understand the meaning of life and it has helped us.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-10 m-auto">
                        <div class="row">
                            <div class="col-lg-4 col-md-6">
                                <div class="content-list">
                                    <i class='bx bx-check-shield'></i>
                                    <h6>Safety Travel System</h6>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="content-list">
                                    <i class='bx bx-donate-heart'></i>
                                    <h6>Budget-Friendly Tour</h6>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="content-list">
                                    <i class='bx bx-support'></i>
                                    <h6>24/7 Customer Support</h6>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="content-list">
                                    <i class='bx bx-time'></i>
                                    <h6>Expert Trip Planning</h6>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="content-list">
                                    <i class='bx bx-station'></i>
                                    <h6>Fast Communication</h6>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="content-list">
                                    <i class='bx bx-like'></i>
                                    <h6>Right Solution & Guide</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="about-btn">
                        <a href="contact.html" class="btn-primary">Contact Us</a>
                        <a href="about-us.html" class="btn-primary">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="shape shape-1"><img src="{{ asset('images/shape1.png') }}" alt="Background Shape"></div>
    <div class="shape shape-2"><img src="{{ asset('images/shape2.png') }}" alt="Background Shape"></div>
    <div class="shape shape-3"><img src="{{ asset('images/shape3.png') }}" alt="Background Shape"></div>
    <div class="shape shape-4"><img src="{{ asset('images/shape4.png') }}" alt="Background Shape"></div>
</section>


<section id="testimonial" class="testimonial-section ptb-100">
    <div class="container">
        <div class="section-title">
            <h2>What're Our Clients Say</h2>
            <p>Travel has helped us to understand the meaning of life and it has helped us become better people. Each time we travel, we see the world with new eyes.</p>
        </div>
        <div class="row">
            <div class="col-lg-8 m-auto">
                <div class="testimonial-slider owl-carousel">
                    <div class="slider-item">
                        <div class="client-img">
                            <img src="{{ asset('images/client1.jpg') }}" alt="client-1" />
                        </div>
                        <div class="content">
                            <div class="client-info">
                                <h3>Jordan Alin</h3>
                                <span>Bloger & Youtuber</span>
                            </div>
                            <div class="quote">
                                <i class='bx bxs-quote-left'></i>
                            </div>
                            <p>
                                The Personal Travel Agents Academy is a 12-month training programme allowing anyone with no previous travel experience to start their own travel business. This is an advanced course to help build knowledge in travel and develop sales skills.
                            </p>
                            <div class="review">
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                            </div>
                        </div>
                    </div>
                    <div class="slider-item">
                        <div class="client-img">
                            <img src="{{ asset('images/client2.jpg') }}" alt="client-1" />
                        </div>
                        <div class="content">
                            <div class="client-info mb-30">
                                <h3>David Milan</h3>
                                <span>Photographer</span>
                            </div>
                            <div class="quote">
                                <i class='bx bxs-quote-left'></i>
                            </div>
                            <p>
                                The Personal Travel Agents Academy is a 12-month training programme allowing anyone with no previous travel experience to start their own travel business. This is an advanced course to help build knowledge in travel and develop sales skills.
                            </p>
                            <div class="review mt-15">
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                            </div>
                        </div>
                    </div>
                    <div class="slider-item">
                        <div class="client-img">
                            <img src="{{ asset('images/client3.jpg') }}" alt="client-1" />
                        </div>
                        <div class="content">
                            <div class="client-info mb-30">
                                <h3>Thomas Alva</h3>
                                <span>Journalist</span>
                            </div>
                            <div class="quote">
                                <i class='bx bxs-quote-left'></i>
                            </div>
                            <p>
                                The Personal Travel Agents Academy is a 12-month training programme allowing anyone with no previous travel experience to start their own travel business. This is an advanced course to help build knowledge in travel and develop sales skills.
                            </p>
                            <div class="review mt-15">
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                            </div>
                        </div>
                    </div>
                    <div class="slider-item">
                        <div class="client-img">
                            <img src="{{ asset('images/client4.jpg') }}" alt="client-1" />
                        </div>
                        <div class="content">
                            <div class="client-info mb-30">
                                <h3>Emma Watson</h3>
                                <span>Actress & Model</span>
                            </div>
                            <div class="quote">
                                <i class='bx bxs-quote-left'></i>
                            </div>
                            <p>
                                The Personal Travel Agents Academy is a 12-month training programme allowing anyone with no previous travel experience to start their own travel business. This is an advanced course to help build knowledge in travel and develop sales skills.
                            </p>
                            <div class="review mt-15">
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                            </div>
                        </div>
                    </div>
                    <div class="slider-item">
                        <div class="client-img">
                            <img src="{{ asset('images/client5.jpg') }}" alt="client-1" />
                        </div>
                        <div class="content">
                            <div class="client-info mb-30">
                                <h3>Jordan Alin</h3>
                                <span>Bloger & Youtuber</span>
                            </div>
                            <div class="quote">
                                <i class='bx bxs-quote-left'></i>
                            </div>
                            <p>
                                The Personal Travel Agents Academy is a 12-month training programme allowing anyone with no previous travel experience to start their own travel business. This is an advanced course to help build knowledge in travel and develop sales skills.
                            </p>
                            <div class="review mt-15">
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class='clients-img'>
            <img class="image image-1" src="{{ asset('images/client1.jpg') }}" alt="Demo Image">
            <img class="image image-2" src="{{ asset('images/client2.jpg') }}" alt="Demo Image">
            <img class="image image-3" src="{{ asset('images/client3.jpg') }}" alt="Demo Image">
            <img class="image image-4" src="{{ asset('images/client4.jpg') }}" alt="Demo Image">
            <img class="image image-5" src="{{ asset('images/client5.jpg') }}" alt="Demo Image">
        </div>
    </div>
    <div class="shape">
        <img src="{{ asset('images/shape1.png') }}" alt="Background Shape">
    </div>
</section>


<div id="video" class="video-section video-style-two">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="video-content">
                    <a href="https://www.youtube.com/watch?v=QSwvg9Rv2EI" class="youtube-popup video-btn">
                        <i class='bx bx-right-arrow'></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- Tours ' --}}

<section id="tours" class="tours-section pt-100 pb-70 bg-light">
    <div class="container">
        <div class="section-title">
            <h2>Recent Tours</h2>
            <p>Travel has helped us to understand the meaning of life and it has helped us become better people. Each time we travel, we see the world with new eyes.</p>
        </div>
        <div class="row no-wrap">

            <div class="col col-md-12">
                <div class="tours-slider owl-carousel mb-30">

                    @foreach ($feauturedtours as $tour)


                    <div class="slider-item">
                        <div class="image">
                            <img src="{{ asset('images/' . $tour->image_id ) }}" alt="Demo Image" />
                        </div>
                        <div class="content">
                            <div class="review">
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <span>39 Review</span>
                            </div>
                            <div class="title">
                                <h3>
                                    <a href="{{ route('tour', $tour->slug)}}">{{ $tour->title }}</a>
                                </h3>
                            </div>
                            <ul class="list">
                                <li><i class='bx bx-time'></i>{{ $tour->days }} Days</li>
                                <li><i class='bx bx-group'></i>{{ $tour->views }}+</li>
                                <li>${{ $tour->price }}</li>
                            </ul>
                        </div>
                    </div>

                    @endforeach


                </div>
            </div>
        </div>
    </div>
</section>


<section id="blog" class="blog-section pt-100 pb-70">
    <div class="container">
        <div class="section-title">
            <h2>Recent Matches</h2>
            <p>Travel has helped us to understand the meaning of life and it has helped us become better people. Each time we travel, we see the world with new eyes.</p>
        </div>
        <div class="row">

            @foreach ($matches as $key=>$match)

            <div class="col-lg-3">
                <div class="item-single item-big mb-30">
                    <div class="image">
                        <img src="{{ asset('images/' . $match->image_id ) }}" alt="Demo Image" />
                    </div>
                    <div class="content">
                        <ul class="info-list">
                            <li><i class='bx bx-calendar'></i>{{ $match->date }}</li>
                            <li><i class='bx bx-tag'></i>{{ $match->stadium }}</li>
                        </ul>
                        <h3>
                            <a href="{{ route('match', $match->slug) }}">{{ $match->title }}</a>
                        </h3>

                    </div>
                </div>
            </div>

            @endforeach
        </div>
    </div>
</section>

@endsection
