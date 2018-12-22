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
                                        <tr>
                                            <td class="pro-thumbnail"><a href="{{ route('product.details', ['slug'=>$item->attributes->slug]) }}"><img src="{{ route('product.image', ['image'=>$item->attributes->img]) }}" alt="{{ $item->name }}" /></a></td>
                                            <td class="pro-title"><a href="#">{{ $item->name }}</a></td>
                                            <td class="pro-price"><span class="amount">XAF {{ $item->price }}@if($item->attributes->old_price != null) <br><strike style="font-size: 12px">XAF {{ $item->attributes->old_price }}</strike> @endif</span></td>
                                            <td class="pro-quantity"><div class="product-quantity"><input type="number" value="{{ $item->quantity }}" min="{{ $item->attributes->min_order }}" max="10" readonly/></div></td>
                                            <td class="pro-subtotal">XAF {{ ($item->price)*($item->quantity) }}@if($item->attributes->old_price != null) <br><strike style="font-size: 12px">XAF {{ ($item->attributes->old_price)*($item->quantity) }}</strike> @endif</td>
                                            <td class="pro-remove"><a href="#"><span class="pe-7s-trash text-danger"></span></a></td>
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
                            <div class="cart-coupon mb-40">
                                <h4>Coupon</h4>
                                <p>Enter your coupon code if you have one.</p>
                                <input type="text" placeholder="Coupon code" />
                                <input type="submit" value="Apply Coupon" />
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-5 col-xs-12">
                            <div class="cart-buttons mb-30">
                                <input type="submit" value="Update Cart" />
                                <a href="#" id="clearCart">Clear Cart</a>
                            </div>
                            <div class="cart-total mb-40">
                                <h3>Cart Totals</h3>
                                <table>
                                    <tbody>
                                    <tr class="cart-subtotal">
                                        <th>Subtotal</th>
                                        <td><span class="amount">XAF {{ $subtotal }}</span></td>
                                    </tr>
                                    <tr class="order-total">
                                        <th>Total</th>
                                        <td>
                                            <strong><span class="amount">XAF {{ $subtotal }}</span></strong>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                                <div class="proceed-to-checkout section mt-30">
                                    <a href="#">Proceed to Checkout</a>
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
