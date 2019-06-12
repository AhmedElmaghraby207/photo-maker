@section('title')
    من نحن
@stop
@include('admin.layouts.head')

@include('admin.layouts.header')

@include('admin.layouts.sidebar')


<div class="content-wrapper">
    <div class="panel panel-primary">
        <div class="panel panel-heading">
            <p class="h1 text-center">من نحن</p>
        </div>
        <div class="panel panel-body">
            <table class="table table-striped">


                <tbody>
                @foreach($about as $about_details)
                    <tr>
                        <td class="text-center h4">{!! $about_details->details_ar !!}</td>
                    </tr>

                    <tr>
                        <td><br></td>
                    </tr>


                    <tr>
                        <td class="text-center h4">{!! $about_details->details_en !!}</td>
                    </tr>

                    <tr>
                        <td><a class="btn btn-info btn-block" href="{{route('about.edit', $about_details->id)}}">تعديل</a></td>
                    </tr>
                @endforeach
                </tbody>

            </table>
        </div>
    </div>
</div>

@include('admin.layouts.footer')
