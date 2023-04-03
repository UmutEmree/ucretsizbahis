@include('backend.partials.header')
        <!-- /top navigation -->

        <!-- page content -->
       @yield('content')
        <!-- /page content -->

        <!-- footer content -->
@include('backend.partials.footer')
@yield('js')