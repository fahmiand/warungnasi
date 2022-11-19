<?php

session_start();
require '../function.php';

if (!$_SESSION['status'] > 0) {
    header("Location: ../index.php");
}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Sleek Dashboard - Free Bootstrap 4 Admin Dashboard Template and UI Kit. It is very powerful bootstrap admin dashboard, which allows you to build products like admin panels, content management systems and CRMs etc.">

    <title>Halaman Admin</title>

    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500|Poppins:400,500,600,700|Roboto:400,500" rel="stylesheet" />

    <link href="https://cdn.materialdesignicons.com/4.4.95/css/materialdesignicons.min.css" rel="stylesheet" />

    <!-- PLUGINS CSS STYLE -->
    <link href="assets/plugins/simplebar/simplebar.css" rel="stylesheet" />
    <link href="assets/plugins/nprogress/nprogress.css" rel="stylesheet" />

    <!-- No Extra plugin used -->
    <link href='assets/plugins/jvectormap/jquery-jvectormap-2.0.3.css' rel='stylesheet'>
    <link href='assets/plugins/daterangepicker/daterangepicker.css' rel='stylesheet'>


    <link href='assets/plugins/toastr/toastr.min.css' rel='stylesheet'>







    <!-- SLEEK CSS -->
    <link id="sleek-css" rel="stylesheet" href="assets/css/sleek.css" />

    <!-- FAVICON -->
    <link href="assets/img/favicon.png" rel="shortcut icon" />

    <!--
      HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries
    -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="assets/plugins/nprogress/nprogress.js"></script>
</head>

