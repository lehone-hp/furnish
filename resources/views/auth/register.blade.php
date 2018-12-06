@extends('layouts.app')
@section("title")
    Register
@endsection

@section('content')

    <!-- PAGE BANNER SECTION -->
    <div class="page-banner-section section">
        <div class="container">
            <div class="row">
                <div class="page-banner-content col-xs-12">
                    <h2>login</h2>
                    <ul class="breadcrumb">
                        <li><a href="{{ route('index') }}">Home</a></li>
                        <li class="active">Register</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- END PAGE BANNER SECTION -->

    <!-- PAGE SECTION START -->
    <div class="page-section section pt-100 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 col-xs-12">
                    <div class="login-reg-form">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="row">
                                <div class="row" style="margin: 0px;">
                                    <div class="col-sm-6 col-xs-12 mb-20">
                                        <label for="r_f_name">First Name <span class="required">*</span></label>
                                        <input id="r_f_name" type="text"
                                               name="firstname"
                                               value="{{ old('firstname') }}" />
                                        @if ($errors->has('firstname'))
                                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('firstname') }}</strong>
                                        </span>
                                        @endif
                                    </div>

                                    <div class="col-sm-6 col-xs-12 mb-20">
                                        <label for="r_l_name">Last Name <span class="required">*</span></label>
                                        <input id="r_l_name" type="text"
                                               name="lastname"
                                               value="{{ old('lastname') }}" />
                                        @if ($errors->has('lastname'))
                                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('lastname') }}</strong>
                                        </span>
                                        @endif
                                    </div>

                                </div>
                                <div class="col-sm-6 col-xs-12 mb-20">
                                    <label for="r_email">Email Address <span class="required">*</span></label>
                                    <input id="r_email" type="email"
                                           name="email" value="{{ old('email') }}" >

                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="col-sm-6 col-xs-12 mb-20">
                                    <label for="r_phone">Phone  <span class="required">*</span></label>
                                    <input id="r_phone" type="text"
                                           name="phone" value="{{ old('phone') }}"/>

                                    @if ($errors->has('phone'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('phone') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="col-xs-12 mb-20">
                                    <label for="r_country">Country <span class="required">*</span></label>
                                    <select name="country" id="r_country">
                                        <option value="1">Select a country</option>
                                        <option value="2">bangladesh</option>
                                        <option value="3">Algeria</option>
                                        <option value="4">Afghanistan</option>
                                        <option value="5">Ghana</option>
                                        <option value="6">Albania</option>
                                        <option value="7">Bahrain</option>
                                        <option value="8">Colombia</option>
                                        <option value="9">Dominican Republic</option>
                                    </select>

                                    @if ($errors->has('country'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('country') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="col-xs-12 mb-20">
                                    <label>Address <span class="required">*</span></label>
                                    <input type="text" placeholder="Street address"
                                           name="address" value="{{ old('address') }}"/>

                                    @if ($errors->has('address'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('address') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="col-xs-12 mb-20">
                                    <label for="r_city">Town / City <span class="required">*</span></label>
                                    <input id="r_city" type="text"
                                           name="city" value="{{ old('city') }}"/>

                                    @if ($errors->has('city'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('city') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="col-sm-6 col-xs-12 mb-20">
                                    <label>State / County / Province <span class="required">*</span></label>
                                    <input type="text" name="state" value="{{ old('state') }}"/>

                                    @if ($errors->has('state'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('state') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="col-sm-6 col-xs-12 mb-20">
                                    <label for="r_zip">Postcode / Zip <span class="required">*</span></label>
                                    <input id="r_zip" type="text" name="zip" value="{{ old('zip') }}"/>

                                    @if ($errors->has('zip'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('zip') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="col-xs-12 mb-20">
                                    <label class="" for="r_password">Account password <span class="required">*</span></label>
                                    <input id="r_password" type="password"
                                           class="{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                           name="password" >

                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="col-xs-12 mb-20">
                                    <label class="" for="r_c_password">Confirm password<span class="required">*</span></label>
                                    <input id="r_c_password" type="password"
                                           name="password_confirmation" >
                                </div>

                                <!--
                                <div class="col-xs-12 mb-20">
                                    <input id="rememberme" type="checkbox">
                                    <label for="rememberme">I agree <a href="#">Terms &amp; Condition</a></label>
                                </div>
                                -->
                                <div class="col-xs-12">
                                    <input value="register" type="submit">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- PAGE SECTION END -->

@endSection