@extends('layouts.admin')
@section("title", "Welcome Admin")

@section('content')

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
                                    <span class="stats-number">57</span>
                                    <p class="stats-info">Users</p>
                                </div>
                                <div class="pull-right">
                                    <i class="icon-users stats-icon text-warning"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-white stats-widget">
                            <div class="panel-body">
                                <div class="pull-left">
                                    <span class="stats-number">213</span>
                                    <p class="stats-info">Products</p>
                                </div>
                                <div class="pull-right">
                                    <i class="icon-box-add stats-icon text-success"></i>
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
            </div><!-- Main Wrapper -->

            <div class="page-footer">
                <p>Made with <i class="fa fa-heart"></i> by Lehone & Rachmann</p>
            </div>

        </div>
        <!-- /Page Inner -->

@endsection
