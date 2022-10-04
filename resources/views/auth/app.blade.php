<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Company</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('admin/assets/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="{{ asset('admin/assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('admin/assets/dist/css/adminlte.min.css') }}">
</head>


@yield('content')


<!-- jQuery -->
<script src="{{ asset('admin/assets/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('admin/assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('admin/assets/dist/js/adminlte.min.js') }}"></script>


<script type="text/javascript" src="{{ asset('admin/assets/plugins/toastr/toastr.min.js') }}"></script>
<link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/plugins/toastr/toastr.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/plugins/toastr/toastr.css') }}">

<script type="text/javascript">
    @if (Session::has('success'))
        var type = "{{ Session::get('alert-type', 'success') }}";
        switch (type) {
            case 'success':
                toastr.success("{{ Session::get('success') }}", {
                    timeOut: 2000
                });
                break;
        }
    @endif

    @if (Session::has('message'))
        var type = "{{ Session::get('alert-type', 'message') }}";
        switch (type) {
            case 'message':
                toastr.info("{{ Session::get('message') }}", {
                    timeOut: 2000
                });
                break;
        }
    @endif

    @if (Session::has('error'))
        var type = "{{ Session::get('alert-type', 'error') }}";
        switch (type) {
            case 'error':
                toastr.error("{{ Session::get('error') }}", {
                    timeOut: 2000
                });
                break;
        }
    @endif

    @if (Session::has('status'))
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
