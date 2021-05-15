<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="{{$html_class ?? ''}}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @php event(new \App\Events\LayoutBeginHead()); @endphp
    @php
        $favicon = setting_item('site_favicon');
    @endphp
    @if($favicon)
        @php
            $file = (new \App\Models\MediaFile())->findById($favicon);
        @endphp
        @if(!empty($file))
            <link rel="icon" type="{{$file['file_type']}}" href="{{asset('uploads/'.$file['file_path'])}}" />
        @else:
            <link rel="icon" type="image/png" href="{{url('images/favicon.png')}}" />
        @endif
    @endif

    {{--  @include('parts.seo-meta')  --}}
    <link href="{{ asset('libs/flags/css/flag-icon.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('findhouse/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('findhouse/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('findhouse/css/responsive.css')}}">
    <link rel="stylesheet" href="{{asset('dist/frontend/css/frontend.css')}}">
    <title> {{ config('app.name')}} </title>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    {!! \App\Helpers\Assets::css() !!}
    {!! \App\Helpers\Assets::js() !!}
    <script>
        var bookingCore = {
            url:'{{url( app_get_locale() )}}',
            url_root:'{{ url('') }}',
            booking_decimals:{{(int)get_current_currency('currency_no_decimal',2)}},
            thousand_separator:'{{get_current_currency('currency_thousand')}}',
            decimal_separator:'{{get_current_currency('currency_decimal')}}',
            currency_position:'{{get_current_currency('currency_format')}}',
            currency_symbol:'{{currency_symbol()}}',
			currency_rate:'{{get_current_currency('rate',1)}}',
            date_format:'{{get_moment_date_format()}}',
            map_provider:'{{setting_item('map_provider')}}',
            map_gmap_key:'{{setting_item('map_gmap_key')}}',
            routes:{
                {{-- login:'{{route('auth.login')}}',
                register:'{{route('auth.register')}}', --}}
            },
            currentUser:{{(int)Auth::id()}},
            rtl: {{ setting_item_with_lang('enable_rtl') ? "1" : "0" }}
        };
        var i18n = {
            warning:"{{__("Warning")}}",
            success:"{{__("Success")}}",
        };
        var daterangepickerLocale = {
            "applyLabel": "{{__('Apply')}}",
            "cancelLabel": "{{__('Cancel')}}",
            "fromLabel": "{{__('From')}}",
            "toLabel": "{{__('To')}}",
            "customRangeLabel": "{{__('Custom')}}",
            "weekLabel": "{{__('W')}}",
            "first_day_of_week": {{ setting_item("site_first_day_of_the_weekin_calendar","1") }},
            "daysOfWeek": [
                "{{__('Su')}}",
                "{{__('Mo')}}",
                "{{__('Tu')}}",
                "{{__('We')}}",
                "{{__('Th')}}",
                "{{__('Fr')}}",
                "{{__('Sa')}}"
            ],
            "monthNames": [
                "{{__('January')}}",
                "{{__('February')}}",
                "{{__('March')}}",
                "{{__('April')}}",
                "{{__('May')}}",
                "{{__('June')}}",
                "{{__('July')}}",
                "{{__('August')}}",
                "{{__('September')}}",
                "{{__('October')}}",
                "{{__('November')}}",
                "{{__('December')}}"
            ],
        };
    </script>
    <!-- Styles -->
    @yield('head')
    {{--Custom Style--}}
    {{-- <link href="{{ route('core.style.customCss') }}" rel="stylesheet"> --}}
    {{-- <link href="{{ asset('libs/carousel-2/owl.carousel.css') }}" rel="stylesheet"> --}}
    @if(setting_item_with_lang('enable_rtl'))
        <link href="{{ asset('dist/frontend/css/rtl.css') }}" rel="stylesheet">
    @endif

    {!! setting_item('head_scripts') !!}
    {!! setting_item_with_lang_raw('head_scripts') !!}

    @php event(new \App\Events\LayoutEndHead()); @endphp
