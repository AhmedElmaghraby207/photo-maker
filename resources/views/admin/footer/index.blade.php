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
            بيانات الفوتر
        </h1>

    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container">

            <div class="">
                <div class="row form-group">
                    <a href="{{route('footer.edit', $footer->id)}}" class="btn btn-info"> تعديل بيانات الفوتر <i class="fa fa-edit"></i></a>
                    <br>
                    <br>
                    <div class="col-sm-4 col-sm-offset-1">
                        <div class="form-group">
                            <label for="rights_ar">حقوق الملكية</label>
                            <p class="h4 form-control">{{$footer->rights_ar}}</p>
                        </div>
                        <div class="form-group">
                            <label for="rights_en">Copy Rights</label>
                            <p class="h4 form-control">{{$footer->rights_en}}</p>
                        </div>
                    </div>
                    <div class="col-sm-7 form-group">
                        <div class="form-group">
                            <label for="name">Facebook</label>
                            <p class="h4 form-control">{{$footer->facebook}}</p>
                        </div>
                        <div class="form-group">
                            <label for="name">Twitter</label>
                            <p class="h4 form-control">{{$footer->twitter}}</p>
                        </div>
                        <div class="form-group">
                            <label for="name">Google-plus</label>
                            <p class="h4 form-control">{{$footer->google_plus}}</p>
                        </div>
                        <div class="form-group">
                            <label for="name">Instagram</label>
                            <p class="h4 form-control">{{$footer->instagram}}</p>
                        </div>
                        <div class="form-group">
                            <label for="name">Pinterest</label>
                            <p class="h4 form-control">{{$footer->pinterest}}</p>
                        </div>
                        <div class="form-group">
                            <label for="name">Youtube</label>
                            <p class="h4 form-control">{{$footer->youtube}}</p>
                        </div>
                        <div class="form-group">
                            <label for="name">Google-drive</label>
                            <p class="h4 form-control">{{$footer->google_drive}}</p>
                        </div>
                        <div class="form-group">
                            <label for="name">Linkedin</label>
                            <p class="h4 form-control">{{$footer->linkedin}}</p>
                        </div>
                        <div class="form-group">
                            <label for="name">Google-play</label>
                            <p class="h4 form-control">{{$footer->google_play}}</p>
                        </div>
                        <div class="form-group">
                            <label for="name">App-store</label>
                            <p class="h4 form-control">{{$footer->app_store}}</p>
                        </div>
                        <div class="form-group">
                            <label for="name">Behance</label>
                            <p class="h4 form-control">{{$footer->behance}}</p>
                        </div>
                        <div class="form-group">
                            <label for="name">Vimeo</label>
                            <p class="h4 form-control">{{$footer->vimeo}}</p>
                        </div>

                    </div>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
    </section>
</div>



@include('admin.layouts.footer')



