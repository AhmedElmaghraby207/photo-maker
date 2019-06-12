@extends('website.layouts.site')

@section('title')
    @lang('alert.tit-services')
@stop

@section('content')

    <div class="fixed-bg">
        <img src="{{asset('public/website/images/1.jpg')}}">
    </div>


    <div class="main-content">
        <div class="container">
            <h1 class="main-heading">@lang('alert.services-title')</h1>

            @if($services)
            <div class="border-bottom">
                @foreach($services as $service)
                    @if(\App::isLocale('ar'))
                        <h1>{{ $service->title_ar }}</h1>
                        <p>{!! $service->description_ar !!}</p>
                    @else
                        <h1>{{ $service->title_en }}</h1>
                        <p>{!! $service->description_en !!}</p>
                    @endif
                @endforeach
            </div>
            @endif

        </div>
    </div>

@stop

