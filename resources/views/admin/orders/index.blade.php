@section('title')
    الطلبات
@stop
@include('admin.layouts.head')
@include('admin.layouts.header')
@include('admin.layouts.sidebar')


<div class="content-wrapper">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class=" text-center">طلبات العملاء</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th class="text-center">ID</th>
                            <th class="text-center">الاسم/الشركة</th>
                            <th class="text-center">النشاط</th>
                            <th class="text-center">رقم الهاتف</th>
                            <th class="text-center">البريد الالكترونى</th>
                            <th class="text-center">الخدمات المطلوبة</th>
                            <th class="text-center">ملف</th>
                            <th class="text-center">إرسال رسالة تأكيد</th>
                            <th class="text-center">حذف</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if(count($orders) > 0)
                            @foreach($orders as $order)
                                <tr>
                                    <td class="text-center">{{$order->id}}</td>
                                    <td class="text-center"><a href="{{route('orders.show', $order->id)}}">(عرض)</a> {{$order->name}}</td>
                                    <td class="text-center">{{str_limit($order->activity, 20)}}</td>
                                    <td class="text-center">{{$order->phone}}</td>
                                    <td class="text-center">{{$order->email}}</td>

                                    <td>
                                        @foreach($packages as $package)
                                            <p>{{$package->name_ar}}</p>

                                                @foreach($order->options as $order_options)
                                                @if($package->id == $order_options->package_id)
                                                    <span class="badge label-primary">{{$order_options->name_ar}}</span>
                                                @endif
                                                @endforeach
                                            <hr>
                                        @endforeach
                                    </td>

                                    <td class="text-center">
                                        @if($order->file != null)
                                            <a class="btn btn-success" href="{{asset($order->file)}}">تحميل</a>
                                        @else
                                            <p class="text-danger">لا يوجد</p>
                                        @endif
                                    </td>

                                    <td class="text-center"><a class="btn btn-info" href="{{route('send.email', $order->id)}}">إرسال</a></td>

                                    <td class="text-center">
                                        <form action="{{route('orders.destroy', $order->id)}}" method="POST">
                                            {{csrf_field()}}
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button class="btn btn-danger">حذف</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <th colspan="8" class="text-center h4">لا يوجد طلبات</th>
                            </tr>
                        @endif
                        </tbody>

                    </table>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>
</div>

@section('scripts')

    <script>
        $(function () {
            $("#example1").DataTable();
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false
            });
        });
    </script>

@stop

@include('admin.layouts.footer')

