@section('title')
    تعديل تفاصيل الاتصال
@stop
@include('admin.layouts.head')

@include('admin.layouts.header')

@include('admin.layouts.sidebar')


<div class="content-wrapper">
    <div class="panel panel-success">

        <div class="panel panel-heading">
            <p class="h1 text-center">تعديل معلومات الاتصال</p>
            <a href="{{route('info.index')}}" class="btn btn-primary"> عرض معلومات الاتصال <i class="fa fa-rotate-right"></i></a>

        </div>

        <div class="panel panel-body">
            <form action="{{route('info.update', $info->id)}}" method="POST">
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="PUT">
                <div class="form-group">
                    <label for="name_ar">البريد الالكترونى</label>
                    <input type="email" name="email" class="form-control" value="{{$info->email}}">
                </div>

                <div class="form-group">
                    <label for="name_en">رقم الهاتف</label>
                    <input type="number" name="phone" class="form-control" value="{{$info->phone}}">
                </div>

                <div class="form-group">
                    <button class="btn btn-success btn-block" type="submit">حفظ</button>
                </div>

            </form>
        </div>

    </div>


</div>


@include('admin.layouts.footer')