@extends('layouts.app')
@section("title")
    Login
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
                        <form method="post" action="{{ route('login') }}">
                            @csrf
                            <div class="row">
                                <div class="col-xs-12 mb-20">
                                    <label for="email">{{ __('E-Mail Address') }}<span class="required">*</span></label>
                                    <input name="email" id="email" type="email" class="{{ $errors->has('email') ? ' is-invalid' : '' }}">
                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                        {{ $errors->first('email') }}
                                    </span>
                                    @endif
                                </div>
                                <div class="col-xs-12 mb-20">
                                    <label for="password">{{ __('Password') }}<span class="required">*</span></label>
                                    <input name="password" id="password" type="password"  class="{{ $errors->has('password') ? ' is-invalid' : '' }}">
                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                        {{ $errors->first('password') }}
                                    </span>
                                    @endif
                                </div>
                                <div class="col-xs-12 mb-20">
                                    <input value="Login" name="login" class="inline" type="submit">
                                    <label class="inline" for="rememberme">
                                        <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                                <div class="col-xs-12">
                                    Don't have an account? <a href="{{ route('register') }}"> Sign up</a>
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