<body class="header-fixed sidebar-fixed sidebar-dark header-light" id="body">
    <script>
        NProgress.configure({
            showSpinner: false
        });
        NProgress.start();
    </script>

    <div id="toaster"></div>

    <!-- ====================================
    ——— WRAPPER
    ===================================== -->
    <div class="wrapper">

        <!-- Github Link -->
        <a href="https://github.com/tafcoder/sleek-dashboard" target="_blank" class="github-link">
            <svg width="70" height="70" viewBox="0 0 250 250" aria-hidden="true">
                <defs>
                    <linearGradient id="grad1" x1="0%" y1="75%" x2="100%" y2="0%">
                        <stop offset="0%" style="stop-color:#896def;stop-opacity:1" />
                        <stop offset="100%" style="stop-color:#482271;stop-opacity:1" />
                    </linearGradient>
                </defs>
                <path d="M 0,0 L115,115 L115,115 L142,142 L250,250 L250,0 Z" fill="url(#grad1)"></path>
            </svg>
            <i class="mdi mdi-github-circle"></i>
        </a>




        <!-- ====================================
          ——— LEFT SIDEBAR WITH OUT FOOTER
        ===================================== -->
        <aside class="left-sidebar bg-sidebar">
            <div id="sidebar" class="sidebar sidebar-with-footer">
                <!-- Aplication Brand -->
                <div class="app-brand">
                    <a href="/index.html" title="Sleek Dashboard">
                        <svg class="brand-icon" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid" width="30" height="33" viewBox="0 0 30 33">
                            <g fill="none" fill-rule="evenodd">
                                <path class="logo-fill-blue" fill="#7DBCFF" d="M0 4v25l8 4V0zM22 4v25l8 4V0z" />
                                <path class="logo-fill-white" fill="#FFF" d="M11 4v25l8 4V0z" />
                            </g>
                        </svg>
                    </a>
                </div>

                <!-- begin sidebar scrollbar -->
                <div class="" data-simplebar style="height: 100%;">
                    <!-- sidebar menu -->
                    <ul class="nav sidebar-inner" id="sidebar-menu">
                        <li class="has-sub expand">
                            <a class="sidenav-item-link" href="admin" data-toggle="collapse" data-target="#dashboard" aria-expanded="false" aria-controls="dashboard">
                                <i class="mdi mdi-view-dashboard-outline"></i>
                                <span class="nav-text">Dashboard</span> <b class="caret"></b>
                            </a>
                            <ul class="collapse show" id="dashboard" data-parent="#sidebar-menu">
                                <div class="sub-menu">
                                    <li class="">
                                        <a class="sidenav-item-link" href="pelanggan.php">
                                            <span class="nav-text">Pelanggan</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a class="sidenav-item-link" href="karyawan.php">
                                            <span class="nav-text">Staf Karyawan</span>
                                        </a>
                                    </li>
                                </div>
                            </ul>
                        </li>
                        <li class="has-sub ">
                            <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#app" aria-expanded="false" aria-controls="app">
                                <i class="mdi mdi-pencil-box-multiple"></i>
                                <span class="nav-text">App</span> <b class="caret"></b>
                            </a>
                            <ul class="collapse " id="app" data-parent="#sidebar-menu">
                                <div class="sub-menu">
                                    <li class="">
                                        <a class="sidenav-item-link" href="barang.php">
                                            <span class="nav-text">Barang</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a class="sidenav-item-link" href="katagori.php">
                                            <span class="nav-text">Katagori</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a class="sidenav-item-link" href="pesanan.php">
                                            <span class="nav-text">Pesanan</span>
                                        </a>
                                    </li>
                                </div>
                            </ul>
                        </li>

                    </ul>
                </div>
            </div>
        </aside>


        <!-- ====================================
        ——— PAGE WRAPPER
        ===================================== -->
        <div class="page-wrapper">

            <!-- Header -->
            <header class="main-header " id="header">
                <nav class="navbar navbar-static-top navbar-expand-lg">
                    <!-- Sidebar toggle button -->
                    <button id="sidebar-toggler" class="sidebar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                    </button>
                    <!-- search form -->
                    <div class="search-form d-none d-lg-inline-block">
                        <div class="input-group">
                            <button type="button" name="search" id="search-btn" class="btn btn-flat">
                                <i class="mdi mdi-magnify"></i>
                            </button>
                            <input type="text" name="query" id="search-input" class="form-control" placeholder="'button', 'chart' etc." autofocus autocomplete="off" />
                        </div>
                        <div id="search-results-container">
                            <ul id="search-results"></ul>
                        </div>
                    </div>

                    <div class="navbar-right ">
                        <ul class="nav navbar-nav">
                            <!-- User Account -->
                            <li class="dropdown user-menu">
                                <button href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                                    <img src="assets/img/user/user.png" class="user-image" alt="User Image" />
                                    <span class="d-none d-lg-inline-block"><?= $_SESSION['nama'] ?></span>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <!-- User image -->
                                    <li class="dropdown-header">
                                        <img src="assets/img/user/user.png" class="img-circle" alt="User Image" />
                                        <div class="d-inline-block">
                                            <?= $_SESSION['nama'] ?> <small class="pt-1">iamabdus@gmail.com</small>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="profil.php">
                                            <i class="mdi mdi-account"></i> My Profile
                                        </a>
                                    </li>
                                    <li>
                                        <a href="../index.php">
                                            <i class="mdi mdi-account"></i> halaman
                                        </a>
                                    </li>
                                    <li class="right-sidebar-in">
                                        <a href="seting.php"> <i class="mdi mdi-settings"></i> Setting </a>
                                    </li>
                                    <li class="dropdown-footer">
                                        <a href="../logout.php"> <i class="mdi mdi-logout"></i> Log Out </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>

            <h1 style="color:black;">Selamat Datang, <?= $_SESSION['nama'] ?></h1>


            <!-- Footer -->
            <footer class="footer mt-auto">
                <div class="copyright bg-white">
                    <p>
                        Copyright &copy; <span id="copy-year"></span> a template by <a class="text-primary" href="https://themefisher.com" target="_blank">Themefisher</a>.
                    </p>
                </div>
                <script>
                    var d = new Date();
                    var year = d.getFullYear();
                    document.getElementById("copy-year").innerHTML = year;
                </script>
            </footer>

        </div> <!-- End Page Wrapper -->
    </div> <!-- End Wrapper -->


    <!-- <script type="module">
      import 'https://cdn.jsdelivr.net/npm/@pwabuilder/pwaupdate';

      const el = document.createElement('pwa-update');
      document.body.appendChild(el);
    </script> -->

    <!-- Javascript -->
    <script src="assets/plugins/jquery/jquery.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/plugins/simplebar/simplebar.min.js"></script>

    <script src='assets/plugins/charts/Chart.min.js'></script>
    <script src='assets/js/chart.js'></script>




    <script src='assets/plugins/jvectormap/jquery-jvectormap-2.0.3.min.js'></script>
    <script src='assets/plugins/jvectormap/jquery-jvectormap-world-mill.js'></script>
    <script src='assets/js/vector-map.js'></script>

    <script src='assets/plugins/daterangepicker/moment.min.js'></script>
    <script src='assets/plugins/daterangepicker/daterangepicker.js'></script>
    <script src='assets/js/date-range.js'></script>








    <script src='assets/plugins/toastr/toastr.min.js'></script>












    <script src="assets/js/sleek.js"></script>
    <link href="assets/options/optionswitch.css" rel="stylesheet">
    <script src="assets/options/optionswitcher.js"></script>
</body>

</html>