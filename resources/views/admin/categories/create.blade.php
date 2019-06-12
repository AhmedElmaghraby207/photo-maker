@section('title')
    إضافة ألبوم
@stop
@include('admin.layouts.head')

@include('admin.layouts.header')

@include('admin.layouts.sidebar')


<div class="content-wrapper">
    <div class="panel panel-success">
        <div class="panel panel-heading">
            <p class="h1 text-center">إضافة قسم صور</p>
        </div>
        <a href="{{route('categories.index')}}" class="btn btn-primary"> عرض الالبومات <i class="fa fa-rotate-right"></i></a>


        <div class="panel panel-body">
            <form action="{{route('categories.store')}}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="name_ar">اسم القسم بالعربية</label>
                    <input type="text" name="name_ar" class="form-control" title="">
                </div>

                <div class="form-group">
                    <label for="name_en">اسم القسم بالانجليزية</label>
                    <input type="text" name="name_en" class="form-control" title="">
                </div>

                <div class="form-group">
                    <label for="cover">غلاف القسم</label>
                    <input type="file" name="cover" class="form-control">
                </div>

                <div class="form-group">
                    <button class="btn btn-success btn-block" type="submit">حفظ</button>
                </div>

            </form>
        </div>

    </div>
</div>


@include('admin.layouts.footer')