@extends('website.layouts.site')

@section('title')
    @lang('alert.tit-home')
@stop

@section('content')
    <!--===============================
    SLIDER
    ===================================-->

    <div id="owl-demo" class="owl-carousel owl-theme">

        @if(count($photos) > 0)
            @foreach($photos as $photo)
                <div class="item"><img src="{{asset($photo->photo)}}" alt="..."></div>
            @endforeach
        @else
            <div class="item"><img src="{{asset('public/website/images/1.jpg')}}" alt="..."></div>
        @endif

    </div>

    <div class="hidden">
        <a class="btn owl-btn next"><span class="fa fa-angle-right"></span></a>
        <a class="btn owl-btn prev"><span class="fa fa-angle-left"></span></a>
    </div>

@stop




