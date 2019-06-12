@section('title')
    إضافة خدمات
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
                        <h1 class="text-center">إضافة محتوى جديد لخدماتنا</h1>
                        <a href="{{route('services.index')}}" class="btn btn-primary"> عرض محتوى خدماتنا <i class="fa fa-rotate-right"></i></a>
                        <hr>

                        <form action="{{route('services.store')}}" method="post">
                            {{csrf_field()}}
                            <p class="h5 ">عنوان المحتوى باللغة العربية</p>
                            <input type="text" name="title_ar" required class="form-control">
                            {{--<textarea id="editor1" class="textarea" name="title_ar" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>--}}
                            <p class="h5 ">المحتوى باللغة العربية</p>
                            <textarea id="editor1" class="textarea" name="description_ar" required placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                            <hr>
                            <br>
                            <p class="h5 ">عنوان المحتوى باللغة الانجليزية</p>
                            <input type="text" name="title_en" required class="form-control">
                            {{--<textarea id="editor1" class="textarea" name="title_en" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>--}}
                            <p class="h5 ">المحتوى باللغة الانجليزية</p>
                            <textarea id="editor1" class="textarea" name="description_en" required placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                            <button class="btn btn-success btn-block">حفظ</button>
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
