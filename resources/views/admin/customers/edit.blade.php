@section('title')
    تعديل العملاء
@stop
@include('admin.layouts.head')

@include('admin.layouts.header')

@include('admin.layouts.sidebar')


<div class="content-wrapper">
<div class="panel panel-success">

                <div class="panel panel-heading">
                    <p class="h1 text-center">تعديل لوجو العميل</p>
                </div>
                <a href="{{route('customers.index')}}" class="btn btn-primary"> عرض الاعملاء <i class="fa fa-rotate-right"></i></a>
                <div class="panel panel-body">
                    <form action="{{route('customers.update', $customer->id)}}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <input type="hidden" name="_method" value="PUT">

                        <div class="form-group">
                            <label for="cover">اللوجو</label>
                            <input type="file" name="logo" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="cover">لينك العميل</label>
                            <input type="url" name="url" class="form-control" required value="{{$customer->url}}">
                        </div>

                        <div class="form-group">
                            <button class="btn btn-success btn-block" type="submit">حفظ</button>
                        </div>

                    </form>
                </div>

            </div>


</div>


@include('admin.layouts.footer')