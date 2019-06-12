@section('title')
    صور الالبومات
@stop
@include('admin.layouts.head')

@include('admin.layouts.header')

@include('admin.layouts.sidebar')


<div class="content-wrapper">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3  class="text-center">الصور</h3>
                    <a href="{{route('photos.create')}}" class="btn btn-success"> إضافة صورة جديدة <i class="fa fa-plus"></i></a>

                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr class="text-center">
                            <th class="text-center">ID</th>
                            <th class="text-center">الصورة</th>
                            <th class="text-center">القسم</th>
                            <th class="text-center">ناريخ الاضافة</th>
                            <th class="text-center">تعديل</th>
                            <th class="text-center">حذف</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if(count($photos) > 0)
                            @foreach($photos as $photo)
                                <tr>
                                    <td class="text-center">{{$photo->id}}</td>
                                    <td ><img width="200" height="200" src="{{asset($photo->url)}}" alt="" class="img-responsive img-rounded center-block" alt=""></td>
                                    <td class="text-center">{{$photo->category ? $photo->category->name_ar : 'لا يوجد'}}</td>
                                    <td class="text-center">{{$photo->created_at ? $photo->created_at->diffForHumans() : 'no date'}}</td>
                                    <td class="text-center"><a href="{{route('photos.edit', $photo->id)}}" class="btn btn-info">تعديل</a></td>
                                    <td class="text-center">
                                        <form action="{{route('photos.destroy', $photo->id)}}" method="POST">
                                            {{csrf_field()}}
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button class="btn btn-danger">حذف</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <th colspan="7" class="text-center h4">لا يوجد صور</th>
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

