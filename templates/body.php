<div class="preloader">
    <div class="loader">
        <div class="loader__figure"></div>
        <p class="loader__label">Elegant admin</p>
    </div>
</div>
<!-- ============================================================== -->
<!-- Main wrapper - style you can find in pages.scss -->
<!-- ============================================================== -->
<div id="main-wrapper">
    <!-- ============================================================== -->
    <!-- Topbar header - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <header class="topbar">
        <nav class="navbar top-navbar navbar-expand-md navbar-dark">
            <!-- ============================================================== -->
            <!-- Logo -->
            <!-- ============================================================== -->
            <div class="navbar-header">
                <a class="navbar-brand" href="index.html">
                    <!-- Logo icon --><b>
                        <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                        <!-- Dark Logo icon -->
                        <img src="<?php echo URL; ?>plantilla/assets/images/logo-icon.png" alt="homepage" class="dark-logo" />
                        <!-- Light Logo icon -->
                        <img src="<?php echo URL; ?>plantilla/assets/images/logo-light-icon.png" alt="homepage" class="light-logo" />
                    </b>
                    <!--End Logo icon -->
                    <!-- Logo text --><span>
                        <!-- dark Logo text -->
                        <img src="<?php echo URL; ?>plantilla/assets/images/logo-text.png" alt="homepage" class="dark-logo" />
                        <!-- Light Logo text -->
                        <img src="<?php echo URL; ?>plantilla/assets/images/logo-light-text.png" class="light-logo" alt="homepage" />
                    </span>
                </a>
            </div>
            <!-- ============================================================== -->
            <!-- End Logo -->
            <!-- ============================================================== -->
            <div class="navbar-collapse">
                <!-- ============================================================== -->
                <!-- toggle and nav items -->
                <!-- ============================================================== -->
                <ul class="navbar-nav mr-auto">
                    <!-- This is  -->
                    <li class="nav-item hidden-sm-up">
                        <a class="nav-link nav-toggler waves-effect waves-light" href="javascript:void(0)">
                            <i class="ti-menu"></i>
                        </a>
                    </li>
                    <!-- ============================================================== -->
                    <!-- Search -->
                    <!-- ============================================================== -->
                    <li class="nav-item search-box">
                        <a class="nav-link waves-effect waves-dark" href="javascript:void(0)">
                            <i class="fa fa-search">
                            </i>
                        </a>
                        <form class="app-search">
                            <input type="text" class="form-control" placeholder="Search &amp; enter"> <a class="srh-btn"><i class="fa fa-times"></i></a>
                        </form>
                    </li>
                </ul>
                <ul class="navbar-nav my-lg-0">
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="<?php echo URL; ?>plantilla/assets/images/users/1.jpg" alt="user" class="img-circle" width="30"></a>
                    </li>
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                </ul>
            </div>
        </nav>
    </header>
    <!-- ============================================================== -->
    <!-- End Topbar header -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <aside class="left-sidebar">
        <div class="d-flex no-block nav-text-box align-items-center">
            <span><img src="<?php echo URL; ?>plantilla/assets/images/logo-icon.png" alt="elegant admin template"></span>
            <a class="waves-effect waves-dark ml-auto hidden-sm-down" href="javascript:void(0)"><i class="ti-menu"></i></a>
            <a class="nav-toggler waves-effect waves-dark ml-auto hidden-sm-up" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
        </div>
        <!-- Sidebar scroll-->
        <div class="scroll-sidebar">
            <!-- Sidebar navigation-->
            <nav class="sidebar-nav">
                <ul id="sidebarnav">
                    <li> <a class="waves-effect waves-dark" href="index.html" aria-expanded="false"><i class="fa fa-tachometer"></i><span class="hide-menu">Dashboard</span></a></li>
                    <li> <a class="waves-effect waves-dark" href="pages-profile.html" aria-expanded="false"><i class="fa fa-user-circle-o"></i><span class="hide-menu">Profile</span></a></li>
                    <li> <a class="waves-effect waves-dark" href="table-basic.html" aria-expanded="false"><i class="fa fa-table"></i><span class="hide-menu"></span>Tables</a></li>
                    <li> <a class="waves-effect waves-dark" href="icon-fontawesome.html" aria-expanded="false"><i class="fa fa-smile-o"></i><span class="hide-menu"></span>Icon</a></li>
                    <li> <a class="waves-effect waves-dark" href="map-google.html" aria-expanded="false"><i class="fa fa-globe"></i><span class="hide-menu"></span>Map</a></li>
                    <li> <a class="waves-effect waves-dark" href="pages-blank.html" aria-expanded="false"><i class="fa fa-bookmark-o"></i><span class="hide-menu"></span>Blank</a></li>
                    <li> <a class="waves-effect waves-dark" href="pages-error-404.html" aria-expanded="false"><i class="fa fa-question-circle"></i><span class="hide-menu"></span>404</a></li>
                    <li> <a class="waves-effect waves-dark" href="<?php echo URL; ?>login/cerrar_sesion" aria-expanded="false"><i class="fa fa-question-circle"></i><span class="hide-menu"></span>Cerrar Sesion</a></li>
                    <div class="text-center m-t-30">
                        <a href="https://wrappixel.com/templates/elegant-admin/" class="btn waves-effect waves-light btn-success hidden-md-down"> Upgrade to Pro</a>
                    </div>
                </ul>
            </nav>
            <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
    </aside>
    <!-- ============================================================== -->
    <!-- End Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Page wrapper  -->
    <!-- ============================================================== -->
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h4 class="text-themecolor">Dashboard</h4>
                </div>
                <div class="col-md-7 align-self-center text-right">
                    <div class="d-flex justify-content-end align-items-center">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>

                    </div>
                </div>
                <div class="container contenido">
                    <div class="row justify-content-center">
                        <div class="col-12 text-center">