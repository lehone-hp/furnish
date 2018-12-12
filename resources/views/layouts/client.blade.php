<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/favicon.ico') }}">

    <!-- Title Page-->
    <title>Client Dashboard - @yield('title')</title>

    <!-- Fontfaces CSS-->
    <link href="{{ asset('client/css/font-face.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('client/vendor/font-awesome-4.7/css/font-awesome.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('client/vendor/font-awesome-5/css/fontawesome-all.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('client/vendor/mdi-font/css/material-design-iconic-font.min.css') }}" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="{{ asset('client/vendor/bootstrap-4.1/bootstrap.min.css') }}" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="{{ asset('client/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('client/vendor/wow/animate.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('client/vendor/css-hamburgers/hamburgers.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('client/vendor/slick/slick.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('client/vendor/select2/select2.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('client/vendor/perfect-scrollbar/perfect-scrollbar.css') }}" rel="stylesheet" media="all">

    <!-- Datatables-->
    <link href="{{asset("DataTables/datatables.min.css")}}" rel="stylesheet">

    <!-- Main CSS-->
    <link href="{{ asset('client/css/theme.css') }}" rel="stylesheet" media="all">

</head>

<body>
<div class="page-wrapper">
    <!-- HEADER MOBILE-->
    <header class="header-mobile d-block d-lg-none">
        <div class="header-mobile__bar">
            <div class="container-fluid">
                <div class="header-mobile-inner">
                    <a class="logo" href="{{ route('index') }}">
                        <img src="{{ asset('img/logo.png') }}" alt="Furnish" />
                    </a>
                    <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                    </button>
                </div>
            </div>
        </div>
        <nav class="navbar-mobile">
            <div class="container-fluid">
                <ul class="navbar-mobile__list list-unstyled">
                    <li class="active">
                        <a class="js-arrow" href="{{ route('client.dashboard') }}">
                            <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                    </li>
                    <li>
                        <a href="{{ route('client.profile') }}">
                            <i class="fas fa-user"></i>User Profile</a>
                    </li>
                    <li>
                        <a href="{{ route('client.orders') }}">
                            <i class="fas fa-shopping-cart"></i>Order List</a>
                    </li>
                    <li>
                        <a href="{{ route('client.wishlist') }}">
                            <i class="fas fa-heart"></i>Wishlist</a>
                    </li>
                    <li>
                        <a href="{{ route('client.password') }}">
                            <i class="fas fa-key"></i>Change Password</a>
                    </li>
                    <li>
                        <a href="{{ route('shop') }}">
                            <i class="fas fa-shopping-basket"></i>Shop</a>
                    </li>
                    <li>
                        <a href="{{ route("client.logout") }}">
                            <i class="fas fa-power-off"></i>Logout</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- END HEADER MOBILE-->

    <!-- MENU SIDEBAR-->
    <aside class="menu-sidebar d-none d-lg-block">
        <div class="logo">
            <a href="{{ route('index') }}">
                <img src="{{ asset('img/logo.png') }}" alt="Cool Admin" />
            </a>
        </div>
        <div class="menu-sidebar__content js-scrollbar1">
            <nav class="navbar-sidebar">
                <ul class="list-unstyled navbar__list">
                    <li class="{{ Request::is('client/dashboard') ? "active":"" }}">
                        <a href="{{ route('client.dashboard') }}">
                            <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                    </li>
                    <li  class="{{ Request::is('client/profile*') ? "active":"" }}">
                        <a href="{{ route('client.profile') }}">
                            <i class="fas fa-user"></i>User Profile</a>
                    </li>
                    <li class="{{ Request::is('client/orders*') ? "active":"" }}">
                        <a href="{{ route('client.orders') }}">
                            <i class="fas fa-shopping-cart"></i>Order List</a>
                    </li>
                    <li class="{{ Request::is('client/wishlist*') ? "active":"" }}">
                        <a href="{{ route('client.wishlist') }}">
                            <i class="fas fa-heart"></i>Wishlist</a>
                    </li>
                    <li class="{{ Request::is('client/password') ? "active":"" }}">
                        <a href="{{ route('client.password') }}">
                            <i class="fas fa-key"></i>Change Password</a>
                    </li>
                    <li>
                        <a href="{{ route('shop') }}">
                            <i class="fas fa-shopping-basket"></i>Shop</a>
                    </li>
                    <li>
                        <a href="{{ route("client.logout") }}">
                            <i class="fas fa-power-off"></i>Logout</a>
                    </li>
                </ul>
            </nav>
        </div>
    </aside>
    <!-- END MENU SIDEBAR-->

    <!-- PAGE CONTAINER-->
    <div class="page-container">
        <!-- HEADER DESKTOP-->
        <header class="header-desktop">
            <div class="section__content section__content--p30">
                <div class="container-fluid">
                    <div class="header-wrap">
                        <form class="form-header" action="#" method="POST">
                            <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..." />
                            <button class="au-btn--submit" type="submit">
                                <i class="zmdi zmdi-search"></i>
                            </button>
                        </form>
                        <div class="header-button">
                            <div class="account-wrap">
                                <div class="account-item clearfix js-item-menu">
                                    <div class="image">
                                        <img src="{{ asset('client/images/icon/avatar-01.jpg') }}" alt="{{ Auth::user()->fullName() }}" />
                                    </div>
                                    <div class="content">
                                        <a class="js-acc-btn" href="#">{{ Auth::user()->fullName() }}</a>
                                    </div>
                                    <div class="account-dropdown js-dropdown">
                                        <div class="info clearfix">
                                            <div class="image">
                                                <a href="#">
                                                    <img src="{{ asset('client/images/icon/avatar-01.jpg') }}" alt="{{ Auth::user()->fullName() }}" />
                                                </a>
                                            </div>
                                            <div class="content">
                                                <h5 class="name">
                                                    <a href="{{ route('client.profile') }}">{{ Auth::user()->fullName() }}</a>
                                                </h5>
                                                <span class="email">{{ Auth::user()->email }}</span>
                                            </div>
                                        </div>
                                        <div class="account-dropdown__body">
                                            <div class="account-dropdown__item">
                                                <a href="{{ route('client.profile') }}">
                                                    <i class="zmdi zmdi-account"></i>Edit Profile</a>
                                            </div>
                                        </div>
                                        <div class="account-dropdown__footer">
                                            <a href="{{ route("client.logout") }}">
                                                <i class="zmdi zmdi-power"></i>Logout</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- HEADER DESKTOP-->

        <!-- MAIN CONTENT-->
        <div class="main-content">
            <div class="section__content section__content--p30">
                <div class="container-fluid">
                    @if (session('error'))
                        <div class="alert alert-danger alert-dismissible fade in">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            {{ session('error') }}
                        </div>
                    @endif
                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade in">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            {{ session('success') }}
                        </div>
                    @endif
                    @yield('content')
                </div>
            </div>
        </div>
        <!-- END MAIN CONTENT-->

        <!-- FOOTER -->
        <div class="row">
            <div class="col-md-12">
                <div class="copyright">
                    <p>Copyright © 2018 Furnish. All rights reserved. Template by <a href="https://colorlib.com" target="_blank">Colorlib</a>.</p>
                </div>
            </div>
        </div>
        <!-- END FOOTER -->
        <!-- END PAGE CONTAINER-->
    </div>

