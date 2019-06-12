@section('title')
    إضافة نوع جديد
@stop
@include('admin.layouts.head')

@include('admin.layouts.header')

@include('admin.layouts.sidebar')

<div class="content-wrapper">

    <div class="panel panel-success">
        <div class="panel panel-heading">
            <p class="h1 text-center">إضافة نوع جديد</p>
        </div>
        <a href="{{route('options.index')}}" class="btn btn-primary"> عرض الانواع <i class="fa fa-rotate-right"></i></a>


        <div class="panel panel-body">
            <form action="{{route('options.store')}}" method="POST">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="name_ar">الاسم بالعربية</label>
                    <input type="text" required name="name_ar" class="form-control">

                    <label for="name_ar">الاسم بالانجليزية</label>
                    <input type="text" required name="name_en" class="form-control">

                    <label for="package_id">إختر المجموعة</label>
                    <select name="package_id" id="category_id" class="form-control">
                        @foreach($packages as $package)
                            <option value="{{$package->id}}">{{$package->name_ar}}</option>
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

@section('scripts')

    <script>
        $(function () {
            $("#example1").DataTable();
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false
            });
        });
    </script>

@stop

@include('admin.layouts.footer')