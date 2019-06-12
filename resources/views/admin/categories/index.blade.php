@section('title')
    الألبومات
@stop
@include('admin.layouts.head')

@include('admin.layouts.header')

@include('admin.layouts.sidebar')


<div class="content-wrapper">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class=" text-center">ألبومات الصور</h3>
                    <a href="{{route('categories.create')}}" class="btn btn-success"> إضافة ألبوم جديد <i class="fa fa-plus"></i></a>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th class="text-center">ID</th>
                            <th class="text-center">غلاف القسم</th>
                            <th class="text-center">اسم القسم بالعربية</th>
                            <th class="text-center">اسم القسم بالانجليزية</th>
                            <th class="text-center">وقت الانشاء</th>
                            <th class="text-center">تعديل</th>
                            <th class="text-center">حذف</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if(count($categories) > 0)
                            @foreach($categories as $category)
                                <tr>
                                    <td class="text-center">{{$category->id}}</td>
                                    <td class="text-center"><img width="150" height="100" src="{{asset($category->cover)}}" alt=""></td>
                                    <td class="text-center">{{$category->name_ar}}</td>
                                    <td class="text-center">{{$category->name_en}}</td>
                                    <td class="text-center">{{$category->created_at->toFormattedDateString()}}</td>
                                    <td class="text-center"><a href="{{route('categories.edit', $category->id)}}" class="btn btn-info">تعديل</a></td>
                                    <td class="text-center">
                                        <form action="{{route('categories.destroy', $category->id)}}" method="POST">
                                            {{csrf_field()}}
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button class="btn btn-danger">حذف</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <th colspan="7" class="text-center h4">لا يوجد ألبومات</th>
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
    <!-- /.row -->
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

