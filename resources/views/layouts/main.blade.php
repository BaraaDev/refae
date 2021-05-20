<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>{{ config('app.name')}}</title>

    <link rel="stylesheet" href="{{ asset('website/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('website/css/fontawesome.css') }}" />
    <link rel="stylesheet" href="{{ asset('website/css/boxicons.min.c') }}ss">
    <link rel="stylesheet" href="{{ asset('website/css/animate.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('website/css/bootstrap-datepicker.min.c') }}ss">
    <link rel="stylesheet" href="{{ asset('website/css/nice-select.c') }}ss">
    <link rel="stylesheet" href="{{ asset('website/css/magnific-popup.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('website/css/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('website/css/meanmenu.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('website/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('website/css/responsive.css') }}" />
    <link rel="icon" href="{{ asset('images/favicon.png') }}" type="image/png" />
</head>

<body>

    {{-- <div id="loading">
        <div class="loader"></div>
    </div> --}}


    <header class="header-area">

        <div class="top-header-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-6 col-lg-7">
                        <div class="contact-info">
                            <div class="content">
                                <i class='bx bx-phone'></i>
                                <a href="tel:+0123456987">+0123 456 987</a>
                            </div>
                            <div class="content">
                                <i class='bx bx-envelope'></i>
                                <a href=" "><span class="__cf_email__" data-cfemail="5038353c3c3f103a31253e247e333f3d">[email&#160;protected]</span></a>
                            </div>
                            <div class="content">
                                <i class='bx bx-map'></i>
                                <a href="#">Mon-Fri: 8 AM – 7 PM</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-5">
                        <div class="side-option">


            @if(Auth::check())

            @if (Auth::user()->rolez_id == 1)

             <a href="{{ route('dashboard.home') }}" style="color: #fff;border: 1px solid #fff;padding: 8px 18px;margin: 6px 9px;" href="btn-secondary"> Dashboard  </a>
             <a href="{{ route('user.profile.index') }}" style="color: #fff;border: 1px solid #fff;padding: 8px 18px;margin: 6px 9px;" href="btn-secondary"> My Profile </a>
            @else

             <a href="{{ route('user.profile.index') }}" style="color: #fff;border: 1px solid #fff;padding: 8px 18px;margin: 6px 9px;" href="btn-secondary"> My Profile </a>
            @endif

            <form id="logout-form-vendor" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>

            <a style="color: #fff;border: 1px solid #red;padding: 8px 18px;margin: 6px 0px; background: red;"
            onclick="event.preventDefault(); document.getElementById('logout-form-vendor').submit();">
                <i class="fa fa-sign-out"></i> {{__("Log Out")}}
            </a>



@else
                <div class="item">
                    <a href="{{ route('register')}}" class="btn-secondary">   Register <i class='bx bx-user'></i>  </a>
                </div>

                <div class="item">
                    <a href="{{ route('login') }}" class="btn-secondary">  Login <i class='bx bx-log-in-circle'></i>  </a>
                </div>

@endif

                            <div class="item">
                                <a href="#searchBox" id="searchButton" class="btn-search" data-effect="mfp-zoom-in">
                                    <i class='bx bx-search-alt'></i>
                                </a>
                                <div id="searchBox" class="search-box mfp-with-anim mfp-hide">
                                    <form class="search-form">
                                        <input class="search-input" name="search" placeholder="Search" type="text">
                                        <button class="btn-search">
                                            <i class='bx bx-search-alt'></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="main-navbar-area">
            <div class="main-responsive-nav">
                <div class="container">
                    <div class="main-responsive-menu">
                        <div class="logo">
                            <a href="{{ url('/') }}">
                                <img src="{{ asset('images/logo-header.png') }}" alt="logo">
                            </a>
                        </div>
                        <div class="cart responsive">
                            <a href=" " class="cart-btn"><i class='bx bx-cart'></i>
                                <span class="badge cart-total">{{\Cart::getTotalQuantity()}}</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main-nav">
                <div class="container">
                    <nav class="navbar navbar-expand-md navbar-light">
                        <a class="navbar-brand" href="{{ url('/')}}">
                            <img src="{{ asset('images/logo-header.png') }}" alt="Logo">
                        </a>
                        <div class="collapse navbar-collapse mean-menu">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item">
                                    <a href="{{ url('/')}}" class="nav-link active toggle">Home</a>

                                </li>


                                <li class="nav-item">
                                    <a href="{{ route('about') }}" class="nav-link">About</a>
                                </li>

                                <li class="nav-item">
                                    <a href="#" class="nav-link toggle">Booking<i class='bx bxs-chevron-down'></i></a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="{{ route('hotels') }}" class="nav-link">Hotel</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ route('tours') }}" class="nav-link">Tours</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ route('matches') }}" class="nav-link">Matches</a>
                                        </li>
                                    </ul>
                                </li>


                                <li class="nav-item">
                                    <a href="{{ route('news') }}" class="nav-link">News</a>
                                </li>

                                <li class="nav-item">
                                    <a href="{{ route('contact') }}" class="nav-link">Contact</a>
                                </li>
                            </ul>
                            <div class="cart">
                                <a href="{{ route('cart') }}" class="cart-btn"><i class='bx bx-cart'></i>
                                    <span class="badge cart-total">{{\Cart::getTotalQuantity()}}</span>
                                </a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>

    </header>


