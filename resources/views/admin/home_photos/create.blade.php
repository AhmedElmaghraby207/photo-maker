@section('title')
    إضافة صورة للرئيسية
@stop
@include('admin.layouts.head')

@include('admin.layouts.header')

@include('admin.layouts.sidebar')


<div class="content-wrapper">
    <div class="panel panel-success">
        <div class="panel panel-heading">
            <p class="h1 text-center">إضافة صورة للصفحة الرئيسية</p>
        </div>
        <a href="{{route('homePhotos.index')}}" class="btn btn-primary"> عرض الصور <i class="fa fa-rotate-right"></i></a>


        <div class="panel panel-body">
            <form action="{{route('homePhotos.store')}}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="cover">الصورة</label>
                    <input type="file" name="photo" class="form-control">
                </div>

                <div class="form-group">
                    <button class="btn btn-success btn-block" type="submit">حفظ</button>
                </div>

            </form>
        </div>

    </div>
</div>


@include('admin.layouts.footer')