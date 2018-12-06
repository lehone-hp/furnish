@extends('layouts.admin')
@section("title")
    Welcome
@endsection

@section('content')
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
                                    <li><a href="#">Profile</a></li>
                                    <li><a href="#">Calendar</a></li>
                                    <li><a href="#"><span class="badge pull-right badge-danger">42</span>Messages</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#">Account Settings</a></li>
                                    <li><a href="#">Log Out</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>
        </div><!-- /Page Header -->
        <!-- Page Inner -->
        <div class="page-inner">
            <div class="page-title">
                <h3 class="breadcrumb-header">Dashboard</h3>
            </div>
            <div id="main-wrapper">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-white stats-widget">
                            <div class="panel-body">
                                <div class="pull-left">
                                    <span class="stats-number">$781,876</span>
                                    <p class="stats-info">Total Income</p>
                                </div>
                                <div class="pull-right">
                                    <i class="icon-arrow_upward stats-icon"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-white stats-widget">
                            <div class="panel-body">
                                <div class="pull-left">
                                    <span class="stats-number">578,100</span>
                                    <p class="stats-info">Downloads</p>
                                </div>
                                <div class="pull-right">
                                    <i class="icon-arrow_downward stats-icon"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-white stats-widget">
                            <div class="panel-body">
                                <div class="pull-left">
                                    <span class="stats-number">+23,356</span>
                                    <p class="stats-info">New Registrations</p>
                                </div>
                                <div class="pull-right">
                                    <i class="icon-arrow_upward stats-icon"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-white stats-widget">
                            <div class="panel-body">
                                <div class="pull-left">
                                    <span class="stats-number">58%</span>
                                    <p class="stats-info">Finished Tasks</p>
                                </div>
                                <div class="pull-right">
                                    <i class="icon-arrow_upward stats-icon"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- Row -->
                <div class="row">
                    <div class="col-lg-8 col-md-12">
                        <div class="panel panel-white">
                            <div class="panel-heading clearfix">
                                <h4 class="panel-title">Total Revenue</h4>
                            </div>
                            <div class="panel-body">
                                <div id="chart1"><svg></svg></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="panel panel-white">
                            <div class="panel-heading clearfix">
                                <h4 class="panel-title">Server Status</h4>
                            </div>
                            <div class="panel-body">
                                <div class="container-fluid">
                                    <div class="server-load row">
                                        <div class="server-stat col-sm-4">
                                            <p>167GB</p>
                                            <span>Usage</span>
                                        </div>
                                        <div class="server-stat col-sm-4">
                                            <p>320GB</p>
                                            <span>Space</span>
                                        </div>
                                        <div class="server-stat col-sm-4">
                                            <p>57.4%</p>
                                            <span>CPU</span>
                                        </div>
                                    </div>
                                </div>
                                <div id="chart2"><svg></svg></div>
                            </div>
                        </div>
                    </div>
                </div><!-- Row -->
                <div class="row">
                    <div class="col-lg-5 col-md-12">
                        <div class="panel panel-white">
                            <div class="panel-heading clearfix">
                                <h4 class="panel-title">Tasks</h4>
                            </div>
                            <div class="panel-body">
                                <div class="task-list">
                                    <div class="task-item">
                                        <span class="task-name">Download 'Alpha' admin template</span>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">
                                                <span class="sr-only">80% Complete</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="task-item">
                                        <span class="task-name">Create a new landing page</span>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 10%;">
                                                <span class="sr-only">10% Complete</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="task-item">
                                        <span class="task-name">Delete inactive users</span>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 50%;">
                                                <span class="sr-only">80% Complete</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="task-item">
                                        <span class="task-name">Update NVD3 chart plugin<i class="fa fa-check"></i></span>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
                                                <span class="sr-only">100% Complete</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="task-item">
                                        <span class="task-name">Install 4 new layouts<i class="fa fa-check"></i></span>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
                                                <span class="sr-only">100% Complete</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-12">
                        <div class="panel panel-white">
                            <div class="panel-heading clearfix">
                                <h4 class="panel-title">Invoices</h4>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive invoice-table">
                                    <table class="table">
                                        <tbody>
                                        <tr>
                                            <th scope="row">0567</th>
                                            <td>Kenny Highland</td>
                                            <td>Themeforest</td>
                                            <td><span class="label label-success">Finished</span></td>
                                            <td>$427</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">0186</th>
                                            <td>Darrell Price</td>
                                            <td>Twitter</td>
                                            <td><span class="label label-success">Finished</span></td>
                                            <td>$1714</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">0712</th>
                                            <td>Richard Lunsford</td>
                                            <td>Facebook</td>
                                            <td><span class="label label-danger">Denied</span></td>
                                            <td>$685</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">0095</th>
                                            <td>Amy Walker</td>
                                            <td>Youtube</td>
                                            <td><span class="label label-warning">Pending</span></td>
                                            <td>$9900</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">1054</th>
                                            <td>Kathy Olson</td>
                                            <td>Youtube</td>
                                            <td><span class="label label-default">Upcoming</span></td>
                                            <td>$1250</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">0043</th>
                                            <td>Susan Mabry</td>
                                            <td>Instagram</td>
                                            <td><span class="label label-default">Upcoming</span></td>
                                            <td>$399</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- Row -->
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="panel panel-white">
                            <div class="panel-heading clearfix">
                                <h4 class="panel-title">Browsers</h4>
                            </div>
                            <div class="panel-body">
                                <div class="browser-stats">
                                    <ul class="list-unstyled">
                                        <li><i class="fa fa-chrome"></i>Google Chrome<div class="text-success pull-right">32%<i class="fa fa-level-up"></i></div></li>
                                        <li><i class="fa fa-firefox"></i>Firefox<div class="text-success pull-right">25%<i class="fa fa-level-up"></i></div></li>
                                        <li><i class="fa fa-internet-explorer"></i>Internet Explorer<div class="text-success pull-right">16%<i class="fa fa-level-up"></i></div></li>
                                        <li><i class="fa fa-safari"></i>Safari<div class="text-danger pull-right">13%<i class="fa fa-level-down"></i></div></li>
                                        <li><i class="fa fa-opera"></i>Opera<div class="text-danger pull-right">7%<i class="fa fa-level-down"></i></div></li>
                                        <li><i class="fa fa-tablet"></i>Mobile &amp; tablet<div class="text-success pull-right">4%<i class="fa fa-level-up"></i></div></li>
                                        <li><i class="fa fa-hashtag"></i>Others<div class="text-success pull-right">3%<i class="fa fa-level-up"></i></div></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="panel panel-white">
                            <div class="panel-heading clearfix">
                                <h4 class="panel-title">Projects</h4>
                            </div>
                            <div class="panel-body">
                                <div class="project-stats">
                                    <ul class="list-unstyled">
                                        <li>Alpha - Admin Template<span class="label label-default pull-right">85%</span></li>
                                        <li>Meteor - Landing Page<span class="label label-success pull-right">Finished</span></li>
                                        <li>Modern - Corporate Website<span class="label label-success pull-right">Finished</span></li>
                                        <li>Space - Admin Template<span class="label label-danger pull-right">Rejected</span></li>
                                        <li>Backend UI<span class="label label-default pull-right">27%</span></li>
                                        <li>Personal Blog<span class="label label-default pull-right">48%</span></li>
                                        <li>E-mail Templates<span class="label label-default pull-right">Pending</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="panel panel-white">
                            <div class="panel-heading clearfix">
                                <h4 class="panel-title">Income</h4>
                            </div>
                            <div class="panel-body">
                                <canvas id="chart3"></canvas>
                            </div>
                        </div>
                    </div>
                </div><!-- Row -->
            </div><!-- Main Wrapper -->

            <div class="page-footer">
                <p>Made with <i class="fa fa-heart"></i> by Lehone & Rachmann</p>
            </div>

        </div><!-- /Page Inner -->

    </div>

    <!-- End Page content>
@endsection
