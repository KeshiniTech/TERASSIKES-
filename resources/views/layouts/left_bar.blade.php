<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-light-warning elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="dist/img/Logo_1_PNG.png" alt="AdminLTE Logo" style="height:65px;widht:auto;">
        <span class="brand-text font-weight-light">Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar deshboard_bar">
        <!-- Sidebar user panel (optional) -->
        {{-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="dist/img/user2-160x160.jpg" width="30" height="30" class="rounded-circle">

            </div>
            <div class="info">
                <a href="#" class="d-block">Alexander Pierce</a>
            </div>
        </div> --}}

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                {{-- <li class="nav-item menu-open">
                    <a href="#" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="./index.html" class="nav-link active">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Dashboard v1</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="./index2.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Dashboard v2</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="./index3.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Dashboard v3</p>
                            </a>
                        </li>
                    </ul>
                </li> --}}
                <li class="nav-item ">
                    <a href="{{ url('/charts') }}" class="nav-link ">
                        <i class="fa-brands fa-microsoft"></i>
                        <p>
                            Hallintapaneeli
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/chat') }}" class="nav-link">
                        <i class="fa-solid fa-message"></i>
                        <p>
                            Viestit
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/datatable2') }}" class="nav-link">
                        <i class="fa-solid fa-bag-shopping"></i>
                        <p>
                            Tilaukset
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/datatable') }}" class="nav-link">
                        <i class="fa-solid fa-calendar-check"></i>
                        <p>
                            Varaukset
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/kampjet') }}" class="nav-link ">
                        <i class="fa-solid fa-crosshairs"></i>
                        <p>
                            Kampanjat
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/product') }}" class="nav-link">
                        <i class="fa-solid fa-bars"></i>
                        <p>
                            Menu & tuotteet
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/staff') }}" class="nav-link">
                        <i class="fa-solid fa-user-group"></i>
                        <p>
                            Työntekijät
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/edit_design_file') }}" class="nav-link ">
                        <i class="fa-solid fa-file-pen"></i>
                        <p>
                            Muokkaa terassisivua
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/vierailijat') }}" class="nav-link">
                        <i class="fa-solid fa-clipboard-list"></i>
                        <p>
                            Analytiikka
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ url('/earn') }}" class="nav-link ">
                        <i class="fa-solid fa-money-bill"></i>
                        <p>
                            Ansainta
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/tablemap') }}" class="nav-link ">
                        <i class="fa-solid fa-map"></i>
                        <p>
                            Salikartta
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/setting') }}" class="nav-link" attr="setting-menu">
                        <i class="fa-solid fa-gear"></i>
                        <p>
                            Asetukset
                        </p>
                    </a>
                </li>
                <br>
                <br>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>