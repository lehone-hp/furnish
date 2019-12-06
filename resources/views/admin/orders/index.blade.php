@extends('layouts.admin')
@section("title", "Clients | Admin")

@section('content')
    <div class="page-inner">
        <div class="page-title">
            <h3 class="breadcrumb-header">Orders</h3>
        </div>
        <div id="main-wrapper">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-white">
                        <div class="panel-heading clearfix">
                            <h4 class="panel-title">Bordered</h4>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Client</th>
                                        <th>Product</th>
                                        <th>Transaction ID</th>
                                        <th>Status</th>
                                        <th>Payment Method</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th scope="row">#1</th>
                                        <td>Mua Rachmann<br><small>muarachmann@gmail.com</small></td>
                                        <td><a href="/products/2" class="text-primary" style="text-decoration: underline">Cane Chair</a></td>
                                        <td><span class="label label-success">Completed</span></td>
                                        <td>87234KDSFAS-S</td>
                                        <td><img src="/img/payment/5.png" class="img-responsive" style="width: 90px"></td>
                                        <td><a href="/admin/orders/1" class="btn btn-primary btn-sm">View <span class="fa fa-eye"></span></a></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">#2</th>
                                        <td>Lehone<br><small>lehone4hope@gmail.com</small></td>
                                        <td><a href="/products/2" class="text-primary" style="text-decoration: underline">Cane Chair</a></td>
                                        <td><span class="label label-warning">Pending</span></td>
                                        <td>87234KDSFAS-S</td>
                                        <td><img src="/img/payment/7.png" class="img-responsive" style="width: 90px"    ></td>
                                        <td><a href="/admin/orders/1" class="btn btn-primary btn-sm">View <span class="fa fa-eye"></span></a></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">#3</th>
                                        <td>Lehone<br><small>lehone4hope@gmail.com</small></td>
                                        <td><a href="/products/2" class="text-primary" style="text-decoration: underline">Cane Chair</a></td>
                                        <td><span class="label label-danger">Cacelled</span></td>
                                        <td>87234KDSFAS-S</td>
                                        <td><img src="/img/payment/8.png" class="img-responsive" style="width: 90px"></td>
                                        <td><a href="/admin/orders/1" class="btn btn-primary btn-sm">View <span class="fa fa-eye"></span></a></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">#4</th>
                                        <td>Lehone<br><small>lehone4hope@gmail.com</small></td>
                                        <td><a href="/products/6" class="text-primary" style="text-decoration: underline">Cane Chair</a></td>
                                        <td><span class="label label-success">Completed</span></td>
                                        <td>87234KDSFAS-S</td>
                                        <td><img src="/img/payment/6.png" class="img-responsive" style="width: 90px"></td>
                                        <td><a href="/admin/orders/1" class="btn btn-primary btn-sm">View <span class="fa fa-eye"></span></a></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- Row -->
        </div><!-- Main Wrapper -->

        <div class="page-footer">
            <p>Made with <i class="fa fa-heart"></i> by Lehone & Rachmann</p>
        </div>
    </div>

@endSection