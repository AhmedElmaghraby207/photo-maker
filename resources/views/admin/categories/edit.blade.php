@section('title')
    تعديل ألبوم
@stop
@include('admin.layouts.head')

@include('admin.layouts.header')

@include('admin.layouts.sidebar')


<div class="content-wrapper">
<div class="panel panel-success">

                <div class="panel panel-heading">
                    <p class="h1 text-center">تعديل القسم</p>
                    <a href="{{route('categories.index')}}" class="btn btn-primary"> عرض الالبومات <i class="fa fa-rotate-right"></i></a>

                </div>

                <div class="panel panel-body">
                    <form action="{{route('categories.update', $category->id)}}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <input type="hidden" name="_method" value="PUT">
                        <div class="form-group">
                            <label for="name_ar">اسم القسم بالعربية</label>
                            <input type="text" name="name_ar" class="form-control" value="{{$category->name_ar}}">
                        </div>

                        <div class="form-group">
                            <label for="name_en">اسم القسم بالانجليزية</label>
                            <input type="text" name="name_en" class="form-control" value="{{$category->name_en}}">
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