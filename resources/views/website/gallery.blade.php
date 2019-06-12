@extends('website.layouts.site')

@section('title')
    @lang('alert.tit-gallery')
@stop

@section('content')

    <div class="fixed-bg">
        <img src="{{asset('public/website/images/1.jpg')}}">
    </div>


    <div class="main-content">
        <div class="container-fluid">
            <h1 class="main-heading">@lang('alert.works')</h1>

            @if(count($categories) > 0)
            <div class="row">
                @foreach($categories as $category)
                <div class="col-xs-12 col-sm-6 col-md-4 no-padding">
                    <a href="{{route('photo-maker-gallery.show', $category->id)}}" class="img-holder">
                        <img src="{{asset($category->cover)}}" alt="...">
                        <div class="hover-content">
                            @if(\App::isLocale('ar'))
                                <h1>{{$category->name_ar}}</h1>
                            @else
                                <h1>{{$category->name_en}}</h1>
                            @endif
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
            @else
                <p class="text-center">@lang('alert.g-message')</p>
            @endif

        </div>
    </div>

@stop





