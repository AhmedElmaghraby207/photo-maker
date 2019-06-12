<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="HandheldFriendly" content="true">
    <title>Photo Maker | @yield('title')</title>
    @if(App\Setting::first())
    <link rel="icon" type="image/png" href="{{asset(\App\Setting::first()->icon)}}">
    @endif
    <link rel="stylesheet" type="text/css" href="{{asset('public/website/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/website/css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/website/owl-carousel/owl.carousel.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/website/image-popup/source/jquery.fancybox.css?v=2.1.5')}}" media="screen">
    <link rel="stylesheet" type="text/css" href="{{asset('public/website/image-popup/source/helpers/jquery.fancybox-buttons.css?v=1.0.5')}}/">
    <link rel="stylesheet" type="text/css" href="{{asset('public/website/css/style.css')}}">
    @if(\App::isLocale('ar'))
    <link rel="stylesheet" type="text/css" href="{{asset('public/website/css/style-ar.css')}}">
    @else
    <link rel="stylesheet" type="text/css" href="{{asset('public/website/css/style-en.css')}}">
    @endif
    <link rel="stylesheet" type="text/css" href="{{ asset('public/website/css/toastr.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/website/css/jssocials.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('public/website/css/jssocials-theme-flat.css')}}" />

    @yield('styles')

</head>

<body>

    <!--===============================
    NAV
===================================-->

    <nav class="navbar navbar-fixed-top">
        <div class="container">
            <div class="row">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
                        <span class="fa fa-bars"></span>
                    </button>

                    <a href="{{route('photo-maker-home.index')}}" class="navbar-brand hidden-sm hidden-md hidden-lg">
                        @if(App\Setting::first())
                        <img src="{{asset(\App\Setting::first()->logo)}}" alt="LOGO">
                        @endif
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right text-align-left">
                        <li><a href="{{route('photo-maker-home.index')}}">@lang('alert.home')</a></li>
                        <li class="active"><a href="{{route('photo-maker-about.index')}}">@lang('alert.about')</a></li>
                        <li><a href="{{route('photo-maker-services.index')}}">@lang('alert.services')</a></li>
                    </ul>

                    <a href="{{route('photo-maker-home.index')}}" class="navbar-brand hidden-xs text-center">
                        @if(App\Setting::first())
                        <img src="{{asset(\App\Setting::first()->logo)}}" alt="LOGO">
                        @endif
                    </a>

                    <ul class="nav navbar-nav navbar-left text-align-right">
                        <li><a href="{{route('photo-maker-gallery.index')}}">@lang('alert.gallery')</a></li>
                        <li><a href="{{route('photo-maker-contact.index')}}">@lang('alert.contact')</a></li>
                        @if(\App::isLocale('ar'))
                        <li><a href="{{route('CHANGE_LANGUAGE','en')}}">English</a></li>
                        @else
                        <li><a href="{{route('CHANGE_LANGUAGE','ar')}}">العربية</a></li>
                        @endif

                    </ul>
                </div>
            </div>
        </div>
    </nav>


    <!--===============================
    CONTENT
===================================-->

    @yield('content')




    <!--===============================
    FOOTER
===================================-->

    <footer class="text-center">
        <div class="container">

            @if(App\Footer::first())
            @if(\App::isLocale('ar'))
            <p>{{App\Footer::first()->rights_ar}}&copy; 2015-{{date('Y')}} </p>
            @else
            <p>{{App\Footer::first()->rights_en}}&copy; 2015-{{date('Y')}} </p>
            @endif
            @endif

            @if(App\Footer::first())
            <a href="{{App\Footer::first()->facebook}}" target="_blank"><i class="fa fa-facebook"></i></a>
            <a href="{{App\Footer::first()->twitter}}" target="_blank"><i class="fa fa-twitter"></i></a>
            <a href="{{App\Footer::first()->google_plus}}" target="_blank"><i class="fa fa-google-plus"></i></a>
            <a href="{{App\Footer::first()->instagram}}" target="_blank"><i class="fa fa-instagram"></i></a>
            <a href="{{App\Footer::first()->youtube}}" target="_blank"><i class="fa fa-youtube"></i></a>
            <a href="{{App\Footer::first()->pinterest}}" target="_blank"><i class="fa fa-pinterest"></i></a>
            {{-- <a href="{{App\Footer::first()->google_drive}}"><i class="fa fa-google-drive"></i></a>--}}
            <a href="{{App\Footer::first()->linkedin}}" target="_blank"><i class="fa fa-linkedin"></i></a>
            {{-- <a href="{{App\Footer::first()->google_play}}"><i class="fab fa-google-play"></i></a>--}}
            {{-- <a href="{{App\Footer::first()->app_store}}"><i class="fab fa-app-store-ios"></i></a>--}}
            <a href="{{App\Footer::first()->behance}}" target="_blank"><i class="fa fa-behance"></i></a>
            <a href="{{App\Footer::first()->vimeo}}" target="_blank"><i class="fa fa-vimeo"></i></a>
            @endif
        </div>
    </footer>


    <!--===============================
    SCRIPT
===================================-->

    <script src="{{asset('public/website/js/jquery-1.11.1.min.js')}}"></script>
    <script src="{{asset('public/website/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('public/website/owl-carousel/owl.carousel.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('public/website/image-popup/source/jquery.fancybox.js?v=2.1.5')}}"></script>
    <script type="text/javascript" src="{{asset('public/website/image-popup/source/helpers/jquery.fancybox-buttons.js?v=1.0.5')}}"></script>
    <script src="{{asset('public/website/js/script.js')}}"></script>
    <script src="{{asset('public/website/js/jssocials.min.js')}}"></script>
    <script src="{{ asset('public/website/js/toastr.min.js') }}"></script>
    <script>
        @if(Session::has('success'))
        toastr.success("{{Session::get('success')}}")
        @endif

        @if(Session::has('info'))
        toastr.info("{{Session::get('info')}}")
        @endif

        @if(Session::has('warning'))
        toastr.warning("{{Session::get('warning')}}")
        @endif

        @if(Session::has('error'))
        toastr.error("{{Session::get('error')}}")
        @endif
    </script>

    @yield('scripts')

</body>

</html>