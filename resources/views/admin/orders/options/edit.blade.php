@section('title')
    تعديل الانواع
@stop
@include('admin.layouts.head')

@include('admin.layouts.header')

@include('admin.layouts.sidebar')

<div class="content-wrapper">
    <div class="panel panel-success">
        <div class="panel panel-heading">
            <p class="h1 text-center">تعديل نوع التصوير</p>
        </div>
        <a href="{{route('options.index')}}" class="btn btn-primary"> عرض الانواع <i class="fa fa-rotate-right"></i></a>

        <div class="panel panel-body">
            <form action="{{route('options.update', $option->id)}}" method="POST">
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="PUT">

                <div class="form-group">
                    <label for="name_ar">الاسم بالعربية</label>
                    <input type="text" required name="name_ar" class="form-control" value="{{$option->name_ar}}">

                    <label for="name_ar">الاسم بالانجليزية</label>
                    <input type="text" required name="name_en" class="form-control" value="{{$option->name_en}}">

                    <label for="_id">إختر المجموعة</label>
                    <select name="package_id" id="package_id" class="form-control">
                        @foreach($packages as $package)
                            <option value="{{$package->id}}"
                                    @if($option->package->id == $package->id)
                                    selected
                                    @endif
                            >{{$package->name_ar}}</option>
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