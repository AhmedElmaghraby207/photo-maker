@section('title')
    بيانات الطلب
@stop
@include('admin.layouts.head')

@include('admin.layouts.header')

@include('admin.layouts.sidebar')


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1  class="text-center">
            بيانات الطلب
        </h1>

    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container">

            <div class="">
                <div class="row form-group">
                    <a href="{{route('orders.index')}}" class="btn btn-info">عرض الطلبات <i class="fa fa-rotate-right"></i></a>
                    <br>

                    <div class="col-sm-12 form-group">
                        <div class="form-group">
                            <label for="name">الاسم</label>
                            <p class="h4 form-control">{{$order->name}}</p>
                        </div>
                        <div class="form-group">
                            <label for="name">النشاط</label>
                            <p class="h4 form-control">{{$order->activity}}</p>
                        </div>
                        <div class="form-group">
                            <label for="name">رقم الهاتف</label>
                            <p class="h4 form-control">{{$order->name}}</p>
                        </div>
                        <div class="form-group">
                            <label for="name">البريد الالكترونى</label>
                            <p class="h4 form-control">{{$order->activity}}</p>
                        </div>
                        <div class="form-group">
                            <label for="name">الخدمات المطلوبة</label>
                            @foreach($packages as $package)
                                <p>{{$package->name_ar}}</p>

                                @foreach($order->options as $order_options)
                                    @if($package->id == $order_options->package_id)
                                        <span class="badge label-primary">{{$order_options->name_ar}}</span>
                                    @endif
                                @endforeach
                                <hr>
                            @endforeach
                        </div>
                        <div class="form-group">
                            <label for="name">الملف</label>
                            @if($order->file != null)
                                <a class="btn btn-success" href="{{asset($order->file)}}">تحميل</a>
                            @else
                                <p class="text-danger">لا يوجد</p>
                            @endif
                        </div>



                    </div>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
    </section>
</div>



@include('admin.layouts.footer')



