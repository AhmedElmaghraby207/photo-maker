@section('title')
    تعديل المجموعات
@stop
@include('admin.layouts.head')

@include('admin.layouts.header')

@include('admin.layouts.sidebar')


<div class="content-wrapper">
<div class="panel panel-success">

                <div class="panel panel-heading">
                    <p class="h1 text-center">تعديل المجموعة</p>
                </div>
                <a href="{{route('packages.index')}}" class="btn btn-primary"> عرض المجموعات <i class="fa fa-rotate-right"></i></a>

                <div class="panel panel-body">
                    <form action="{{route('packages.update', $package->id)}}" method="POST">
                        {{ csrf_field() }}
                        <input type="hidden" name="_method" value="PUT">
                        <div class="form-group">
                            <label for="name_ar">اسم المجموعة بالعربية</label>
                            <input type="text" required name="name_ar" class="form-control" value="{{$package->name_ar}}">
                        </div>

                        <div class="form-group">
                            <label for="name_en">اسم المجموعة بالانجليزية</label>
                            <input type="text" required name="name_en" class="form-control" value="{{$package->name_en}}">
                        </div>

                        <div class="form-group">
                            <button class="btn btn-success btn-block" type="submit">حفظ</button>
                        </div>

                    </form>
                </div>

            </div>


</div>


@include('admin.layouts.footer')