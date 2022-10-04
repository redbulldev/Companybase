<!DOCTYPE html>
<html lang="en">

@include('companybase::admin.layouts.head')

<body class="hold-transition sidebar-mini">

  <!-- Page Wrapper -->
    <div class="wrapper">

        <!-- Topbar -->
        @include('companybase::admin.layouts.header')
        <!-- End of Topbar -->
            
        <!-- Sidebar -->
        @include('companybase::admin.layouts.sidebar')
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div class="content-wrapper">

            <!-- Main Content -->
            <div class="content">

                <!-- Begin Page Content -->
                @yield('main-content')
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

        </div>

        @include('companybase::admin.layouts.footer')
    </div>

</body>

</html>
