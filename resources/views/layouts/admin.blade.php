
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
        <a class="logo-box" href="index.html">
            <span>Space</span>
            <i class="icon-radio_button_unchecked" id="fixed-sidebar-toggle-button"></i>
            <i class="icon-close" id="sidebar-toggle-button-close"></i>
        </a>
        <div class="page-sidebar-inner">
            <div class="page-sidebar-menu">
                <ul class="accordion-menu">
                    <li class="active-page">
                        <a href="index.html">
                            <i class="menu-icon icon-home4"></i><span>Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="email.html">
                            <i class="menu-icon icon-inbox"></i><span>Email</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <i class="menu-icon icon-flash_on"></i><span>UI Kits</span><i class="accordion-icon fa fa-angle-left"></i>
                        </a>
                        <ul class="sub-menu">
                            <li><a href="ui-alerts.html">Alerts</a></li>
                            <li><a href="ui-buttons.html">Buttons</a></li>
                            <li><a href="ui-icons.html">Icons</a></li>
                            <li><a href="ui-typography.html">Typography</a></li>
                            <li><a href="ui-notifications.html">Notifications</a></li>
                            <li><a href="ui-modals.html">Modals</a></li>
                            <li><a href="ui-progress.html">Progress Bars</a></li>
                            <li><a href="ui-tabs-accordions.html">Tabs &amp; Accordions</a></li>
                            <li><a href="ui-tree-view.html">Tree View</a></li>
                            <li><a href="ui-nestable.html">Nestable</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <i class="menu-icon icon-layers"></i><span>Layouts</span><i class="accordion-icon fa fa-angle-left"></i>
                        </a>
                        <ul class="sub-menu">
                            <li><a href="layout-blank.html">Blank Page</a></li>
                            <li><a href="layout-boxed.html">Boxed Layout</a></li>
                            <li><a href="layout-collapsed-sidebar.html">Collapsed Sidebar</a></li>
                            <li><a href="layout-fixed-header.html">Fixed Header</a></li>
                            <li><a href="layout-fixed-sidebar.html">Fixed Sidebar</a></li>
                            <li><a href="layout-fixed-sidebar-header.html">Fixed Sidebar &amp; Header</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <i class="menu-icon icon-code"></i><span>Forms</span><i class="accordion-icon fa fa-angle-left"></i>
                        </a>
                        <ul class="sub-menu">
                            <li><a href="form-elements.html">Elements</a></li>
                            <li><a href="form-wizard.html">Form Wizard</a></li>
                            <li><a href="form-file-upload.html">File Upload</a></li>
                            <li><a href="form-image-crop.html">Image Crop</a></li>
                            <li><a href="form-image-zoom.html">Image Zoom</a></li>
                            <li><a href="form-x-editable.html">X-editable</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <i class="menu-icon icon-format_list_bulleted"></i><span>Tables</span><i class="accordion-icon fa fa-angle-left"></i>
                        </a>
                        <ul class="sub-menu">
                            <li><a href="table-static.html">Static</a></li>
                            <li><a href="table-responsive.html">Responsive</a></li>
                            <li><a href="table-data.html">Data Tables</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="charts.html">
                            <i class="menu-icon icon-show_chart"></i><span>Charts</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <i class="menu-icon icon-my_location"></i><span>Maps</span><i class="accordion-icon fa fa-angle-left"></i>
                        </a>
                        <ul class="sub-menu">
                            <li><a href="maps-google.html">Google</a></li>
                            <li><a href="maps-vector.html">Vector</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <i class="menu-icon icon-star"></i><span>Extra</span><i class="accordion-icon fa fa-angle-left"></i>
                        </a>
                        <ul class="sub-menu">
                            <li><a href="invoice.html">Invoice</a></li>
                            <li><a href="404.html">404 Page</a></li>
                            <li><a href="500.html">500 Page</a></li>
                            <li><a href="profile.html">Profile</a></li>
                            <li><a href="login.html">Login</a></li>
                            <li><a href="register.html">Register</a></li>
                            <li><a href="lockscreen.html">Lockscreen</a></li>
                            <li><a href="todo.html">Todo</a></li>
                            <li><a href="gallery.html">Gallery</a></li>
                            <li><a href="pricing-tables.html">Pricing Tables</a></li>
                            <li><a href="timeline.html">Timeline</a></li>
                        </ul>
                    </li>
                    <li class="menu-divider"></li>
                    <li>
                        <a href="index.html">
                            <i class="menu-icon icon-help_outline"></i><span>Documentation</span>
                        </a>
                    </li>
                    <li>
                        <a href="index.html">
                            <i class="menu-icon icon-public"></i><span>Changelog</span><span class="label label-danger">1.0</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div><!-- /Page Sidebar -->

    <!-- Page Content -->
        @yield('content')
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