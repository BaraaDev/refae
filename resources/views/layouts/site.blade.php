<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="{{$html_class ?? ''}}">


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="generator" content="">
    <title>{{ config('app.name')}}</title>

    <script src="../cdn-cgi/apps/head/2oc_RD5SS6wgN5SiQnSEnWVNHg8.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&amp;family=Poppins:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&amp;display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('website/vendors/fontawesome-pro-5/css/all.css')}}">
    <link rel="stylesheet" href="{{ asset('website/vendors/bootstrap-select/css/bootstrap-select.min.css')}}">
    <link rel="stylesheet" href="{{ asset('website/vendors/slick/slick.min.css')}}">
    <link rel="stylesheet" href="{{ asset('website/vendors/magnific-popup/magnific-popup.min.css')}}">
    <link rel="stylesheet" href="{{ asset('website/vendors/jquery-ui/jquery-ui.min.css')}}">
    <link rel="stylesheet" href="{{ asset('website/vendors/chartjs/Chart.min.css')}}">
    <link rel="stylesheet" href="{{ asset('website/vendors/dropzone/css/dropzone.min.css')}}">
    <link rel="stylesheet" href="{{ asset('website/vendors/animate.css')}}">
    <link rel="stylesheet" href="{{ asset('website/vendors/timepicker/bootstrap-timepicker.min.css')}}">
    <link rel="stylesheet" href="{{ asset('website/vendors/mapbox-gl/mapbox-gl.min.css')}}">
    <link rel="stylesheet" href="{{ asset('website/css/themes.css')}}">
    <link rel="icon" href="{{ asset('images/logo.png')}}">
</head>

