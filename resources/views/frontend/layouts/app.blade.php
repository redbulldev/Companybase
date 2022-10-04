<!DOCTYPE html>
<html>

    @include('companybase::frontend.layouts.head')

<body>

    <!-- Links (sit on top) -->
    @include('companybase::frontend.layouts.menu')






    <!-- Content -->
    @yield('main-content')





    <!-- Footer -->
    @include('companybase::frontend.layouts.footer')

</body>

</html>
