@extends('layouts.client')
@section("title")
    Order History
@endsection

@section('content')
    <!-- Page content -->
    <div class="row">
        <div class="col-md-12">
            <div class="overview-wrap">
                <h2 class="title-1">Order History List</h2>
            </div>
            <hr>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <!-- DATA TABLE-->
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
            <!-- END DATA TABLE-->
        </div>
    </div>
@endsection
