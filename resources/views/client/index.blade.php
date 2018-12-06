@extends('layouts.client')
@section("title")
    Welcome
@endsection

@section('content')
    <!-- Page content -->
    <div class="row">
        <div class="col-md-12">
            <div class="overview-wrap">
                <h2 class="title-1">overview</h2>
            </div>
            <hr>
        </div>
    </div>
    <div class="row m-t-25">
        <div class="col-sm-6 col-lg-3">
            <div class="overview-item overview-item--c1 pb-3">
                <div class="overview__inner">
                    <div class="overview-box clearfix">
                        <div class="icon">
                            <i class="zmdi zmdi-calendar-note"></i>
                        </div>
                        <div class="text">
                            <h2>15</h2>
                            <span>order list items</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="overview-item overview-item--c2 pb-3">
                <div class="overview__inner">
                    <div class="overview-box clearfix">
                        <div class="icon">
                            <i class="zmdi zmdi-shopping-cart"></i>
                        </div>
                        <div class="text">
                            <h2>0</h2>
                            <span>shopping cart</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="overview-item overview-item--c3 pb-3">
                <div class="overview__inner">
                    <div class="overview-box clearfix">
                        <div class="icon">
                            <i class="zmdi zmdi-label-heart"></i>
                        </div>
                        <div class="text">
                            <h2>49</h2>
                            <span>wishlist items</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <h2 class="title-1 m-b-25">Order History</h2>
            <div class="table-responsive m-b-40">
                <div class="table-responsive m-b-40">
                    <table id="order-list-table"
                           class="table table-borderless table-data3">
                        <thead>
                        <tr>
                            <th>SNo</th>
                            <th>Order ID</th>
                            <th>Payment Mode</th>
                            <th>Total Amount</th>
                            <th>Order Date</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td>ORD-12345</td>
                            <td>Credit Card</td>
                            <td>$500</td>
                            <td>2018-09-29 05:57</td>
                            <td>
                                <a href="{{ route('client.order-detail', ['order_id' => 'ORD-12345']) }}" class="btn btn-sm btn-primary"><i class="fas fa-eye"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>ORD-12345</td>
                            <td>Credit Card</td>
                            <td>$500</td>
                            <td>2018-09-29 05:57</td>
                            <td>
                                <a href="{{ route('client.order-detail', ['order_id' => 'ORD-12345']) }}" class="btn btn-sm btn-primary"><i class="fas fa-eye"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>ORD-12345</td>
                            <td>Credit Card</td>
                            <td>$500</td>
                            <td>2018-09-29 05:57</td>
                            <td>
                                <a href="{{ route('client.order-detail', ['order_id' => 'ORD-12345']) }}" class="btn btn-sm btn-primary"><i class="fas fa-eye"></i></a>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
