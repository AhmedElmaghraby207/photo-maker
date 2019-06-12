<footer class="main-footer">
    <div class="pull-right hidden-xs">
        <b>Version</b> 2.3.5
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights
    reserved.
</footer>



</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="{{asset('public/cpanel/js/jquery-2.2.4.min.js')}}"></script>
<script src="{{asset('public/cpanel/js/jquery.min.js')}}"></script>
<!-- Bootstrap 3.3.6 -->
<script src="{{asset('public/cpanel/js/bootstrap.min.js')}}"></script>
<!-- SlimScroll -->
<script src="{{asset('public/cpanel/js/jquery.slimscroll.min.js')}}"></script>
<!-- FastClick -->
<script src="{{asset('public/cpanel/js/fastclick.js')}}"></script>
<!-- DataTables -->
<script src="{{asset('public/cpanel/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('public/cpanel/js/dataTables.bootstrap.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('public/cpanel/js/app.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('public/cpanel/js/demo.js')}}"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{{asset('public/cpanel/js/bootstrap3-wysihtml5.all.min.js')}}"></script>
<!-- CK Editor -->
<script src="{{asset('public/cpanel/js/ckeditor.js')}}"></script>

<script>
    $(function () {
        // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
        CKEDITOR.replace('editor1');
        //bootstrap WYSIHTML5 - text editor
        $(".textarea").wysihtml5();
    });
</script>

<script src="{{ asset('public/cpanel/js/toastr.min.js') }}"></script>
<script>

    @if(Session::has('success'))
    toastr.success("{{Session::get('success')}}")
    @endif

    @if(Session::has('info'))
    toastr.info("{{Session::get('info')}}")
    @endif

    @if(Session::has('warning'))
    toastr.warning("{{Session::get('warning')}}")
    @endif

    @if(Session::has('error'))
    toastr.error("{{Session::get('error')}}")
    @endif

</script>

@yield('scripts')

</body>
</html>
