@section('title')
    خدماتنا
@stop
@include('admin.layouts.head')

@include('admin.layouts.header')

@include('admin.layouts.sidebar')


<div class="content-wrapper">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class=" text-center">محتوى خدماتنا</h3>
                    <a href="{{route('services.create')}}" class="btn btn-success"> إضافة محتوى جديد <i class="fa fa-plus"></i></a>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th class="text-center">ID</th>
                            <th class="text-center">العنوان بالعربية</th>
                            <th class="text-center">التفاصيل بالعربية</th>
                            <th class="text-center">العنوان بالانجليزية</th>
                            <th class="text-center">التفاصيل بالانجليزية</th>
                            <th class="text-center">تعديل</th>
                            <th class="text-center">حذف</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if(count($services) > 0)
                            @foreach($services as $service)
                                <tr>
                                    <td class="text-center">{{$service->id}}</td>
                                    <td class="text-center">{!! $service->title_ar !!}</td>
                                    <td class="text-center">{!! $service->description_ar !!}</td>
                                    <td class="text-center">{!! $service->title_en !!}</td>
                                    <td class="text-center">{!! $service->description_en !!}</td>
                                    <td class="text-center"><a href="{{route('services.edit', $service->id)}}" class="btn btn-info">تعديل</a></td>
                                    <td class="text-center">
                                        <form action="{{route('services.destroy', $service->id)}}" method="POST">
                                            {{csrf_field()}}
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button class="btn btn-danger">حذف</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <th colspan="7" class="text-center h4">لا يوجد محتوى</th>
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

