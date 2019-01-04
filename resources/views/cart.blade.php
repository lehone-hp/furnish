@extends('layouts.app')
@section("title")
    Cart
@endsection

@section('content')
    <!-- Page content -->
    <!-- PAGE BANNER SECTION -->
    <div class="page-banner-section section">
        <div class="container">
            <div class="row">
                <div class="page-banner-content col-xs-12">
                    <h2>Cart</h2>
                    <ul class="breadcrumb">
                        <li><a href="{{ route('index') }}">Home</a></li>
                        <li class="active">Cart</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- END PAGE BANNER SECTION -->

    <!-- PAGE SECTION START -->
    <div class="page-section section pt-100 pb-60">
        <div class="container">
            <div class="row">

                @if($items->count() > 0)

                    <form action="#">
                        <div class="col-xs-12">
                            <div class="cart-table table-responsive mb-40">
                                <table>
                                    <thead>
                                    <tr>
                                        <th class="pro-thumbnail">Image</th>
                                        <th class="pro-title">Product</th>
                                        <th class="pro-price">Price</th>
                                        <th class="pro-quantity">Quantity</th>
                                        <th class="pro-subtotal">Total</th>
                                        <th class="pro-remove">Remove</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($items as $item)
                                        <tr class="cart-table-row" id="{{ "item-".$item->attributes->slug }}">
                                            <td class="pro-thumbnail"><a href="{{ route('product.details', ['slug'=>$item->attributes->slug]) }}"><img src="{{ route('product.image', ['image'=>$item->attributes->img]) }}" alt="{{ $item->name }}" /></a></td>
                                            <td class="pro-title"><a href="#">{{ $item->name }}</a></td>
                                            <td class="pro-price">
                                                <span class="amount">${{ number_format($item->price, 2) }}@if($item->attributes->old_price != null) <br><strike style="font-size: 12px">${{ number_format($item->attributes->old_price, 2) }}</strike> @endif</span>
                                                <input type="hidden" class="cart-unit-price" value="{{ number_format($item->price, 2) }}">
                                            </td>
                                            <td class="pro-quantity">
                                                <div class="cart-quantity">
                                                    <input type="number" class="qty" value="{{ $item->quantity }}"
                                                           min="{{ $item->attributes->min_order }}"
                                                           max="10" readonly/>
                                                    <input class="item-slug" type="hidden" value="{{ $item->attributes->slug}}">
                                                </div>
                                            </td>
                                            <td class="pro-subtotal">
                                                $<span class="cart-table-item-total">
                                                    {{ number_format(($item->price)*($item->quantity), 2) }}</span></td>
                                            <td class="pro-remove">
                                                <a onclick="removeFromCart('{{ $item->attributes->slug }}')"><span class="pe-7s-trash text-danger"></span></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-md-8 col-sm-7 col-xs-12">
                            <div class="cart-buttons mb-30">
                                <a href="{{ route('shop') }}">Continue Shopping</a>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-5 col-xs-12">
                            <div class="cart-buttons mb-30">
                                <a href="#" class="pull-right"
                                   id="clearCart">Clear Cart</a>
                            </div>
                            <div class="cart-total mb-40">
                                <h3>Cart Totals</h3>
                                <table>
                                    <tbody>
                                    <tr class="cart-subtotal">
                                        <th>Subtotal</th>
                                        <td><span class="amount" id="cart-table-subtotal">${{ number_format($subtotal, 2) }}</span></td>
                                    </tr>
                                    <tr class="order-total">
                                        <th>Total</th>
                                        <td>
                                            <strong><span class="amount" id="cart-table-total">
                                                    ${{ number_format($subtotal, 2) }}</span></strong>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                                <div class="proceed-to-checkout section mt-30">
                                    <a href="{{ route('checkout') }}">Proceed to Checkout</a>
                                </div>
                            </div>
                        </div>
                    </form>
                    @else

                    <div class="col-12">
                        <div class="text-center">
                            <img src="/img/empty_cart.png" class="img-responsive center-block" style="width: 40%">
                        </div>
                        <div class="cart-buttons mb-30">
                            <a href="{{ route('shop') }}"><i class="fa fa-undo" aria-hidden="true"></i> Continue Shopping</a>
                        </div>
                    </div>

                 @endif
            </div>
        </div>
    </div>
    <!-- PAGE SECTION END -->

@endsection
