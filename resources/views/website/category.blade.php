@extends('website.layouts.site')

@if(\App::isLocale('ar'))
    <title>Photo Maker | {{$category->name_ar}}</title>
@else
    <title>Photo Maker | {{$category->name_en}}</title>
@endif

@section('content')
    <div class="fixed-bg">
        <img src="{{asset('public/website/images/1.jpg')}}">
    </div>


    <div class="main-content">
        <div class="container-fluid">
            @if(\App::isLocale('ar'))
                <h1 class="main-heading">{{$category->name_ar}}</h1>
            @else
                <h1 class="main-heading">{{$category->name_en}}</h1>
            @endif

            @if(count($category->photos) > 0)
            <div class="row">
                @foreach($category->photos as $photo)
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                    <a class="fancybox-buttons img-holder small-img" rel="gallery" title="" data-fancybox-group="button" href="{{asset($photo->url)}}">
                        <img src="{{asset($photo->url)}}" alt="img">
                    </a>
                </div>

                @endforeach
            </div>
            @else
                <p class="text-center">@lang('alert.c-message')</p>
            @endif

        </div>
    </div>

@stop


<!--===============================
    SCRIPT
===================================-->

@section('scripts')
    <script>
        $(document).ready(function (){
            /*Button helper. Disable animations, hide close button, change title type and content*/

            $('.fancybox-buttons').fancybox({
                openEffect  : 'none',
                closeEffect : 'none',

                prevEffect : 'none',
                nextEffect : 'none',

                closeBtn  : false,

                helpers : {
                    title : {
                        type : 'inside'
                    },
                    buttons	: {}
                },

                // afterLoad : function() {
                //     this.title = '<a href="#" class="btn btn-fb btn-small"><i class="fa fa-facebook right-fa"></i> Share</a>' +
                //         '<a href="#" class="btn btn-tw btn-small"><i class="fa fa-twitter right-fa"></i> Share</a>' +
                //         '<a href="#" class="btn btn-inst btn-small"><i class="fa fa-instagram right-fa"></i> Share</a>';
                // }
            });
        });
    </script>

@stop