<body>

    <header class="main-header position-absolute fixed-top m-0 navbar-dark header-sticky header-sticky-smart header-mobile-xl">

        <div class="sticky-area">

            <div class="container container-xxl">

                <div class="d-flex align-items-center">

                    <nav class="navbar navbar-expand-xl bg-transparent px-0 w-100 w-xl-auto">
                        <a class="navbar-brand mr-7" href="">
                            <img src="{{ asset('images/mainlogo.png')}}" alt="" class="normal-logo" style="max-width: 155px;">
                            <img src="{{ asset('images/logoblack.png')}}" alt="" class="sticky-logo" style="max-width: 155px;">
                        </a>
                        <a class="d-block d-xl-none ml-auto mr-4 position-relative text-white p-2" href="#">
                            <i class="fal fa-heart fs-large-4"></i>
                            <span class="badge badge-primary badge-circle badge-absolute">1</span>
                        </a>
                        <button class="navbar-toggler border-0 px-0" type="button" data-toggle="collapse" data-target="#primaryMenu02" aria-controls="primaryMenu02" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="text-white fs-24"><i class="fal fa-bars"></i></span>
                        </button>
                        <div class="collapse navbar-collapse mt-3 mt-xl-0" id="primaryMenu02">
                            <ul class="navbar-nav hover-menu main-menu px-0 mx-xl-n4">

                                <li id="navbar-item-home" class="nav-item py-2 py-xl-5 px-0 px-xl-4">
                                    <a class="nav-link p-0" href="/"> {{ __('Home')}} </a>
                                </li>

                                <li id="navbar-item-home" class="nav-item py-2 py-xl-5 px-0 px-xl-4">
                                    <a class="nav-link p-0" href="{{ url('property?property_type=1') }}"> {{ __('Buy')}} </a>
                                </li>

                                <li id="navbar-item-home" class="nav-item py-2 py-xl-5 px-0 px-xl-4">
                                    <a class="nav-link p-0" href="{{ url('property?property_type=2') }}"> {{ __('Rent')}} </a>
                                </li>

                                <li id="navbar-item-home" class="nav-item py-2 py-xl-5 px-0 px-xl-4">
                                    <a class="nav-link p-0" href="{{ route('locations')}}"> {{ __('Locations')}} </a>
                                </li>

                                <li id="navbar-item-home" class="nav-item py-2 py-xl-5 px-0 px-xl-4">
                                    <a class="nav-link p-0" href="{{ route('agencies')}}"> {{ __('Agencies')}} </a>
                                </li>

                                <li id="navbar-item-home" class="nav-item py-2 py-xl-5 px-0 px-xl-4">
                                    <a class="nav-link p-0" href="{{ url('lawyers')}}"> {{ __('Laywers')}} </a>
                                </li>

                                <li id="navbar-item-home" class="nav-item py-2 py-xl-5 px-0 px-xl-4">
                                    <a class="nav-link p-0" href="{{ route('finish')}}"> {{ __('Finish')}} </a>
                                </li>

                                <li id="navbar-item-home" class="nav-item py-2 py-xl-5 px-0 px-xl-4">
                                    <a class="nav-link p-0" href="{{ route('agent.search')}}"> {{ __('Agents')}} </a>
                                </li>

                                <li id="navbar-item-home" class="nav-item py-2 py-xl-5 px-0 px-xl-4">
                                    <a class="nav-link p-0" href="{{ route('news.index')}}"> {{ __('Blogs')}} </a>
                                </li>

                                <li id="navbar-item-home" class="nav-item py-2 py-xl-5 px-0 px-xl-4">
                                    <a class="nav-link p-0" href="{{ route('vendor.dashboard')}}"> {{ __('Contact')}} </a>
                                </li>



                            </ul>
                            <div class="d-block d-xl-none">
                                <ul class="navbar-nav flex-row ml-auto align-items-center justify-content-lg-end flex-wrap py-2">
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle mr-md-2 pr-2 pl-0 pl-lg-2" href="#" id="bd-versions-mobile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            ENG
                                        </a>
                                        <div class="dropdown-menu dropdown-sm dropdown-menu-left" aria-labelledby="bd-versions-mobile">
                                            <a class="dropdown-item" href="#">VN</a>
                                            <a class="dropdown-item active" href="#">ENG</a>
                                            <a class="dropdown-item" href="#">ARB</a>
                                            <a class="dropdown-item" href="#">KR</a>
                                            @php
                                            $languages = \App\Models\Language::getActive();
                                            $locale = App::getLocale();
                                            @endphp
                                            @foreach($languages as $language)
                                            @if($locale == $language->locale)
                                            <a class="dropdown-item" href="#">
                                                    @if($language->flag)
                                                        <span class="flag-icon flag-icon-{{$language->flag}}"></span>
                                                    @endif
                                                    {{$language->name}}
                                                </a>
                                            @endif
                                        @endforeach

                                        </div>
                                    </li>
                                    <li class="divider"></li>
                                    @if(Auth::check())
                                    <li class="list-group-item px-3 px-xl-4 py-2 sidebar-item">

                                        <a href="{{ route(getDashboard())}}" class="text-heading lh-1 sidebar-link">
                                            <span class="sidebar-item-icon d-inline-block mr-3 text-muted fs-20">
                                                <i class="fa fa-gears"></i>
                                            </span>
                                            <span class="sidebar-item-text"> {{ __("Dashboard") }}</span>
                                        </a>
                                    </li>

                                    @else
                                    <li class="nav-item ">
                                        <a class="nav-link pl-3 pr-2" href="{{ route('login')}}">{{ __("Login | Register")}}</a>
                                    </li>

                                    @endif

                                </ul>
                            </div>
                        </div>
                    </nav>
                    <div class="ml-auto d-none d-xl-block">
                        <ul class="navbar-nav flex-row ml-auto align-items-center justify-content-lg-end flex-wrap py-2">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle mr-md-2 pr-2 pl-0 pl-lg-2" href="#" id="bd-versions" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    @foreach($languages as $language)
                                    @if($locale == $language->locale)
                                            {{$language->name}}
                                     @endif
                                    @endforeach
                                </a>
                                <div class="dropdown-menu dropdown-sm dropdown-menu-right" aria-labelledby="bd-versions">

     @php  $languages = \App\Models\Language::getActive();
        $locale = session('website_locale',app()->getLocale());
                                @endphp
                                {{--Multi Language--}}

