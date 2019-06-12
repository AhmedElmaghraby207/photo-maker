@section('title')
    تعديل اللوجو&الايكون
@stop
@include('admin.layouts.head')

@include('admin.layouts.header')

@include('admin.layouts.sidebar')


<div class="content-wrapper">
    <div class="panel panel-success">
        <div class="panel panel-heading">
            <p class="h1 text-center">تعديل اللوجو والايكون</p>
        </div>

        <div class="panel panel-body">
            <form action="{{route('settings.update', $setting->id)}}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="PUT">
                <div class="form-group">
                    <label for="logo">اللوجو</label>
                    <input type="file" name="logo" class="form-control">
                </div>

                <div class="form-group">
                    <label for="icon">الايكون</label>
                    <input type="file" name="icon" class="form-control">
                </div>

                <div class="form-group">
                    <button class="btn btn-info btn-block" type="submit">حفظ</button>
                </div>

            </form>
        </div>

    </div>
</div>


@include('admin.layouts.footer')