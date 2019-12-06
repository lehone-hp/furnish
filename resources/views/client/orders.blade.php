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
                        <th>Payment</th>
                        <th>Order Date</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($orders as $order)
                        <tr>
                            <td>{{ $loop->index + 1 }}</td>
                            <td>{{ $order->order_id }}</td>
                            <td>{{ $order->payment_method }}</td>
                            <td>FCFA {{ number_format($order->amount_total, 0) }}</td>
                            <td>
                                @if($order->payment_status == 'pending')
                                    <span class="badge badge-warning">Pending</span>
                                @elseif($order->payment_status == 'completed')
                                    <span class="badge badge-success">Completed</span>
                                @endif
                            </td>
                            <td>{{ $order->created_at }}</td>
                            <td>
                                <a href="{{ route('order_detail', ['order_id' => $order->order_id]) }}"
                                   class="btn btn-sm btn-primary"><i class="fa fa-angle-double-right"></i></a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7">
                                <h3 class="text-left">No Order Found</h3>
                            </td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
                <div class="mt-3">
                    {{ $orders->links() }}
                </div>
            </div>
            <!-- END DATA TABLE-->
        </div>
    </div>
@endsection
