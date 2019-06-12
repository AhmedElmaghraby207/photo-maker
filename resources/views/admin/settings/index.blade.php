@section('title')
    إعدادات الموقع
@stop
@include('admin.layouts.head')
@include('admin.layouts.header')
@include('admin.layouts.sidebar')

<div class="content-wrapper">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class=" text-center">إعدادات الموقع</h3>
                </div>
                <!-- /.box-header -->
                <div class="row">
                    <div class="container bg-gray">
                        <div class="col-sm-6">
                            <div class="form-group text-center">
                                <label for="name">الايكون</label>
                                @if($settings->icon != null)
                                    <img height="50px" width="50px" src="{{asset($settings->icon)}}" alt="" class="img-responsive img-rounded">
                                @else
                                    <img height="50px" width="50px" src="{{asset('http://via.placeholder.com/50x50')}}" class="img-responsive img-rounded">
                                @endif
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group text-center bg-gray-active">
                                <label for="name">الصورة</label>
                                @if($settings->logo != null)
                                    <img height="200px" width="200px" src="{{asset($settings->logo)}}" alt="" class="img-responsive img-rounded">
                                @else
                                    <img height="200px" width="200px" src="{{asset('http://via.placeholder.com/200x200')}}" alt="" class="img-responsive img-rounded">
                                @endif
                            </div>
                        </div>
                    </div>
                    <a href="{{route('settings.edit', $settings->id)}}" class="btn btn-info btn-block"> تعديل <i class="fa fa-edit"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>

@include('admin.layouts.footer')

