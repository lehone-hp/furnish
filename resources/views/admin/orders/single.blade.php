@extends('layouts.admin')
@section("title", "0rders | Admin")

@section('content')
    <div class="page-inner">
        <div class="page-title">
            <h3 class="breadcrumb-header">Order - RTSI8923-X1 <span class="label label-success">Completed</span></h3>
        </div>
        <div id="main-wrapper">
            <div class="row">
                <div class="col-md-4">
                    <div class="panel panel-white">
                        <h5>Client Details</h5>
                        <div class="panel-body user-profile-panel">
                            <div class="user-verify">
                                <img src="http://via.placeholder.com/100x100" class="user-profile-image img-circle" alt="">
                                <img src="/img/unverified.png"  class="img-circle verify-status" style="width: 35px;height: 35px;">
                            </div>
                            <h4 class="text-center m-t-lg">Mua Rachmann</h4>
                            <p class="text-center">muarachmann@gmail.com</p>
                            <hr>
                            <ul class="list-unstyled text-left">
                                <li><p><i class="fa fa-map-marker m-r-xs"></i>Molyko, Buea, Cameroon</p></li>
                                <li><p><i class="fa fa-phone m-r-xs"></i>670518086</p></li>
                                <li><p><i class="fa fa-clock-o m-r-xs"></i>2018-09-29</li>
                            </ul>
                            <hr>
                            <a href="/admin/clients/1" class="btn btn-default btn-block">View Profile</a>
                            <hr>
                            <div class="col-md-12 text-right">
                                <h4>Address</h4>
                                <address>
                                    <strong>Twitter, Inc.</strong><br>
                                    795 Folsom Ave, Suite 600<br>
                                    San Francisco, CA 94107<br>
                                    <abbr title="Phone">P:</abbr> (123) 456-7890
                                </address>
                                <address>
                                    <strong>Full Name</strong><br>
                                    <a href="mailto:#">first.last@example.com</a>
                                </address>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-8">

                    <div class="panel panel-white">
                        <div class="panel-heading clearfix">
                            <h3 class="panel-title">Order Details</h3>
                            <a href="#" class="pull-right"><h4 class="text-success" style="text-decoration: underline;">Product Name</h4></a>
                        </div>
                        <div class="panel-body">
                            <div class="col-md-6">
                                <div class="text-center center-block" style="width: 250px">
                                    <img src="/img/product/4.jpg" class="img-responsive">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum eros tortor,inibus et. Quisque vehicula lobortis commodo. Integer at eleifend lacus, nec consequat urna.
                                    Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
                                </p>
                                <h5><strong>Product Details</strong></h5>
                                <ul>
                                    <li>Fine</li>
                                    <li>Fine</li>
                                    <li>Fine</li>
                                    <li>Fine</li>
                                </ul>
                            </div>
                            <p class="clearfix"></p>
                            <h4 class="text-primary">Special Notes</h4>
                            <div style="border: 1px solid silver;padding: 10px;">
                                <p>
                                    I want it in delivered and handle with care. BALDASLDNASLDASKDNASKD
                                </p>
                            </div>
                            <p class="clearfix"></p>
                            <div class="col-md-12">
                                <h5><strong>QTY: </strong>3</h5>
                                <h5><strong>Unit Price: </strong>50000 FCFA</h5>
                                <h5><strong>Subtotal: </strong>150000 FCFA</h5>
                                <hr>
                                <h5><strong>Delivery Fees: </strong>30000 FCFA</h5>
                                <h4><strong>Total: </strong><span class="text-success">180000 FCFA</span></h4>
                            </div>
                            <p class="clearfix"></p>
                            <div class="panel panel-white">
                                <div class="panel-body text-center">
                                    <button type="button" class="btn btn-danger btn-addon"><i class="fa fa-trash-o"></i> Cancel Order</button>
                                    <button type="button" class="btn btn-success btn-addon"><i class="fa fa-check"></i> Process Order</button>
                                    <button type="button" class="btn btn-default btn-addon"><i class="fa fa-send-o"></i> Send Invoice</button>
                                </div>
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