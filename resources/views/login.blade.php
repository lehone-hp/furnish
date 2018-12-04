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
                        <li class="active">login</li>
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
                <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-12">
                    <div class="login-reg-form">
                        <form action="#">
                            <div class="row">
                                <div class="col-xs-12 mb-20">
                                    <label for="username">Username or email <span class="required">*</span></label>
                                    <input name="username" id="username" type="text">
                                </div>
                                <div class="col-xs-12 mb-20">
                                    <label for="password">Passwords <span class="required">*</span></label>
                                    <input name="password" id="password" type="password">
                                </div>
                                <div class="col-xs-12 mb-20">
                                    <input value="Login" name="login" class="inline" type="submit">
                                    <label class="inline" for="rememberme">
                                        <input value="forever" id="rememberme" name="rememberme" type="checkbox"> Remember me
                                    </label>
                                </div>
                                <div class="col-xs-12">
                                    <a href="#">Lost your password?</a>
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