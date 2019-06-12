@include('admin.layouts.head')

@include('admin.layouts.header')

@include('admin.layouts.sidebar')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1  class="text-center">
            معلومات الموقع
        </h1>

    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="box">
            <div class="row">

                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-yellow">
                        <div class="inner text-center">
                            <h3>{{count(\App\Order::all())}}</h3>

                            <p class="h1">الطلبات</p>
                        </div>
                        <div class="icon">
                            {{--<i class="ion ion-person-add"></i>--}}
                        </div>
                        <a href="{{route('orders.index')}}" class="small-box-footer">عرض الكل <i class="fa fa-arrow-circle-left"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-red">
                        <div class="inner text-center">
                            <h3>{{count(\App\Customer::all())}}</h3>

                            <p class="h1">العملاء</p>
                        </div>
                        <div class="icon">
                            {{--<i class="ion ion-pie-graph"></i>--}}
                        </div>
                        <a href="{{route('customers.index')}}" class="small-box-footer">عرض الكل <i class="fa fa-arrow-circle-left"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-aqua">
                        <div class="inner text-center">
                            <h3>{{count(\App\Package::all())}}</h3>

                            <p class="h1">المجموعات</p>
                        </div>
                        <div class="icon">
                            {{--<i class="ion ion-bag"></i>--}}
                            {{--<i class="fas fa-images"></i>--}}
                        </div>
                        <a href="{{route('packages.index')}}" class="small-box-footer">عرض الكل <i class="fa fa-arrow-circle-left"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-green">
                        <div class="inner text-center">
                            <h3>{{count(\App\Category::all())}}</h3>

                            <p class="h1">الالبومات</p>
                        </div>
                        <div class="icon">
                            {{--<i class="ion ion-stats-bars"></i>--}}
                        </div>
                        <a href="{{route('categories.index')}}" class="small-box-footer">عرض الكل <i class="fa fa-arrow-circle-left"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-yellow">
                        <div class="inner text-center">
                            <h3>{{count(\App\Service::all())}}</h3>

                            <p class="h1">الخدمات</p>
                        </div>
                        <div class="icon">
                            {{--<i class="ion ion-person-add"></i>--}}
                        </div>
                        <a href="{{route('services.index')}}" class="small-box-footer">عرض الكل <i class="fa fa-arrow-circle-left"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-red">
                        <div class="inner text-center">
                            <h3>{{count(\App\Join::all())}}</h3>

                            <p class="h3">المشاركين</p>
                        </div>
                        <div class="icon">
                            {{--<i class="ion ion-pie-graph"></i>--}}
                        </div>
                        <a href="{{route('joins.index')}}" class="small-box-footer">عرض الكل <i class="fa fa-arrow-circle-left"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-aqua">
                        <div class="inner text-center">
                            <h3>{{count(\App\Options::all())}}</h3>

                            <p class="h3">الانواع</p>
                        </div>
                        <div class="icon">
                            {{--<i class="ion ion-bag"></i>--}}
                            {{--<i class="fas fa-images"></i>--}}
                        </div>
                        <a href="{{route('options.index')}}" class="small-box-footer">عرض الكل <i class="fa fa-arrow-circle-left"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-green">
                        <div class="inner text-center">
                            <h3>{{count(\App\Photo::all())}}</h3>

                            <p class="h1">الصور</p>
                        </div>
                        <div class="icon">
                            {{--<i class="ion ion-stats-bars"></i>--}}
                        </div>
                        <a href="{{route('photos.index')}}" class="small-box-footer">عرض الكل <i class="fa fa-arrow-circle-left"></i></a>
                    </div>
                </div>
                <!-- ./col -->

            </div>
        </div>
        <!-- /.box -->

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->


@include('admin.layouts.footer')