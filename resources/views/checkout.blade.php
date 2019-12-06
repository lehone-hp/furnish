@extends('layouts.app')
@section("title")
    Checkout
@endsection

@section('content')
    <!-- Page content -->
    <!-- PAGE BANNER SECTION -->
    <div class="page-banner-section section">
        <div class="container">
            <div class="row">
                <div class="page-banner-content col-xs-12">
                    <h2>Checkout</h2>
                    <ul class="breadcrumb">
                        <li><a href="{{ route('index') }}">Home</a></li>
                        <li class="active">Order</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- END PAGE BANNER SECTION -->

    <!-- PAGE SECTION START -->
    <div class="page-section section pt-100 pb-60">
        <div class="container">
            <form action="{{ route('checkout') }}" method="POST">

                <div class="row">
                    @guest
                        <div class="col-md-12">
                            <div class="customer-login mb-40">
                                <!-- LOGIN START -->
                                <h3>Returning customer? <a href="{{ route('login') }}">Click here to login</a></h3>
                                <!--
                                <div id="checkout-login" class="checkout-login collapse fix">
                                    <div class="checkout-login-wrapper mt-30">
                                        <p>Quisque gravida turpis sit amet nulla posuere lacinia. Cras sed est sit amet ipsum luctus.</p>
                                        <div class="col-md-4 col-sm-6 col-xs-12">
                                            <form action="#">
                                                <div class="fix mb-20">
                                                    <label>Username or email <span class="required">*</span></label>
                                                    <input type="text" />
                                                </div>
                                                <div class="fix mb-20">
                                                    <label>Password  <span class="required">*</span></label>
                                                    <input type="text" />
                                                </div>
                                                <div class="fix mb-20">
                                                    <input type="submit" value="Login" />
                                                    <label class="remember-me-box">
                                                        <input type="checkbox" />
                                                        Remember me
                                                    </label>
                                                </div>
                                                <a href="#">Lost your password?</a>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- LOGIN END -->
                            </div>
                        </div>
                    @endguest
                    <div class="checkout-form">
                        <div class="col-lg-6 col-md-6 mb-40">
                            @csrf

                            <h3>Billing Details</h3>
                            @auth
                                <div class="row">
                                    <div class="col-xs-12 mb-30">
                                        <label for="b_country">Country <span class="required">*</span></label>
                                        <select id="b_country" name="country">
                                            @foreach(\App\Country::all() as $country)
                                                <option value="{{ $country->name }}"
                                                        @if( old('country', $user->country) == $country->name) selected @endif>
                                                    {{ $country->name }}</option>
                                            @endforeach
                                        </select>
                                        @if ($errors->has('country'))
                                            <span class="invalid-feedback" role="alert">
                                                {{ $errors->first('country') }}
                                            </span>
                                        @endif
                                    </div>
                                    <div class="col-sm-6 col-xs-12 mb-30">
                                        <label for="b_f_name">First Name <span class="required">*</span></label>
                                        <input id="b_f_name" type="text"
                                               name="firstname"
                                               value="{{ old('firstname', $user->firstname) }}"/>

                                        @if ($errors->has('firstname'))
                                            <span class="invalid-feedback" role="alert">
                                                {{ $errors->first('firstname') }}
                                            </span>
                                        @endif
                                    </div>
                                    <div class="col-sm-6 col-xs-12 mb-30">
                                        <label for="b_l_name">Last Name <span class="required">*</span></label>
                                        <input id="b_l_name" type="text"
                                               name="lastname"
                                               value="{{ old('lastname', $user->lastname) }}"/>

                                        @if ($errors->has('lastname'))
                                            <span class="invalid-feedback" role="alert">
                                                {{ $errors->first('lastname') }}
                                            </span>
                                        @endif
                                    </div>
                                    <div class="col-xs-12 mb-30">
                                        <label>Address <span class="required">*</span></label>
                                        <input type="text" placeholder="Street address"
                                               name="address"
                                               value="{{ old('address', $user->address) }}"/>

                                        @if ($errors->has('address'))
                                            <span class="invalid-feedback" role="alert">
                                                {{ $errors->first('address') }}
                                            </span>
                                        @endif
                                    </div>
                                    <div class="col-xs-12 mb-30">
                                        <label for="b_city">Town / City <span class="required">*</span></label>
                                        <input id="b_city" type="text" placeholder="Town / City"
                                               name="city"
                                               value="{{ old('city', $user->city) }}"/>

                                        @if ($errors->has('city'))
                                            <span class="invalid-feedback" role="alert">
                                                {{ $errors->first('city') }}
                                            </span>
                                        @endif
                                    </div>
                                    <div class="col-sm-6 col-xs-12 mb-30">
                                        <label>State / County / Province <span class="required">*</span></label>
                                        <input type="text"
                                               name="state"
                                               value="{{ old('state', $user->state) }}"/>

                                        @if ($errors->has('state'))
                                            <span class="invalid-feedback" role="alert">
                                                {{ $errors->first('state') }}
                                            </span>
                                        @endif
                                    </div>
                                    <div class="col-sm-6 col-xs-12 mb-30">
                                        <label for="b_zip">Postcode / Zip <span class="required">*</span></label>
                                        <input id="b_zip" type="text" placeholder="Postcode / Zip"
                                               name="zip"
                                               value="{{ old('zip', $user->zip) }}"/>

                                        @if ($errors->has('zip'))
                                            <span class="invalid-feedback" role="alert">
                                                {{ $errors->first('zip') }}
                                            </span>
                                        @endif
                                    </div>
                                    <div class="col-sm-6 col-xs-12 mb-30">
                                        <label for="b_email">Email Address <span class="required">*</span></label>
                                        <input id="b_email" type="email"
                                               name="email"
                                               value="{{ old('email', $user->email) }}"/>

                                        @if ($errors->has('email'))
                                            <span class="invalid-feedback" role="alert">
                                                {{ $errors->first('email') }}
                                            </span>
                                        @endif
                                    </div>
                                    <div class="col-sm-6 col-xs-12 mb-30">
                                        <label for="b_phone">Phone <span class="required">*</span></label>
                                        <input id="b_phone" type="text" placeholder="Phone Number"
                                               name="phone"
                                               value="{{ old('phone', $user->phone) }}"/>

                                        @if ($errors->has('phone'))
                                            <span class="invalid-feedback" role="alert">
                                                {{ $errors->first('phone') }}
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            @endauth
                            @guest
                                <div class="row">
                                    <div class="col-xs-12 mb-30">
                                        <label for="b_country">Country <span class="required">*</span></label>
                                        <select id="b_country" name="country">
                                            @foreach(\App\Country::all() as $country)
                                                <option value="{{ $country->name }}"
                                                        @if( old('country') == $country->name) selected @endif>
                                                    {{ $country->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-sm-6 col-xs-12 mb-30">
                                        <label for="b_f_name">First Name <span class="required">*</span></label>
                                        <input id="b_f_name" type="text"
                                               name="firstname"
                                               value="{{ old('firstname') }}"/>
                                    </div>
                                    <div class="col-sm-6 col-xs-12 mb-30">
                                        <label for="b_l_name">Last Name <span class="required">*</span></label>
                                        <input id="b_l_name" type="text"
                                               name="lastname"
                                               value="{{ old('lastname') }}"/>
                                    </div>
                                    <div class="col-xs-12 mb-30">
                                        <label>Address <span class="required">*</span></label>
                                        <input type="text" placeholder="Street address"
                                               name="address"
                                               value="{{ old('address') }}"/>
                                    </div>
                                    <div class="col-xs-12 mb-30">
                                        <label for="b_city">Town / City <span class="required">*</span></label>
                                        <input id="b_city" type="text" placeholder="Town / City"
                                               name="city"
                                               value="{{ old('city') }}"/>
                                    </div>
                                    <div class="col-sm-6 col-xs-12 mb-30">
                                        <label>State / County / Province <span class="required">*</span></label>
                                        <input type="text"
                                               name="state"
                                               value="{{ old('state') }}"/>
                                    </div>
                                    <div class="col-sm-6 col-xs-12 mb-30">
                                        <label for="b_zip">Postcode / Zip <span class="required">*</span></label>
                                        <input id="b_zip" type="text" placeholder="Postcode / Zip"
                                               name="zip"
                                               value="{{ old('zip') }}"/>
                                    </div>
                                    <div class="col-sm-6 col-xs-12 mb-30">
                                        <label for="b_email">Email Address <span class="required">*</span></label>
                                        <input id="b_email" type="email"
                                               name="email"
                                               value="{{ old('email') }}"/>
                                    </div>
                                    <div class="col-sm-6 col-xs-12 mb-30">
                                        <label for="b_phone">Phone <span class="required">*</span></label>
                                        <input id="b_phone" type="text" placeholder="Phone Number"
                                               name="phone"
                                               value="{{ old('phone') }}"/>
                                    </div>
                                    <div class="col-xs-12 mb-30">
                                        <input id="b_c_account" type="checkbox" data-target="createp_account"/>
                                        <label for="b_c_account">Create an account?</label>
                                        <div class="collapse mt-20" data-collapse="createp_account">
                                            <p>Create an account by entering the information below. If you are a
                                                returning customer please login at the top of the page.</p>
                                            <label for="b_a_password">Account password <span
                                                        class="required">*</span></label>
                                            <input id="b_a_password" type="password" placeholder="Password"
                                                   name="password"/>

                                            <label for="b_a_password" class="mt-20">Confirm password <span
                                                        class="required">*</span></label>
                                            <input id="b_a_password" type="password" placeholder="Password"
                                                   name="password_confirmation"/>
                                        </div>
                                    </div>
                                </div>
                            @endguest

                            {{--<h3>
                                <input id="ship_form" type="checkbox" data-target="shipping_form"/>
                                <label for="ship_form">Ship to a different address?</label>
                            </h3>
                            <div class="collapse row" data-collapse="shipping_form">
                                <div class="col-xs-12 mb-30">
                                    <label for="s_country">Country <span class="required">*</span></label>
                                    <select id="s_country" name="ship_country">
                                        @foreach(\App\Country::all() as $country)
                                            <option value="{{ $country->name }}"
                                                    @if( old('ship_country') == $country->name) selected @endif>
                                                {{ $country->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-sm-6 col-xs-12 mb-30">
                                    <label for="s_f_name">First Name <span class="required">*</span></label>
                                    <input id="s_f_name" type="text"
                                           name="ship_firstname"
                                           value="{{ old('ship_firstname') }}"/>
                                </div>
                                <div class="col-sm-6 col-xs-12 mb-30">
                                    <label for="s_l_name">Last Name <span class="required">*</span></label>
                                    <input id="s_l_name" type="text"
                                           name="ship_lastname"
                                           value="{{ old('ship_lastname') }}"/>
                                </div>
                                <div class="col-xs-12 mb-30">
                                    <label>Address <span class="required">*</span></label>
                                    <input type="text" placeholder="Street address"
                                           name="ship_address"
                                           value="{{ old('ship_address') }}"/>
                                </div>
                                <div class="col-xs-12 mb-30">
                                    <label for="s_city">Town / City <span class="required">*</span></label>
                                    <input id="s_city" type="text" placeholder="Town / City"
                                           name="ship_city"
                                           value="{{ old('ship_city') }}"/>
                                </div>
                                <div class="col-sm-6 col-xs-12 mb-30">
                                    <label class="s_county">State / County <span class="required">*</span></label>
                                    <input id="s_county" type="text"
                                           name="ship_state"
                                           value="{{ old('ship_state') }}"/>
                                </div>
                                <div class="col-sm-6 col-xs-12 mb-30">
                                    <label for="s_zip">Postcode / Zip <span class="required">*</span></label>
                                    <input id="s_zip" type="text" placeholder="Postcode / Zip"
                                           name="ship_zip"
                                           value="{{ old('ship_zip') }}"/>
                                </div>
                                <div class="col-sm-6 col-xs-12 mb-30">
                                    <label for="s_email">Email Address <span class="required">*</span></label>
                                    <input id="s_email" type="email"
                                           name="ship_email"
                                           value="{{ old('ship_email') }}"/>
                                </div>
                                <div class="col-sm-6 col-xs-12 mb-30">
                                    <label for="s_phone">Phone <span class="required">*</span></label>
                                    <input id="s_phone" type="text" placeholder="Phone Number"
                                           name="ship_firstname"
                                           value="{{ old('ship_phone') }}"/>
                                </div>
                            </div>
                            <div class="order-notes">
                                <label for="order_note">Order Notes</label>
                                <textarea id="order_note"
                                          placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                            </div>
--}}
                        </div>
                        <div class="col-lg-6 col-md-6 col-xs-12 mb-40">
                            <!--
                            <div class="coupon-form mb-30">
                                <h3>coupon code</h3>
                                <p>Enter your coupon code if you have one</p>
                                <form action="#">
                                    <input type="text" placeholder="Coupon code" />
                                    <input type="submit" value="Apply" />
                                </form>
                            </div>
                            -->
                            <div class="order-wrapper">
                                <h3>Your order</h3>
                                <div class="order-table table-responsive mb-30">
                                    <table>
                                        <thead>
                                        <tr>
                                            <th class="product-name">Product</th>
                                            <th class="product-total">Total</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach(Cart::getContent() as $item)
                                            <tr>
                                                <td class="product-name">
                                                    {{ $item->name }} <strong class="product-qty">
                                                        × {{ $item->quantity }}</strong>
                                                </td>
                                                <td class="product-total">
                                                    <span class="amount">FCFA {{ number_format($item->price * $item->quantity, 2) }}</span>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                        <tfoot>
                                        <tr>
                                            <th>Cart Subtotal</th>
                                            <td>FCFA {{ number_format(Cart::getTotal(), 2) }}</td>
                                        </tr>
                                        <tr>
                                            <th>Order Total</th>
                                            <td><strong>FCFA {{ number_format(Cart::getTotal(), 2) }}</strong>
                                            </td>
                                        </tr>
                                        </tfoot>
                                    </table>
                                </div>
                                <div class="payment-method">
                                    <div class="panel-group" id="accordion">
                                        <div class="panel panel-default">
                                            <div class="panel-heading" id="headingOne">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion"
                                                       href="#collapseOne">
                                                        Pay with Pursar
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseOne" class="panel-collapse collapse in">
                                                <div class="panel-body">
                                                    <p>You will be shown a QR Code which will require you to scan using
                                                    the pursar mobile app in order to complete payment for this order.</p>
                                                </div>
                                            </div>
                                        </div>

                                        {{--<div class="panel panel-default">
                                            <div class="panel-heading" id="headingTwo">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                                        Cheque Payment
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                                <div class="panel-body">
                                                    <p>Please send your cheque to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading" id="headingThree">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                                                        PayPal
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseThree" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <p>Pay via PayPal; you can pay with your credit card if you don’t have a PayPal account.</p>
                                                </div>
                                            </div>
                                        </div>--}}
                                    </div>
                                    <div class="order-button">
                                        <input type="submit" value="Place order"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

        </div>
    </div>
    <!-- PAGE SECTION END -->
@endsection
