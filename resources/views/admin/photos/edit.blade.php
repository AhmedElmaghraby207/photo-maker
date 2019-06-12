@section('title')
    تعديل الصور
@stop
@include('admin.layouts.head')

@include('admin.layouts.header')

@include('admin.layouts.sidebar')

<div class="content-wrapper">
    <div class="panel panel-success">
        <div class="panel panel-heading">
            <p class="h1 text-center">تعديل الصورة</p>
        </div>
        <a href="{{route('photos.index')}}" class="btn btn-primary"> عرض الصور <i class="fa fa-rotate-right"></i></a>

        <div class="panel panel-body">
            <form action="{{route('photos.update', $photo->id)}}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="PUT">

                <div class="form-group">
                    <label for="category_id">إختر القسم</label>
                    <select name="category_id" id="category_id" class="form-control">
                        @foreach($categories as $category)
                            <option value="{{$category->id}}"
                                    @if($photo->category->id == $category->id)
                                    selected
                                    @endif
                            >{{$category->name_ar}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="url">إختر صورة جديدة</label>
                    <input type="file" class="form-control" name="url">
                </div>

                <div class="form-group">
                    <button class="btn btn-success btn-block" type="submit">حفظ</button>
                </div>

            </form>
        </div>
    </div>
</div>

@include('admin.layouts.footer')