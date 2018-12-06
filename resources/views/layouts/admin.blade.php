
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Admin Dashboard">
    <meta name="keywords" content="admin,dashboard">
    <meta name="author" content="stacks">
    <!-- The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>@yield('title')</title>

    <link rel="shortcut icon" href="{{ asset('img/logo.png') }}">


    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <link href="/admin/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/admin/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="/admin/plugins/icomoon/style.css" rel="stylesheet">
    <link href="/admin/plugins/uniform/css/default.css" rel="stylesheet"/>
    <link href="/admin/plugins/switchery/switchery.min.css" rel="stylesheet"/>
    <link href="/admin/plugins/nvd3/nv.d3.min.css" rel="stylesheet">

    <!-- Theme Styles -->
    <link href="/admin/css/space.min.css" rel="stylesheet">
    <link href="/admin/css/themes/admin3.css" rel="stylesheet">
    <link href="/admin/css/custom.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<!-- Page Container -->
<div class="page-container">
    <!-- Page Sidebar -->
    <div class="page-sidebar">
        <a class="logo-box" href="{{ route('index') }}">
            <img src="{{ asset('img/logo.png') }}" class="img-responsive"><span>FURNISH</span>
            <i class="icon-radio_button_unchecked" id="fixed-sidebar-toggle-button"></i>
            <i class="icon-close" id="sidebar-toggle-button-close"></i>
        </a>
        <div class="page-sidebar-inner">
            <div class="page-sidebar-menu">
                <ul class="accordion-menu">
                    <li class="active-page">
                        <a href="{{ route('admin.dashboard') }}">
                            <i class="menu-icon icon-home4"></i><span>Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="/inbox">
                            <i class="menu-icon icon-inbox"></i><span>Inbox</span>
                        </a>
                    </li>
                    <li>
                        <a href="/clients">
                            <i class="menu-icon icon-users"></i><span>Clients</span>
                        </a>
                    </li>
                    <li>
                        <a href="/orders">
                            <i class="menu-icon icon-gift"></i><span>Orders</span>
                        </a>
                    </li>
                    <li class="menu-divider"></li>

                    <li>
                        <a href="javascript:void(0)">
                            <i class="menu-icon icon-box-add"></i><span>Products</span><i class="accordion-icon fa fa-angle-left"></i>
                        </a>
                        <ul class="sub-menu">
                            <li><a href="ui-alerts.html">Upload Products</a></li>
                            <li><a href="ui-alerts.html">View All products</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="/shop">
                            <i class="menu-icon icon-cart"></i><span>View Shop</span><span class="label label-danger">shop</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" onclick="event.preventDefault(); document.getElementById('logout').submit();" style="color: firebrick">
                            <i class="menu-icon icon-key"></i><span>Logout</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div><!-- /Page Sidebar -->

    <!-- Page content -->
    <div class="page-content">

        <!-- Page Header -->
        <div class="page-header">
            <div class="search-form">
                <form action="#" method="GET">
                    <div class="input-group">
                        <input type="text" name="search" class="form-control search-input" placeholder="Type something...">
                        <span class="input-group-btn">
                                    <button class="btn btn-default" id="close-search" type="button"><i class="icon-close"></i></button>
                                </span>
                    </div>
                </form>
            </div>
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <div class="logo-sm">
                            <a href="javascript:void(0)" id="sidebar-toggle-button"><i class="fa fa-bars"></i></a>
                            <a class="logo-box" href="index.html"><span>Space</span></a>
                        </div>
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <i class="fa fa-angle-down"></i>
                        </button>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->

                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li><a href="javascript:void(0)" id="collapsed-sidebar-toggle-button"><i class="fa fa-bars"></i></a></li>
                            <li><a href="javascript:void(0)" id="toggle-fullscreen"><i class="fa fa-expand"></i></a></li>
                            <li><a href="javascript:void(0)" id="search-button"><i class="fa fa-search"></i></a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="javascript:void(0)" class="right-sidebar-toggle" data-sidebar-id="main-right-sidebar"><i class="fa fa-envelope"></i></a></li>
                            <li class="dropdown">
                                <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-bell"></i></a>
                                <ul class="dropdown-menu dropdown-lg dropdown-content">
                                    <li class="drop-title">Notifications<a href="#" class="drop-title-link"><i class="fa fa-angle-right"></i></a></li>
                                    <li class="slimscroll dropdown-notifications">
                                        <ul class="list-unstyled dropdown-oc">
                                            <li>
                                                <a href="#"><span class="notification-badge bg-primary"><i class="fa fa-photo"></i></span>
                                                    <span class="notification-info">Finished uploading photos to gallery <b>"South Africa"</b>.
                                                                <small class="notification-date">20:00</small>
                                                            </span></a>
                                            </li>
                                            <li>
                                                <a href="#"><span class="notification-badge bg-primary"><i class="fa fa-at"></i></span>
                                                    <span class="notification-info"><b>John Doe</b> mentioned you in a post "Update v1.5".
                                                                <small class="notification-date">06:07</small>
                                                            </span></a>
                                            </li>
                                            <li>
                                                <a href="#"><span class="notification-badge bg-danger"><i class="fa fa-bolt"></i></span>
                                                    <span class="notification-info">4 new special offers from the apps you follow!
                                                                <small class="notification-date">Yesterday</small>
                                                            </span></a>
                                            </li>
                                            <li>
                                                <a href="#"><span class="notification-badge bg-success"><i class="fa fa-bullhorn"></i></span>
                                                    <span class="notification-info">There is a meeting with <b>Ethan</b> in 15 minutes!
                                                                <small class="notification-date">Yesterday</small>
                                                            </span></a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown user-dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img src="http://via.placeholder.com/36x36" alt="" class="img-circle"></a>
                                <ul class="dropdown-menu">
                                    <li><a href="{{ route('admin.profile') }}">Profile</a></li>
                                    <li><a href="#"><span class="badge pull-right badge-danger">42</span>Messages</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li>
                                        <a href="#" style="color: red"
                                           onclick="event.preventDefault(); document.getElementById('logout').submit(); ">
                                            <i class="ti-lock"></i> Logout
                                            <form id="logout" action="{{ route('admin.logout') }}" method="POST"
                                                  style="display: none">
                                                {{csrf_field()}}
                                            </form>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>
        </div>
        <!-- /Page Header -->

    <!-- Page Content -->
        @yield('content')
    <!-- /Page Content -->


    </div>
    <!-- /Page Content -->


</div>
<!-- /Page Container -->


<!-- Javascripts -->
<script src="/admin/plugins/jquery/jquery-3.1.0.min.js"></script>
<script src="/admin/plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="/admin/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<script src="/admin/plugins/uniform/js/jquery.uniform.standalone.js"></script>
<script src="/admin/plugins/switchery/switchery.min.js"></script>
<script src="/admin/plugins/d3/d3.min.js"></script>
<script src="/admin/plugins/nvd3/nv.d3.min.js"></script>
<script src="/admin/plugins/flot/jquery.flot.min.js"></script>
<script src="/admin/plugins/flot/jquery.flot.time.min.js"></script>
<script src="/admin/plugins/flot/jquery.flot.symbol.min.js"></script>
<script src="/admin/plugins/flot/jquery.flot.resize.min.js"></script>
<script src="/admin/plugins/flot/jquery.flot.tooltip.min.js"></script>
<script src="/admin/plugins/flot/jquery.flot.pie.min.js"></script>
<script src="/admin/plugins/chartjs/chart.min.js"></script>
<script src="/admin/js/space.min.js"></script>
<script src="/admin/js/pages/dashboard.js"></script>
</body>
</html>