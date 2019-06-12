@section('title')
    أنواع المجموعات
@stop
@include('admin.layouts.head')

@include('admin.layouts.header')

@include('admin.layouts.sidebar')


<div class="content-wrapper">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3  class="text-center">انواع التصوير</h3>
                    <a href="{{route('options.create')}}" class="btn btn-success"> إضافة نوع جديد <i class="fa fa-plus"></i></a>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr class="text-center">
                            <th class="text-center">ID</th>
                            <th class="text-center">الاسم بالعربية</th>
                            <th class="text-center">الاسم بالإنجليزية</th>
                            <th class="text-center">المجموعة</th>
                            <th class="text-center">ناريخ الاضافة</th>
                            <th class="text-center">تعديل</th>
                            <th class="text-center">حذف</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if(count($options) > 0)
                            @foreach($options as $option)
                                <tr>
                                    <td class="text-center">{{$option->id}}</td>
                                    <td class="text-center">{{$option->name_ar}}</td>
                                    <td class="text-center">{{$option->name_en}}</td>
                                    <td class="text-center">{{$option->package ? $option->package->name_ar : 'لا يوجد'}}</td>
                                    <td class="text-center">{{$option->created_at ? $option->created_at->diffForHumans() : 'no date'}}</td>
                                    <td class="text-center"><a href="{{route('options.edit', $option->id)}}" class="btn btn-info">تعديل</a></td>
                                    <td class="text-center">
                                        <form action="{{route('options.destroy', $option->id)}}" method="POST">
                                            {{csrf_field()}}
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button class="btn btn-danger">حذف</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <th colspan="7" class="text-center h4">لا يوجد أنواع</th>
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

