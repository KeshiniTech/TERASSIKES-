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
            <div class="container-fluid edit-design mt-4">
                <h3>Muokkaa mallia: {design-name}</h3>
                <!-- ./wrapper -->
                <div class="row text-center">
                    <div class="col-3 order-num">
                        <h2>Valitse blocki</h2>
                    </div>
                    <div class="col order-num">
                        <h2>Preview</h2>
                    </div>
                </div>
                <div class="row text-center">
                    <div class="col-3 order-num text-left">
                        <ul class="nav nav-pills nav-sidebar flex-column " data-widget="treeview" role="menu"
                            data-accordion="false">
                            <li class="nav-item mt-2">
                                <p class="text-sub">
                                <div class="row list-item">
                                    <div class="col">{kategory-name}</div>
                                    <div class="col text-right"><i class="text-right fas fa-eye-slash"></i>
                                    </div>
                                </div>
                                </p>
                            </li>
                            <li class="nav-item mt-2">
                                <p class="text-sub">
                                <div class="row list-item">
                                    <div class="col">{kategory-name}</div>
                                    <div class="col text-right"><i class="text-right fas fa-eye-slash"></i>
                                    </div>
                                </div>
                                </p>
                            </li>
                            <li class="nav-item mt-2">
                                <p class="text-sub">
                                <div class="row list-item">
                                    <div class="col">{kategory-name}</div>
                                    <div class="col text-right"><i class="text-right fas fa-eye-slash"></i>
                                    </div>
                                </div>
                                </p>
                            </li>
                            <li class="nav-item mt-2">
                                <p class="text-sub">
                                <div class="row list-item">
                                    <div class="col">QR-koodi-tilaus</div>
                                    <div class="col text-right"><i class="text-right fas fa-eye-slash"></i>
                                    </div>
                                </div>
                                </p>
                            </li>
                            <li class="nav-item mt-2">
                                <p class="text-sub">
                                <div class="row list-item">
                                    <div class="col">Tarjous</div>
                                    <div class="col text-right"><i class="text-right fas fa-eye-slash"></i>
                                    </div>
                                </div>
                                </p>
                            </li>
                            <li class="nav-item mt-2">
                                <p class="text-sub">
                                <div class="row list-item">
                                    <div class="col">Custom text</div>
                                    <div class="col text-right">
                                        {{-- <i class="text-right fas fa-eye-slash"></i> --}}
                                    </div>
                                </div>
                                </p>
                            </li>

                            {{--  --}}

                        </ul>
                        <div class="footer ">

                            <div class="row text-center ">
                                <div class="col text-black-big">
                                    <i class="fas fa-plus"></i>
                                </div>
                                <div class="col text-black">
                                    <i class="fas fa-globe"></i>
                                </div>
                                <div class="col text-black">
                                    <i class="fas fa-download"></i>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-8 ml-2">
                        <div class="row body-design mb-4">
                            @yield('body')
                        </div>
                    </div>
                </div>
                @include('layouts.scripts')
                @stack('js')
            </div>
        </div>
    </div>
</body>

</html>