</div>

<!-- Jquery JS-->
<script src="{{ asset('client/vendor/jquery-3.2.1.min.js') }}"></script>
<!-- Bootstrap JS-->
<script src="{{ asset('client/vendor/bootstrap-4.1/popper.min.js') }}"></script>
<script src="{{ asset('client/vendor/bootstrap-4.1/bootstrap.min.js') }}"></script>
<!-- Data table-->
<script src="{{ asset("DataTables/datatables.js") }}"></script>
<!-- Vendor JS       -->
<script src="{{ asset('client/vendor/slick/slick.min.js') }}">
</script>
<script src="{{ asset('client/vendor/wow/wow.min.js') }}"></script>
<script src="{{ asset('client/vendor/animsition/animsition.min.js') }}"></script>
<script src="{{ asset('client/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js') }}">
</script>
<script src="{{ asset('client/vendor/counter-up/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('client/vendor/counter-up/jquery.counterup.min.js') }}">
</script>
<script src="{{ asset('client/vendor/circle-progress/circle-progress.min.js') }}"></script>
<script src="{{ asset('client/vendor/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
<script src="{{ asset('client/vendor/chartjs/Chart.bundle.min.js') }}"></script>
<script src="{{ asset('client/vendor/select2/select2.min.js') }}">
</script>

<!-- Main JS-->
<script src="{{ asset('client/js/main.js') }}"></script>
<script>
    // automatically close alerts
    $(".alert").fadeTo(4000, 500).slideUp(500, function(){
        $(".alert").slideUp(500);
    });
</script>
</body>

</html>
<!-- end document-->
