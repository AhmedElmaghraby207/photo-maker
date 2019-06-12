@extends('website.layouts.site')

@section('title')
    @lang('alert.tit-contact')
@stop

@section('styles')
    <style>
        input[type="file"] {
            padding: 0;
        }

        .black-box.margin-bottom {
            margin: 0 0 15px;
        }

        .checkbox-holder {
            font-weight: 100;
            position: relative;
            cursor: pointer;
            margin-bottom: 10px;
            display: block;
        }

        .checkbox-holder span {
            vertical-align: middle;
        }

        .checkbox-holder .checkbox-icon {
            width: 13px;
            height: 13px;
            line-height: 7px;
            display: inline-block;
            border: 1px solid #000;
            background: #000;
            text-align: center;
            margin: 0 4px;
        }

        .checkbox-holder input[type="checkbox"] {
            position: absolute;
            opacity: 0;
            cursor: pointer;
        }

        .checkbox-holder .checkbox-icon:after {
            content: '';
            background: #000;
            width: 7px;
            height: 7px;
            display: block;
            margin: 2px;
        }

        .checkbox-holder input[type="checkbox"]:checked + .checkbox-icon {
            border-color: #00bcd4;
        }

        .checkbox-holder input[type="checkbox"]:checked + .checkbox-icon:after {
            background: #00bcd4;
        }

        .main-label {
            border-bottom: 1px dashed #00bcd4;
        }

        .check-open {
            margin-top: 10px;
        }
    </style>
@stop


@section('content')
    <div class="fixed-bg">
        <img src="{{asset('public/website/images/1.jpg')}}">
    </div>


    <div class="main-content">
        <div class="container">
            <h1 class="main-heading">@lang('alert.contact-title')</h1>

            <div class="row">
                <div class="col-xs-12 col-sm-8">
                    <form action="{{route('orders.store')}}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <input type="text" required name="name" placeholder="@lang('alert.name')">
                        <input type="text" required name="activity" placeholder="@lang('alert.activity')">
                        <input type="tel" required name="phone" placeholder="@lang('alert.phone')">
                        <input type="email" required name="email" placeholder="@lang('alert.email')">
                        <label>@lang('alert.type')</label>
                        <div class="row">
                            @foreach($packages as $package)
                            <div class="col-xs-12 col-sm-6 col-md-4">
                                <div class="box black-box margin-bottom">
                                    <div class="main-label">
                                        <label class="checkbox-holder">
                                            <input type="checkbox">
                                            <span class="checkbox-icon"></span>
                                            @if(\App::isLocale('ar'))
                                                <span>{{$package->name_ar}}</span>
                                            @else
                                                <span>{{$package->name_en}}</span>
                                            @endif
                                        </label>
                                    </div>
                                    <div class="check-open">
                                        @foreach($options as $option)
                                            @if($option->package_id == $package->id)
                                            <label class="checkbox-holder">
                                                <input type="checkbox" name="options[]" value="{{$option->id}}">
                                                <span class="checkbox-icon"></span>
                                                @if(\App::isLocale('ar'))
                                                    <span>{{$option->name_ar}}</span>
                                                @else
                                                    <span>{{$option->name_en}}</span>
                                                @endif
                                            </label>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <label>@lang('alert.file')</label>
                        <input type="file" name="file">
                        <div class="btn btn-white btn-block">
                            <span><input type="submit" value="@lang('alert.send')"></span>
                        </div>
                    </form>
                </div>

                <div class="col-xs-12 col-sm-4">

                    <div class="box black-box text-center">
                        <h3 class="main-heading">@lang('alert.contact-info')</h3>
                        @if($info)
                        <p><i class="fa fa-envelope-o right-fa"></i> {{$info->email}}</p>
                        <p><i class="fa fa-phone right-fa"></i> {{$info->phone}}</p>
                        @endif
                    </div>

                    <div class="box black-box text-center">
                        <h3 class="main-heading">@lang('alert.join-title')</h3>
                        <form action="{{route('joins.store')}}" method="post">
                            {{ csrf_field() }}
                            <input type="email" required name="email" placeholder="@lang('alert.join-email')">
                            <div class="btn btn-white btn-block">
                                <span><input type="submit" value="@lang('alert.join-button')"></span>
                            </div>
                        </form>
                    </div>

                </div>
            </div>

        </div>
    </div>
@stop






@section('scripts')
    <script>
        $(document).ready(function (){
            $('.check-open').slideUp(0);

            $('.main-label .checkbox-holder').click(function (){
                if($(this).find('input').is(':checked')) {
                    $(this).parents('.main-label').next('.check-open').stop().slideDown();
                } else {
                    $(this).parents('.main-label').next('.check-open').stop().slideUp();
                }
            });
        });
    </script>
@stop