@yield('content')

    <footer class="footer-area">
        <div class="container">
            <div class="footer-top pt-100 pb-70">
                <div class="row">
                    <div class="col-md-4">
                        <div class="footer-widget">
                            <div class="navbar-brand">
                                <a href="{{ url('/') }}">
                                    <img src="{{ asset('images/logo-header.png') }}" alt="Logo" />
                                </a>
                            </div>
                            <p>You can dream, create, design, and build the most wonderful place.</p>
                            <div class="contact-info">
                                <div class="content">
                                    <a href="tel:+0123456987"><i class='bx bx-phone'></i>+0123 456 987</a>
                                </div>
                                <div class="content">
                                    <a href="https://templates.hibootstrap.com/cdn-cgi/l/email-protection#d8b0bdb4b4b798b2b9adb6acf6bbb7b5"><i class='bx bx-envelope'></i><span class="__cf_email__" data-cfemail="95fdf0f9f9fad5fff4e0fbe1bbf6faf8">[email&#160;protected]</span></a>
                                </div>
                                <div class="content">
                                    <a href="#"><i class='bx bx-map'></i>Mon-Fri: 8 AM – 7 PM</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="footer-widget">
                            <h5>Latest News</h5>
                            <ul class="footer-news">
                                @foreach ($blogz as $blog)
                                <li class="content">
                                    <a href="{{ route('blog', $blog->slug)}}">{{ $blog->title}}</a>
                                    <span>{{ $blog->created_at->diffForHumans() }}</span>
                                    <hr>
                                </li>
                                @endforeach


                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="footer-widget">
                            <h5>Quick Links</h5>
                            <ul class="footer-links">
                                <li>
                                    <a href="{{ url('/')}}">Home</a>
                                </li>
                                <li>
                                    <a href="{{ route('about')}}">About Us</a>
                                </li>
                                <li>
                                    <a href="{{ route('news')}}">Latest Blog</a>
                                </li>

                                <li>
                                    <a href="{{ route('contact')}}">Contact Us</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
            <hr>
            <div class="copy-right-area">
                <div class="container">
                    <div class="copy-right-content">
                        <p>
                            Copyright @ {{ date('Y') }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <script src="{{ asset('website/js/jquery.min.js') }}"></script>
    <script src="{{ asset('website/js/popper.min.js') }}"></script>
    <script src="{{ asset('website/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('website/js/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('website/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('website/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('website/js/jquery.filterizr.min.js') }}"></script>
    <script src="{{ asset('website/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('website/js/meanmenu.min.js') }}"></script>
    <script src="{{ asset('website/js/form-validator.min.js') }}"></script>
    <script src="{{ asset('website/js/contact-form-script.js') }}"></script>
    <script src="{{ asset('website/js/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('website/js/script.js') }}"></script>
    <script>
        $("#add-to-cart").on('click', function () {

           var $type  = $("#type").val(),
               $id    = $("#prop").val();



             $.ajax({

                type: 'POST',
                url: '{{ route("addtocart") }}',

                data: {
                    "_token": "{{ csrf_token() }}",
                    "id": $id,
                    'type': $type,
                },

                success: function(data) {

                    console.log(data);

                    if(data == 'not'){

                        alert('Something went wrong');

                    }else{

                        $('.cart-total').html(data);
                    }






                },
                error : function(err) {

                    console.log(err.responseText);
                },
            });


        });
    </script>
</body>

</html>
