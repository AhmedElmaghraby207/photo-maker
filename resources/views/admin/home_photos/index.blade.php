@section('title')
    صور الصفحة الرئيسية
@stop
@include('admin.layouts.head')

@include('admin.layouts.header')

@include('admin.layouts.sidebar')


<div class="content-wrapper">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class=" text-center">صور الصفحة الرئيسية</h3>
                    <a href="{{route('homePhotos.create')}}" class="btn btn-success"> إضافة صورة جديدة <i class="fa fa-plus"></i></a>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th class="text-center">ID</th>
                            <th class="text-center">الصورة</th>
                            <th class="text-center">وقت الانشاء</th>
                            <th class="text-center">حذف</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if(count($photos) > 0)
                            @foreach($photos as $photo)
                                <tr>
                                    <td class="text-center">{{$photo->id}}</td>
                                    <td class="text-center"><img width="300" height="200" src="{{asset($photo->photo)}}" alt=""></td>
                                    <td class="text-center">{{$photo->created_at->toFormattedDateString()}}</td>
                                    <td class="text-center">
                                        <form action="{{route('homePhotos.destroy', $photo->id)}}" method="POST">
                                            {{csrf_field()}}
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button class="btn btn-danger">حذف</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <th colspan="6" class="text-center h4">لا يوجد صور</th>
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

