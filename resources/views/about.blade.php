@extends('layouts.main')

@section('content')


 
    <div class="page-title-area ptb-100">
        <div class="container">
            <div class="page-title-content">
                <h1>About Us</h1>
                <ul>
                    <li class="item"><a href="{{ url('/')}}">Home</a></li>
                    <li class="item"><a href="#"><i class='bx bx-chevrons-right'></i>About</a></li>
                </ul>
            </div>
        </div>
        <div class="bg-image">
            <img src="{{ asset('images/about.jpg') }}" alt="Demo Image">
        </div>
    </div>


    <section id="about" class="about-section about-style-three ptb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-10 m-auto">
                    <div class="about-content">
                        <div class="row">
                            <div class="col-12">
                                <h2>
                                    About Jaunt
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
                            <a href="{{ route('contact')}}" class="btn-primary">Contact Us</a>
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


    <section id="about" class="about-section pt-100 pb-70 bg-light">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="video-content mb-30">
                        <div class="video-image">
                            <img src="{{ asset('images/about1.jpg') }}" alt="video" />
                        </div>
                        <a href="https://www.youtube.com/watch?v=i9E_Blai8vk&amp;ab_channel=PriscillaLee" class="youtube-popup video-btn">
                            <i class='bx bx-right-arrow'></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-content mb-30">
                        <h2>
                            Why Choose Us
                        </h2>
                        <h6>
                            Top Tour Operators and Travel Agency. We offering in total 793 tours and holidays throughout the world. Combined we have received 1532 customer reviews and an average rating of 5 out of 5 stars.
                        </h6>
                        <p>
                            Travel has helped us to understand the meaning of life and it has helped us become better people. Each time we travel, we see the world with new eyes.
                        </p>
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="content-list">
                                    <i class='bx bx-check-shield'></i>
                                    <h6>Safety Travel System</h6>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="content-list">
                                    <i class='bx bx-donate-heart'></i>
                                    <h6>Budget-Friendly Tour</h6>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="content-list">
                                    <i class='bx bx-time'></i>
                                    <h6>Expert Trip Planning</h6>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="content-list">
                                    <i class='bx bx-station'></i>
                                    <h6>Fast Communication</h6>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="content-list">
                                    <i class='bx bx-like'></i>
                                    <h6>Right Solution & Guide</h6>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="content-list">
                                    <i class='bx bx-support'></i>
                                    <h6>24/7 Customer Support</h6>
                                </div>
                            </div>
                        </div>
                        <div class="about-btn">
                            <a href="{{ route('contact')}}" class="btn-primary">Contact Us</a>
                         </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="shape shape-1">
            <img src="{{ asset('images/shape1.png') }}" alt="Background Shape">
        </div>
        <div class="shape shape-2">
            <img src="{{ asset('images/shape2.png') }}" alt="Background Shape">
        </div>
    </section>


    <section class="features-section pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="item-single mb-30">
                        <i class='bx bx-calendar'></i>
                        <h3><a href="#">Reservation</a></h3>
                        <p>As compared with earlier times where a reservation personnel has to update its inventory every time.</p>
 
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="item-single mb-30">
                        <i class='bx bxs-plane-take-off'></i>
                        <h3><a href="#">Tour Pack</a></h3>
                        <p>You can dream, create, design, and build the most wonder ful place in the world. But it requires people.</p>
 
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="item-single mb-30">
                        <i class='bx bx-money'></i>
                        <h3><a href="#">Payment</a></h3>
                        <p>As compared with earlier times where a reservation personnel has to update its inventory every time.</p>
 
                    </div>
                </div>
            </div>
        </div>
    </section>


 
 
@endsection