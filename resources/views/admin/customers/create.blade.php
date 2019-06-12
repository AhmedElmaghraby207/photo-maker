@section('title')
    إضافة عميل
@stop
@include('admin.layouts.head')

@include('admin.layouts.header')

@include('admin.layouts.sidebar')


<div class="content-wrapper">
    <div class="panel panel-success">
        <div class="panel panel-heading">
            <p class="h1 text-center">إضافة عميل جديد</p>
        </div>
        <a href="{{route('customers.index')}}" class="btn btn-primary"> عرض الاعملاء <i class="fa fa-rotate-right"></i></a>


        <div class="panel panel-body">
            <form action="{{route('customers.store')}}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="cover">لوجو العميل</label>
                    <input type="file" name="logo" class="form-control">
                </div>

                <div class="form-group">
                    <label for="cover">اللينك</label>
                    <input type="url" name="url" required class="form-control">
                </div>

                <div class="form-group">
                    <button class="btn btn-success btn-block" type="submit">حفظ</button>
                </div>

            </form>
        </div>

    </div>
</div>


@include('admin.layouts.footer')