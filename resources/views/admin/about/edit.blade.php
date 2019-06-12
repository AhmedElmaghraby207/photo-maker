@section('title')
    تعديل من نحن
@stop
@include('admin.layouts.head')

@include('admin.layouts.header')

@include('admin.layouts.sidebar')


<div class="content-wrapper">

    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <!-- /.box-header -->
                    <div class="box-body pad">
                        <form action="{{route('about.update' , $about->id)}}" method="post">
                            {{csrf_field()}}
                            <input type="hidden" name="_method" value="PUT">
                            <p class="h3 text-center">تعديل من نحن باللغة العربية</p>
                            <textarea id="editor1" class="textarea" name="details_ar" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{$about->details_ar}}</textarea>
                            <p class="h3 text-center">تعديل من نحن باللغة الانجليزية</p>
                            <textarea id="editor1" class="textarea" name="details_en" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{$about->details_en}}</textarea>
                            <button class="btn btn-info btn-block">حفظ التعديلات</button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /.col-->
        </div>
        <!-- ./row -->
    </section>

</div>


@include('admin.layouts.footer')
