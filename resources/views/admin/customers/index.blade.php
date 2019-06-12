@section('title')
    العملاء
@stop
@include('admin.layouts.head')

@include('admin.layouts.header')

@include('admin.layouts.sidebar')


<div class="content-wrapper">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class=" text-center">العملاء</h3>
                    <a href="{{route('customers.create')}}" class="btn btn-success"> إضافة عميل جديد <i class="fa fa-plus"></i></a>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th class="text-center">ID</th>
                            <th class="text-center">لوجو العميل</th>
                            <th class="text-center">لينك العميل</th>
                            <th class="text-center">وقت الانشاء</th>
                            <th class="text-center">تعديل</th>
                            <th class="text-center">حذف</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if(count($customers) > 0)
                            @foreach($customers as $customer)
                                <tr>
                                    <td class="text-center">{{$customer->id}}</td>
                                    <td class="text-center"><img width="150" height="100" src="{{asset($customer->logo)}}" alt=""></td>
                                    <td class="text-center"><a href="{{$customer->url}}">{{$customer->url}}</a></td>
                                    <td class="text-center">{{$customer->created_at->toFormattedDateString()}}</td>
                                    <td class="text-center"><a href="{{route('customers.edit', $customer->id)}}" class="btn btn-info">تعديل</a></td>
                                    <td class="text-center">
                                        <form action="{{route('customers.destroy', $customer->id)}}" method="POST">
                                            {{csrf_field()}}
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button class="btn btn-danger">حذف</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <th colspan="6" class="text-center h4">لا يوجد عملاء</th>
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

