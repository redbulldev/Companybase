
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2022 <a href="#">Companybox</a>.</strong>
    <div class="float-right d-none d-sm-inline-block">
      {{-- <b>Version</b> 3.2.0 --}}
    </div>
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{asset('admin/assets/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap -->
<script src="{{asset('admin/assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE -->
<script src="{{asset('admin/assets/dist/js/adminlte.js')}}"></script>

<!-- OPTIONAL SCRIPTS -->
{{-- <script src="{{asset('admin/assets/plugins/chart.js/Chart.min.js')}}"></script> --}}
<!-- AdminLTE for demo purposes -->
<script src="{{asset('admin/assets/dist/js/demo.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('admin/assets/dist/js/pages/dashboard3.js')}}"></script>

<!-- Summernote -->
<script src="{{asset('admin/assets/plugins/summernote/summernote-bs4.min.js')}}"></script>


<script type="text/javascript" src="{{asset('admin/assets/plugins/toastr/toastr.min.js')}}"></script>
<link rel="stylesheet" type="text/css" href="{{asset('admin/assets/plugins/toastr/toastr.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('admin/assets/plugins/toastr/toastr.css')}}">

<script type="text/javascript">
    @if(Session::has('success'))
    var type = "{{ Session::get('alert-type', 'success') }}";
    switch (type) {
        case 'success':
            toastr.success("{{ Session::get('success') }}", {
                timeOut: 2000
            });
            break;
    }
    @endif

    @if(Session::has('message'))
    var type = "{{ Session::get('alert-type', 'message') }}";
    switch (type) {
        case 'message':
            toastr.info("{{ Session::get('message') }}", {
                timeOut: 2000
            });
            break;
    }
    @endif

    @if(Session::has('error'))
    var type = "{{ Session::get('alert-type', 'error') }}";
    switch (type) {
        case 'error':
            toastr.error("{{ Session::get('error') }}", {
                timeOut: 2000
            });
            break;
    }
    @endif

    @if(Session::has('status'))
    var type = "{{ Session::get('alert-type', 'status') }}";
    switch (type) {
        case 'status':
            toastr.info("{{ Session::get('status') }}", {
                timeOut: 2000
            });
            break;
    }
    @endif

</script>

</body>
</html>
