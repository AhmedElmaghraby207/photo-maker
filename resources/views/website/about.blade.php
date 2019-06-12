@extends('website.layouts.site')

@section('title')
    @lang('alert.tit-about')
@stop

<!--===============================
    CONTENT
===================================-->

@section('content')
    <div class="fixed-bg">
        <img src="{{asset('public/website/images/1.jpg')}}">
    </div>

    <div class="main-content">
        <div class="container">
            <h1 class="main-heading">@lang('alert.about-title')</h1>

            <div class="text-center div-padding">
                @if($about)
                    @foreach($about as $about_details)
                        @if(\App::isLocale('ar'))
                            <p>{!! $about_details->details_ar !!}</p>
                        @else
                            <p>{!! $about_details->details_en !!}</p>
                        @endif
                    @endforeach
                @endif

                <a href="http://training.aljazeera.net/mritems/Documents/2016/2/16/e782075b14c84729a88e703e0776f66a_100.pdf" target="_blank" class="btn btn-white margin"><span>@lang('alert.download-profile')</span></a>
                <a href="{{route('photo-maker-gallery.index')}}" class="btn btn-white margin"><span>@lang('alert.show-gallery')</span></a>
            </div>


            <div class="div-small-padding">
                <h1 class="main-heading">@lang('alert.customers')</h1>

                <div class="row">
                    <div class="col-xs-2 col-sm-1 no-padding text-center">
                        <a class="owl-btn prev-pro margin"><span class="fa fa-angle-right"></span></a>
                    </div>

                    @if($customers)
                    <div class="col-xs-8 col-sm-10 no-padding">
                        <div id="owl-demo-products" class="owl-carousel-clients">
                            @foreach($customers as $customer)
                            <div class="item">
                                <a class="fancybox-buttons" data-fancybox-group="button" href="{{asset($customer->logo)}}">
                                    <img src="{{asset($customer->logo)}}" alt="img">
                                    <a href="{{$customer->url}}"></a>
                                </a>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    @endif

                    <div class="col-xs-2 col-sm-1 no-padding text-center">
                        <a class="owl-btn next-pro margin"><span class="fa fa-angle-left"></span></a>
                    </div>
                </div>
            </div>

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

                afterLoad : function() {
                    this.title = 'Image ' + (this.index + 1) + ' of ' + this.group.length + (this.title ? ' - ' + this.title : '');
                }
            });
        });
    </script>
@stop
