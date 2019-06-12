@section('title')
    تعديل الصور
@stop
@include('admin.layouts.head')

@include('admin.layouts.header')

@include('admin.layouts.sidebar')

<div class="content-wrapper">

    <div class="panel panel-success">
        <div class="panel panel-heading">
            <p class="h1 text-center">إضافة صور</p>
        </div>
        <a href="{{route('photos.index')}}" class="btn btn-primary"> عرض الصور <i class="fa fa-rotate-right"></i></a>

        <div class="panel panel-body">
            <form action="{{route('photos.store')}}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="url">الصورة</label>
                    <input type="file" name="url" class="form-control">
                </div>

                <div class="form-group">
                    <label for="category_id">إختر القسم</label>
                    <select name="category_id" id="category_id" class="form-control">
                        @foreach($categories as $category)
                            <option value="{{$category->id}}">{{$category->name_ar}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <button class="btn btn-success btn-block" type="submit">حفظ</button>
                </div>

            </form>
        </div>
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