@section('title')
    بيانات الفوتر
@stop
@include('admin.layouts.head')

@include('admin.layouts.header')

@include('admin.layouts.sidebar')


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1  class="text-center">
            تعديل بيانات الفوتر
        </h1>

    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container">

            <div class="">
                <div class="row form-group">
                    <form action="{{route('footer.update' , $footer->id)}}" method="post">
                        {{csrf_field()}}
                        <input type="hidden" name="_method" value="PUT">
                        <br>
                        <br>
                        <div class="col-sm-4 col-sm-offset-1">
                            <div class="form-group">
                                <label for="rights_ar">حقوق الملكية</label>
                                <input class="form-control" type="text" name="rights_ar" value="{{$footer->rights_ar}}">
                            </div>
                            <div class="form-group">
                                <label for="rights_en">Copy Rights</label>
                                <input class="form-control" type="text" name="rights_en" value="{{$footer->rights_en}}">
                            </div>
                            <button class="btn btn-success"> حفظ التعديلات <i class="fa fa-save"></i></button>
                        </div>
                        <div class="col-sm-7 form-group">
                            <div class="form-group">
                                <label for="name">Facebook</label>
                                <input class="form-control" type="url" name="facebook" value="{{$footer->facebook}}">
                            </div>
                            <div class="form-group">
                                <label for="name">Twitter</label>
                                <input class="form-control" type="url" name="twitter" value="{{$footer->twitter}}">
                            </div>
                            <div class="form-group">
                                <label for="name">Google-plus</label>
                                <input class="form-control" type="url" name="google_plus" value="{{$footer->google_plus}}">
                            </div>
                            <div class="form-group">
                                <label for="name">Instagram</label>
                                <input class="form-control" type="url" name="instagram" value="{{$footer->instagram}}">
                            </div>
                            <div class="form-group">
                                <label for="name">Pinterest</label>
                                <input class="form-control" type="url" name="pinterest" value="{{$footer->pinterest}}">
                            </div>
                            <div class="form-group">
                                <label for="name">Youtube</label>
                                <input class="form-control" type="url" name="youtube" value="{{$footer->youtube}}">
                            </div>
                            <div class="form-group">
                                <label for="name">Google-drive</label>
                                <input class="form-control" type="url" name="google_drive" value="{{$footer->google_drive}}">
                            </div>
                            <div class="form-group">
                                <label for="name">Linkedin</label>
                                <input class="form-control" type="url" name="linkedin" value="{{$footer->linkedin}}">
                            </div>
                            <div class="form-group">
                                <label for="name">Google-play</label>
                                <input class="form-control" type="url" name="google_play" value="{{$footer->google_play}}">
                            </div>
                            <div class="form-group">
                                <label for="name">App-store</label>
                                <input class="form-control" type="url" name="app_store" value="{{$footer->app_store}}">
                            </div>
                            <div class="form-group">
                                <label for="name">Behance</label>
                                <input class="form-control" type="url" name="behance" value="{{$footer->behance}}">
                            </div>
                            <div class="form-group">
                                <label for="name">Vimeo</label>
                                <input class="form-control" type="url" name="vimeo" value="{{$footer->vimeo}}">
                            </div>
                        </div>
                    </form>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
    </section>
</div>



@include('admin.layouts.footer')