</head>
<body class="frontend-page {{$body_class ?? ''}} @if(setting_item_with_lang('enable_rtl')) is-rtl @endif">
    @php event(new \App\Events\LayoutBeginBody()); @endphp

    {!! setting_item('body_scripts') !!}
    {!! setting_item_with_lang_raw('body_scripts') !!}
    <div class="wrapper">


        @include('parts.header')

        @yield('content')


<!-- Our Footer -->
<section class="footer_one">
    <div class="container">
        <div class="row">
            @if($list_widget_footers = setting_item_with_lang("list_widget_footer"))
                <?php $list_widget_footers = json_decode($list_widget_footers); ?>
                @foreach($list_widget_footers as $key=>$item)
                    <div class="col-sm-6 col-md-6 col-lg-3 col-xl-3">
                        <div class="footer_about_widget">
                            <h4>{{$item->title}}</h4>
                            {!! $item->content  !!}
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
</section>


<a class="scrollToHome" href="#"><i class="flaticon-arrows"></i></a>

@if(Auth::id())
    {{-- @include('Media::browser') --}}
@endif

<script type="text/javascript" src="{{asset('libs/jquery-3.5.1.min.js')}}"></script>
<script type="text/javascript" src="{{asset('libs/jquery-ui.min.js')}}"></script>
<script src="{{ asset('libs/vue/vue.js') }}"></script>
<script type="text/javascript" src="{{asset('findhouse/js/jquery-migrate-3.0.0.min.js')}}"></script>
<script type="text/javascript" src="{{asset('findhouse/js/popper.min.js')}}"></script>
<script type="text/javascript" src="{{asset('findhouse/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('findhouse/js/jquery.mmenu.all.js')}}"></script>
<script type="text/javascript" src="{{asset('findhouse/js/ace-responsive-menu.js')}}"></script>
<script type="text/javascript" src="{{asset('findhouse/js/bootstrap-select.min.js')}}"></script>
<script type="text/javascript" src="{{asset('findhouse/js/isotop.js')}}"></script>
<script type="text/javascript" src="{{asset('findhouse/js/snackbar.min.js')}}"></script>
<script type="text/javascript" src="{{asset('findhouse/js/simplebar.js')}}"></script>
<script type="text/javascript" src="{{asset('findhouse/js/parallax.js')}}"></script>
<script type="text/javascript" src="{{asset('findhouse/js/scrollto.js')}}"></script>
{{--<script type="text/javascript" src="{{asset('findhouse/js/jquery-scrolltofixed-min.js')}}"></script>--}}
<script type="text/javascript" src="{{asset('findhouse/js/jquery.counterup.js')}}"></script>
<script type="text/javascript" src="{{asset('findhouse/js/wow.min.js')}}"></script>
<script type="text/javascript" src="{{asset('findhouse/js/slider.js')}}"></script>
<script type="text/javascript" src="{{asset('findhouse/js/timepicker.js')}}"></script>
<!-- Custom script for all pages -->
<script type="text/javascript" src="{{asset('findhouse/js/script.js')}}"></script>
@if(Auth::id())
    <script src="{{ asset('module/media/js/browser.js?_ver='.config('app.version')) }}"></script>
@endif

{{-- home.js --}}
<script src="{{ asset('js/functions.js') }}"></script>
<script src="{{ asset('js/home.js') }}"></script>

@include('parts.login-register-modal')

{!! \App\Helpers\Assets::js(true) !!}

@yield('footer')

@php \App\Helpers\ReCaptchaEngine::scripts() @endphp

    </div>
    {!! setting_item('footer_scripts') !!}
    {!! setting_item_with_lang_raw('footer_scripts') !!}
    @php event(new \App\Events\LayoutEndBody()); @endphp
     <!-- Fotorama -->
</body>
</html>
