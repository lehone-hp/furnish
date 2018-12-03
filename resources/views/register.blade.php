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
                        <li><a href="/">Home</a></li>
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
                        <form action="#">
                            <div class="row">
                                <div class="col-sm-6 col-xs-12 mb-20">
                                    <label for="r_f_name">First Name <span class="required">*</span></label>
                                    <input id="r_f_name" type="text"/>
                                </div>
                                <div class="col-sm-6 col-xs-12 mb-20">
                                    <label for="r_l_name">Last Name <span class="required">*</span></label>
                                    <input id="r_l_name" type="text"/>
                                </div>
                                <div class="col-xs-12 mb-20">
                                    <label for="r_c_name">Company Name</label>
                                    <input id="r_c_name" type="text"/>
                                </div>
                                <div class="col-sm-6 col-xs-12 mb-20">
                                    <label for="r_email">Email Address <span class="required">*</span></label>
                                    <input id="r_email" type="email"/>
                                </div>
                                <div class="col-sm-6 col-xs-12 mb-20">
                                    <label for="r_phone">Phone  <span class="required">*</span></label>
                                    <input id="r_phone" type="text" />
                                </div>
                                <div class="col-xs-12 mb-20">
                                    <label for="r_country">Country <span class="required">*</span></label>
                                    <select id="r_country">
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
                                </div>
                                <div class="col-xs-12 mb-20">
                                    <label>Address <span class="required">*</span></label>
                                    <input type="text" placeholder="Street address" />
                                </div>
                                <div class="col-xs-12 mb-20">
                                    <input type="text" placeholder="Apartment, suite, unit etc. (optional)" />
                                </div>
                                <div class="col-xs-12 mb-20">
                                    <label for="r_city">Town / City <span class="required">*</span></label>
                                    <input id="r_city" type="text"/>
                                </div>
                                <div class="col-sm-6 col-xs-12 mb-20">
                                    <label>State / County <span class="required">*</span></label>
                                    <input type="text"/>
                                </div>
                                <div class="col-sm-6 col-xs-12 mb-20">
                                    <label for="r_zip">Postcode / Zip <span class="required">*</span></label>
                                    <input id="r_zip" type="text" />
                                </div>
                                <div class="col-xs-12 mb-20">
                                    <label class="" for="r_password">Account password<span class="required">*</span></label>
                                    <input id="r_password" type="password">
                                </div>
                                <div class="col-xs-12 mb-20">
                                    <label class="" for="r_c_password">Confirm password<span class="required">*</span></label>
                                    <input id="r_c_password" type="password">
                                </div>
                                <div class="col-xs-12 mb-20">
                                    <input id="rememberme" type="checkbox">
                                    <label for="rememberme">I agree <a href="#">Terms &amp; Condition</a></label>
                                </div>
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