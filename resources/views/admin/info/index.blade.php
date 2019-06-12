@section('title')
    تفاصيل الاتصال
@stop
@include('admin.layouts.head')

@include('admin.layouts.header')

@include('admin.layouts.sidebar')


<div class="content-wrapper">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class=" text-center">معلومات الاتصال</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th class="text-center">البريد الالكترونى</th>
                            <th class="text-center">رقم الهاتف</th>
                            <th class="text-center">أخر تحديث</th>
                            <th class="text-center">تحديث</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if(count($info) > 0)
                            @foreach($info as $info_details)
                                <tr>
                                    <td class="text-center">{{$info_details->email}}</td>
                                    <td class="text-center">{{$info_details->phone}}</td>
                                    <td class="text-center">{{$info_details->updated_at ? $info_details->updated_at->toFormattedDateString() : 'غير معروف'}}</td>
                                    <td class="text-center"><a class="btn btn-info" href="{{route('info.edit', $info_details->id)}}">تحديث</a></td>

                                </tr>
                            @endforeach
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

