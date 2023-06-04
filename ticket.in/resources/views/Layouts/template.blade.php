<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Ticket.in</title>

        <link rel="icon" href="{{ asset('assets/logo.jpeg') }}">

        <!-- Google Font: Source Sans Pro -->
        <link
            rel="stylesheet"
            href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback"
        />
        <!-- Material Icons -->
        <link
            href="https://fonts.googleapis.com/icon?family=Material+Icons"
            rel="stylesheet"
        />
        <!-- Ionicons -->
        <link
            rel="stylesheet"
            href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"
        />
        <!-- Font Awesome -->
        <link
            rel="stylesheet"
            href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}"
        />
        <!-- Theme style -->
        <link
            rel="stylesheet"
            href="{{ asset('dist/css/adminlte.min.css') }}"
        />

    </head>
    <body class="hold-transition sidebar-mini">
        <!-- Site wrapper -->
        <div class="wrapper">
            <!-- Navbar -->
            <nav
                class="main-header navbar navbar-expand navbar-white navbar-light"
            >
                <!-- Left navbar links -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a
                            class="nav-link"
                            data-widget="pushmenu"
                            href="#"
                            role="button"
                            ><i class="fas fa-bars"></i
                        ></a>
                    </li>
                </ul>

                <!-- Right navbar links -->
                <ul class="navbar-nav ml-auto">
                    <!-- Navbar Search -->
                    <li class="nav-item">
                        <a
                            class="nav-link"
                            data-widget="navbar-search"
                            href="#"
                            role="button"
                        >
                            <i class="fas fa-search"></i>
                        </a>
                        <div class="navbar-search-block">
                            <form class="form-inline">
                                <div class="input-group input-group-sm">
                                    <input
                                        class="form-control form-control-navbar"
                                        type="search"
                                        placeholder="Search"
                                        aria-label="Search"
                                    />
                                    <div class="input-group-append">
                                        <button
                                            class="btn btn-navbar"
                                            type="submit"
                                        >
                                            <i class="fas fa-search"></i>
                                        </button>
                                        <button
                                            class="btn btn-navbar"
                                            type="button"
                                            data-widget="navbar-search"
                                        >
                                            <i class="fas fa-times"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </li>
                    <!-- /.Navbar Search -->

                    <!-- Navbar Fullscreen -->
                    <li class="nav-item">
                        <a
                            class="nav-link"
                            data-widget="fullscreen"
                            href="#"
                            role="button"
                        >
                            <i class="fas fa-expand-arrows-alt"></i>
                        </a>
                    </li>
                    <!-- /.Navbar Fullscreen -->
                </ul>
            </nav>
            <!-- /.navbar -->

            <!-- Main Sidebar Container -->
            <aside class="main-sidebar sidebar-dark-primary elevation-4">
                <!-- Brand Logo -->
                <a href="{{ route('index') }}" class="brand-link">
                    <img
                        src="{{ asset('assets/logo.jpeg') }}"
                        alt="AdminLTE Logo"
                        class="brand-image img-circle elevation-3"
                        style="opacity: 0.8"
                    />
                    <span class="brand-text font-weight-light">Ticket.in</span>
                </a>

                <!-- Sidebar -->
                <div class="sidebar">
                    <!-- Sidebar user (optional) -->
                    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                        <div class="image">
                            <img
                                src="{{ asset('assets/profile.jpg') }}"
                                class="img-circle elevation-2"
                                alt="User Image"
                            />
                        </div>
                        <div class="info">
                            <a href="#" class="d-block"
                                >RAFID ARTUR PRASETYA
                            </a>
                        </div>
                    </div>

                    <!-- Sidebar Menu -->
                    <nav class="mt-2">
                        <ul
                            class="nav nav-pills nav-sidebar flex-column"
                            data-widget="treeview"
                            role="menu"
                            data-accordion="false"
                        >
                            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                            <li class="nav-item">
                                <a href="{{ route('index') }}" class="nav-link">
                                    <i
                                        class="nav-icon fas fa-tachometer-alt"
                                    ></i>
                                    <p>Dashboard</p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fas fa-table"></i>
                                    <p>
                                        Data Masters
                                        <i class="fas fa-angle-left right"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a
                                            href="{{ route('pegawai') }}"
                                            class="nav-link"
                                        >
                                            <i
                                                class="nav-icon far fa-circle"
                                            ></i>
                                            <p>Data Officers</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('pengguna') }}" class="nav-link">
                                            <i
                                                class="nav-icon far fa-circle"
                                            ></i>
                                            <p>Data Users</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('kapal') }}" class="nav-link">
                                            <i
                                                class="nav-icon far fa-circle"
                                            ></i>
                                            <p>Data Ships</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('kereta') }}" class="nav-link">
                                            <i
                                                class="nav-icon far fa-circle"
                                            ></i>
                                            <p>Data Trains</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('pesawat') }}" class="nav-link">
                                            <i
                                                class="nav-icon far fa-circle"
                                            ></i>
                                            <p>Data Planes</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('kota') }}" class="nav-link">
                                            <i
                                                class="nav-icon far fa-circle"
                                            ></i>
                                            <p>Data Cities</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('jenisjadwal') }}" class="nav-link">
                                            <i
                                                class="nav-icon far fa-circle"
                                            ></i>
                                            <p>Data Schedules</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('jadwal') }}" class="nav-link">
                                    <i class="nav-icon fa fa-hourglass"></i>
                                    <p>Schedules</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i
                                        class="nav-icon fas fa-ticket-alt"
                                    ></i>
                                    <p>
                                        <i class="fas fa-angle-left right"></i>
                                        Tickets
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="{{ route('tiketkapal') }}" class="nav-link">
                                            <i
                                                class="nav-icon far fa-circle"
                                            ></i>
                                            <p>Ticket Ship</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('tiketkereta') }}" class="nav-link">
                                            <i
                                                class="nav-icon far fa-circle"
                                            ></i>
                                            <p>Ticket Train</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="tiketpesawat" class="nav-link">
                                            <i
                                                class="nav-icon far fa-circle"
                                            ></i>
                                            <p>Ticket Plane</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fas fa-edit"></i>
                                    <p>
                                        Orders
                                        <i class="fas fa-angle-left right"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="{{ route('orderkapal') }}" class="nav-link">
                                            <i class="nav-icon fa fa-ship"></i>
                                            <p>Ships</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('orderkereta') }}" class="nav-link">
                                            <i class="nav-icon fa fa-train"></i>
                                            <p>Trains</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('orderpesawat') }}" class="nav-link">
                                            <i class="nav-icon fa fa-plane"></i>
                                            <p>Planes</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fas fa-sign-out-alt"></i>
                                    <p>Log Out</p>
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <!-- /.sidebar-menu -->
                </div>
                <!-- /.sidebar -->
            </aside>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    @yield('content')
                </section>
            </div>

            <!-- Main Footer -->
            <footer class="main-footer">
                <div class="float-right d-none d-sm-block">
                    <b>Version</b> 1.0.0
                </div>
                <strong
                    >Copyright &copy; 2023 <a href="#">Ticket.in</a>.</strong
                >
                All rights reserved.
            </footer>
            <!-- /.main-footer -->
        </div>
        <!-- ./wrapper -->

        <!-- jQuery -->
        <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
        <!-- Bootstrap 4 -->
        <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <!-- AdminLTE App -->
        <script src="{{ asset('dist/js/adminlte.min.js') }}"></script>
    </body>
</html>
