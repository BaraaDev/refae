<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>{{ config('app.name') }} | Profile</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
    <link href="{{ asset('plugins/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('plugins/datatables/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css">
    <title>Book Awsome</title>
    <link href="{{ asset('libs/select2/css/select2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('libs/flags/css/flag-icon.min.css') }}" rel="stylesheet">
    <link href="{{ asset('dist/admin/css/vendors.css') }}" rel="stylesheet">
    <link href="{{ asset('dist/admin/css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div class="wrapper dashboard-wrapper">
        <div class="d-flex flex-wrap flex-xl-nowrap">
            <div class="db-sidebar bg-white">
                <nav class="navbar navbar-expand-xl navbar-light d-block px-0 header-sticky dashboard-nav py-0">
                    <div class="sticky-area shadow-xs-1 py-3">
                        <div class="d-flex px-3 px-xl-6 w-100">
                            <a class="navbar-brand" href="{{ url('/')}}">
                                <img src="{{ asset('images/logoblack.png') }}" alt="{{ config('app.name')}}">
                            </a>
                            <div class="ml-auto d-flex align-items-center ">
                                <div class="d-flex align-items-center d-xl-none">
                                    <div class="dropdown px-3">
                                        <a href="#" class="dropdown-toggle d-flex align-items-center text-heading" data-toggle="dropdown">
                                            <div class="w-48px">
                                                <img src="images/testimonial-5.jpg" alt="" class="rounded-circle">
                                            </div>
                                            <span class="fs-13 font-weight-500 d-sm-inline ml-2">
                                                {{ Auth::user()->name }}
                                            </span>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logout-form-vendor').submit();" href="#">Logout</a>
                                        </div>
                                    </div>
                                </div>
                                <button class="navbar-toggler border-0 px-0" type="button" data-toggle="collapse" data-target="#primaryMenuSidebar" aria-controls="primaryMenuSidebar" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                            </div>
                        </div>
                        <div class="collapse navbar-collapse bg-white" id="primaryMenuSidebar">
                            <form class="d-block d-xl-none pt-5 px-3">
                                <div class="input-group">
                                    <div class="input-group-prepend mr-0 bg-input">
                                        <button class="btn border-0 shadow-none fs-20 text-muted pr-0" type="submit"><i class="far fa-search"></i></button>
                                    </div>
                                    <input type="text" class="form-control border-0 form-control-lg shadow-none" placeholder="Search for..." name="search">
                                </div>
                            </form>
                            <ul class="list-group list-group-flush w-100">



                                <li class="list-group-item pt-6 pb-4">

                                    <ul class="list-group list-group-no-border rounded-lg">
                                        <h5 class="fs-13 letter-spacing-087 text-muted mb-3 text-uppercase px-3"></h5>
                                        <li class="list-group-item px-3 px-xl-4 py-2 sidebar-item">
                                            <a href="{{ route('user.profile.index')}}" class="text-heading lh-1 sidebar-link">
                                                <span class="sidebar-item-icon d-inline-block mr-3 text-muted fs-20">
                                                    <i class="fa fa-user-o"></i>
                                                </span>
                                                <span class="sidebar-item-text"> {{ __("My Profile") }}</span>
                                            </a>
                                        </li>

                                        <h5 class="fs-13 letter-spacing-087 text-muted mb-3 text-uppercase px-3"></h5>


                                        <li class="list-group-item px-3 px-xl-4 py-2 sidebar-item">
                                            <a href="{{ route('user.orders') }}" class="text-heading lh-1 sidebar-link d-flex align-items-center">
                                                <span class="sidebar-item-icon d-inline-block mr-3 text-muted fs-20">
                                                    <i class="fa fa-heart-o"></i>
                                                </span>
                                                <span class="sidebar-item-text">  {{ __("My Orders") }} </span>
                                            </a>
                                        </li>


                                        <li class="list-group-item px-3 px-xl-4 py-2 sidebar-item">
                                            <a onclick="event.preventDefault(); document.getElementById('logout-form-vendor').submit();" href="#" class="text-heading lh-1 sidebar-link">
                                                <span class="sidebar-item-icon d-inline-block mr-3 text-muted fs-20">
                                                    <i class="fa fa-sign-out"></i>
                                                </span>
                                                <span class="sidebar-item-text">{{__("Log Out")}}</span>
                                            </a>

                                            </a>
                                        </li>

                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
            <div class="page-content" style="width: 100%;">

                <header class="main-header shadow-none shadow-lg-xs-1 bg-white position-relative d-none d-xl-block">
                    <div class="container-fluid">
                        <nav class="navbar navbar-light py-0 row no-gutters px-3 px-lg-0">
                            <div class="col-md-4 px-0 px-md-6 order-1 order-md-0">
                                <form>
                                    <div class="input-group">
                                        <div class="input-group-prepend mr-0">
                                            <a class="btn border-0 shadow-none fs-20p-0" href="{{ url('/') }}"><i class="far fa-globe"></i> Website </a>
                                        </div>
                                     </div>
                                </form>
                            </div>
                            <div class="col-md-6 d-flex flex-wrap justify-content-md-end order-0 order-md-1">
                                <div class="dropdown border-md-right border-0 py-3 text-right">
                                    <a href="#" class="dropdown-toggle text-heading pr-3 pr-sm-6 d-flex align-items-center justify-content-end" data-toggle="dropdown">
                                        <div class="mr-4 w-48px">
                                            <img  style="max-width: 50px;width: 35px;height: 35px;" src="{{ asset('images/' . Auth::user()->avatar)}}" alt="{{ Auth::user()->name }}" class="rounded-circle">
                                        </div>
                                        <div class="fs-13 font-weight-500 lh-1">
                                           {{ Auth::user()->name }}
                                        </div>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right w-100">
                                        <a class="dropdown-item" href="{{ route('user.profile.index')}}">My Profile</a>

                                        <form id="logout-form-vendor" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                        <a class="dropdown-item" href="#" onclick="event.preventDefault(); document.getElementById('logout-form-vendor').submit();">
                                            <i class="fa fa-sign-out"></i> {{__("Log Out")}}
                                        </a>


                                    </div>
                                </div>


                            </div>
                        </nav>
                    </div>
                </header>

          @yield('content')

        </div>
    </div>

    <script src="{{ asset('dist/admin/js/manifest.js?_ver='.config('app.version')) }}" ></script>
    <script src="{{ asset('dist/admin/js/vendor.js?_ver='.config('app.version')) }}" ></script>

    <script src="{{ asset('dist/admin/js/app.js?_ver='.config('app.version')) }}" ></script>

    <script src="{{ asset('libs/select2/js/select2.min.js') }}" ></script>
    <script src="{{ asset('libs/bootbox/bootbox.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables/jszip.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables/pdfmake.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables/vfs_fonts.js') }}"></script>
    <script src="{{ asset('plugins/datatables/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables/buttons.print.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables/buttons.colVis.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables/datatables.init.js') }}"></script>
</body>


</html>
