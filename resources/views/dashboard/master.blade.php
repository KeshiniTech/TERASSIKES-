<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('layouts.head')
@stack('css')

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">




        @include('layouts.nav_bar')
        @include('layouts.left_bar')


        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
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