{{   $locale }}
                                    <li class="dropdown">
                                        @foreach($languages as $language)
                                            @if($locale == $language->locale)
                                                <a href="#" data-toggle="dropdown" class="is_login">
                                                    @if($language->flag)
                                                        <span class="flag-icon flag-icon-{{$language->flag}}"></span>
                                                    @endif
                                                    {{$language->name}}
                                                </a>
                                            @endif
                                        @endforeach
                                        <ul class="{{!empty($mobile)?"":"dropdown-menu"}} text-left">
                                            @foreach($languages as $language)
                                                @if($locale != $language->locale)
                                                    <li>
                                                        <a href="{{ route('set-lang', $language->locale)}}" class="is_login">
                                                            @if($language->flag)
                                                                <span class="flag-icon flag-icon-{{$language->flag}}"></span>
                                                            @endif
                                                            {{$language->name}}
                                                        </a>
                                                    </li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </li>

                                {{--End Multi language--}}

                                </div>
                            </li>
                            <li class="divider"></li>
                            @if(Auth::check())
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle mr-md-2 pr-2 pl-0 pl-lg-2" href="#" id="bd-versions" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    {{ Auth::user()->name }}
                                </a>
                                <div class="dropdown-menu dropdown-sm dropdown-menu-right" aria-labelledby="bd-versions">

                                    <a class="dropdown-item" href="{{ route(getDashboard())}}">
                                        <span class="sidebar-item-icon d-inline-block mr-3 text-muted fs-20">
                                            <i class="fa fa-gears"></i>
                                        </span>
                                        <span class="sidebar-item-text"> {{ __("Dashboard") }}</span>
                                    </a>


                                    <form id="logout-form-vendor" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                    <a class="dropdown-item" href="#" onclick="event.preventDefault(); document.getElementById('logout-form-vendor').submit();">
                                        <i class="fa fa-sign-out"></i> {{__("Log Out")}}
                                    </a>

                                </div>


                            @else
                            <li class="nav-item ">
                                <a class="nav-link pl-3 pr-2" href="{{ route('login')}}">{{ __("Login | Register")}}</a>
                            </li>

                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>

    @yield('content')

    <footer class="bg-dark pt-8 pb-6 footer text-muted">
        <div class="container container-xxl">
            <div class="row">
                <div class="col-md-4  mb-md-0">
                    <a class="d-block mb-2" href="#">
                        <img src="{{ asset('images/mainlogo.png')}}" alt="" style="max-width: 236px;">
                    </a>
                    <div class="lh-26 font-weight-500">
                        <p class="mb-0">6 October -  Giz Governate - Egypt</p>
                        <a class="d-block text-muted hover-white" href="mailto:info@shaqa.com">info@shaqa.com</a>
                        <a class="d-block text-lighter font-weight-bold fs-15 hover-white" href="tel:01013033465">01013033465</a>
                        <a class="d-block text-muted hover-white" href="">www.shaqa.com</a>
                    </div>
                </div>

                <div class="col-md-4  mb-md-0">
                    <h4 class="text-white fs-16 my-4 font-weight-500">Quick links</h4>
                    <ul class="list-group list-group-flush list-group-no-border">
                        <li class="list-group-item bg-transparent p-0">
                            <a href="#" class="text-muted lh-26 font-weight-500 hover-white">Terms of Use</a>
                        </li>
                        <li class="list-group-item bg-transparent p-0">
                            <a href="#" class="text-muted lh-26 font-weight-500 hover-white">Privacy Policy</a>
                        </li>
                        <li class="list-group-item bg-transparent p-0">
                            <a href="#" class="text-muted lh-26 font-weight-500 hover-white">Contact Us</a>
                        </li>
                    </ul>
                </div>



                <div class="col-md-6 col-lg-4 mb-6 mb-md-0">
                    <h4 class="text-white fs-16 my-4 font-weight-500">Sign Up for Our Newsletter</h4>
                    <p class="font-weight-500 text-muted lh-184">Lorem ipsum dolor sit amet, consecte tur cing elit.
                        Suspe ndisse suscipit sagittis </p>
                    <form>
                        <div class="input-group input-group-lg mb-6">
                            <input type="email" name="email" class="form-control bg-white shadow-none border-0 z-index-1" placeholder="Your email">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="submit">Subscribe</button>
                            </div>
                        </div>
                    </form>
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item mr-0">
                            <a href="#" class="text-white opacity-3 fs-25 px-4 opacity-hover-10"><i class="fab fa-twitter"></i></a>
                        </li>
                        <li class="list-inline-item mr-0">
                            <a href="#" class="text-white opacity-3 fs-25 px-4 opacity-hover-10"><i class="fab fa-facebook-f"></i></a>
                        </li>
                        <li class="list-inline-item mr-0">
                            <a href="#" class="text-white opacity-3 fs-25 px-4 opacity-hover-10"><i class="fab fa-skype"></i></a>
                        </li>
                        <li class="list-inline-item mr-0">
                            <a href="#" class="text-white opacity-3 fs-25 px-4 opacity-hover-10"><i class="fab fa-linkedin-in"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="mt-0 mt-md-10 row">
                <ul class="list-inline mb-0 col-md-6 mr-auto">
                    <li class="list-inline-item mr-6">
                        <a href="#" class="text-muted lh-26 font-weight-500 hover-white">Terms of Use</a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#" class="text-muted lh-26 font-weight-500 hover-white">Privacy Policy</a>
                    </li>
                </ul>
                <p class="col-md-auto mb-0 text-muted">
                    © {{ date('Y')}} {{ config('app.name')}}. All Rights Reserved
                </p>
            </div>
        </div>
    </footer>

    <script src="{{ asset('website/vendors/jquery.min.js')}}"></script>
    <script src="{{ asset('website/vendors/jquery-ui/jquery-ui.min.js')}}"></script>
    <script src="{{ asset('website/vendors/bootstrap/bootstrap.bundle.js')}}"></script>
    <script src="{{ asset('website/vendors/bootstrap-select/js/bootstrap-select.min.js')}}"></script>
    <script src="{{ asset('website/vendors/slick/slick.min.js')}}"></script>
    <script src="{{ asset('website/vendors/waypoints/jquery.waypoints.min.js')}}"></script>
    <script src="{{ asset('website/vendors/counter/countUp.js')}}"></script>
    <script src="{{ asset('website/vendors/magnific-popup/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{ asset('website/vendors/chartjs/Chart.min.js')}}"></script>
    <script src="{{ asset('website/vendors/dropzone/js/dropzone.min.js')}}"></script>
    <script src="{{ asset('website/vendors/timepicker/bootstrap-timepicker.min.js')}}"></script>
    <script src="{{ asset('website/vendors/hc-sticky/hc-sticky.min.js')}}"></script>
    <script src="{{ asset('website/vendors/jparallax/TweenMax.min.js')}}"></script>
    <script src="{{ asset('website/vendors/mapbox-gl/mapbox-gl.js')}}"></script>

    <script src="{{ asset('website/js/theme.js')}}"></script>




    <div class="position-fixed pos-fixed-bottom-right p-6 z-index-10">
        <a href="#" class="gtf-back-to-top bg-white text-primary hover-white bg-hover-primary shadow p-0 w-52px h-52 rounded-circle fs-20 d-flex align-items-center justify-content-center" title="Back To Top"><i class="fal fa-arrow-up"></i></a>
    </div>
</body>

</html>
