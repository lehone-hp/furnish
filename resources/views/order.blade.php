@extends('layouts.app')
@section("title")
    Order #{{ $order->order_id }}
@endsection

@section('content')
    <!-- Page content -->
    <!-- PAGE BANNER SECTION -->
    <div class="page-banner-section section">
        <div class="container">
            <div class="row">
                <div class="page-banner-content col-xs-12">
                    <h2>Order Details</h2>
                    <ul class="breadcrumb">
                        <li><a href="{{ route('index') }}">Home</a></li>
                        <li class="active">{{ $order->order_id }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- END PAGE BANNER SECTION -->

    <!-- PAGE SECTION START -->
    <div class="page-section section pt-100 pb-60">
        <div class="container">

            @if($order->payment_status == 'pending')
                <h3 class="text-center">Your order was created successfully but payment has not been made</h3>
            @elseif($order->payment_status == 'completed')
                <h3 class="text-center">Order Placed Successfully, your item will be shipped within 3 business days</h3>
            @endif

            <div class="row" style="margin-top: 5rem">
                <div class="col-md-8 ftco-animate">
                    <p class="mb-0" style="margin-bottom: 0">Order Number: {{ $order->order_id }}</p>
                    <p class="mb-0" style="margin-bottom: 0">
                        Date: {{ date('j M Y', strtotime($order->created_at)) }}</p>
                    <p class="mb-0" style="margin-bottom: 0">
                        Payment Status:
                    @if($order->payment_status == 'completed')
                        <p style="padding: 1rem 2rem; color: green; border: solid 2px; display: inline-block">
                            COMPLETED</p>
                    @elseif($order->payment_status == 'pending')
                        <p style="padding: 1rem 2rem; color: #ffae00; border: solid 2px; display: inline-block">
                            PENDING</p>
                    @endif

                    <div class=" default-table">
                        <table class="table table-bordered">
                            <thead class="thead-primary">
                            <tr class="text-center" style="background-color: #ffae00">
                                <th>Product name</th>
                                <th>Total</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($order->orderitems as $item)

                                <tr class="">
                                    <td class="price">
                                        {{ $item->product->name }} <strong>x {{ $item->quantity }}</strong>
                                    </td>
                                    <td>
                                        {{ number_format($item->amount * $item->quantity, 2) }} frs
                                    </td>
                                </tr>
                            @empty
                            @endforelse
                            <tr>
                                <td class="price"><strong>Subtotal</strong></td>
                                <td>{{ number_format($order->amount_total, 2) }} frs</td>
                            </tr>
                            <tr>
                                <td class="price"><strong>Payment Method</strong></td>
                                <td>{{ $order->payment_method }}</td>
                            </tr>
                            <tr>
                                <td class="price"><strong>Total</strong></td>
                                <td>{{ number_format($order->amount_total, 2) }} frs</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-md-4">
                    @if ($order->payment_status == 'pending' && $qr_code)
                        <div class="text-center">
                            <img src="data:image/png;base64, {{ $qr_code }} ">
                            <p>Scan QR Code to complete payment</p>
                        </div>
                    @endif

                </div>

            </div>


        </div>
    </div>
    <!-- PAGE SECTION END -->
@endsection

@section('footer_script')
    <script>
        @if ($order->payment_status == 'pending' && $invoice)
        window.setInterval(function () {
            var data = {
                _token: '{!! @csrf_token() !!}'
            };
            $.ajax({
                url: '{{ route('invoice_status', ['id'=>$invoice->id]) }}',
                data: data,
                type: 'GET',
                success: function (data) {
                    if (data.success === '01' && data.status === 'paid') {
                        window.location.reload();
                    } else {
                        console.log(data);
                    }
                },
                error: function (xhr, status, error) {
                    alert(error.msg);
                }
            });
        }, 5000);
        @endif
    </script>
@endsection