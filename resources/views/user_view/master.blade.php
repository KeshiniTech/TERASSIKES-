<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('layouts.head')
@stack('css')

<body class="hold-transition layout-fixed p-0">
    <div class="wrapper">




        @include('user_view.layouts.nav_bar')

        <!-- Content Wrapper. Contains page content -->
        <div class="col-12 p-0">
            @yield('body')
        </div>

        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->
    @include('layouts.scripts')
    @stack('js')

</body>

</html>
