
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Admin Dashboard">
    <meta name="keywords" content="admin,dashboard">
    <meta name="author" content="stacks">
    <!-- The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Dashboard - Login</title>
    <!-- Favicon  -->
    <link rel="shortcut icon" href="{{ asset('img/logo.png') }}">

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <link href="/myadmin/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/myadmin/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="/myadmin/plugins/icomoon/style.css" rel="stylesheet">
    <link href="/myadmin/plugins/uniform/css/default.css" rel="stylesheet"/>
    <link href="/myadmin/plugins/switchery/switchery.min.css" rel="stylesheet"/>

    <!-- Theme Styles -->
    <link href="/myadmin/css/space.min.css" rel="stylesheet">
    <link href="/myadmin/css/themes/admin3.css" rel="stylesheet">
    <link href="/myadmin/css/custom.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<!-- Page Container -->
<div class="page-container">
    <!-- Page Inner -->
    <div class="page-inner login-page">
        <div id="main-wrapper" class="container-fluid">
            <div class="row">
                <div class="col-sm-6 col-md-3 login-box">
                    <a class="logo" href="{{ route('index') }}">
                        <img src="{{ asset('img/logo.png') }}" alt="Furnish"  style="width: 80%;"/>
                    </a>
                    <h4 class="login-title">Sign in to your account</h4>
                    @if(session()->has('error'))
                        <div class="alert alert-danger alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <p>{{ session()->get('error') }}</p>
                        </div>
                    @endif
                    <form action="{{ route('admin.login') }}" method="POST">
                        {{ @csrf_field() }}
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" name="password" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Login</button><br>
                        <a href="/admin/forgot-password" class="forgot-link">Forgot password?</a>
                    </form>
                </div>
            </div>
        </div>
    </div><!-- /Page Content -->
</div><!-- /Page Container -->


<!-- Javascripts -->
<script src="/myadmin/plugins/jquery/jquery-3.1.0.min.js"></script>
<script src="/myadmin/plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="/myadmin/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<script src="/myadmin/plugins/uniform/js/jquery.uniform.standalone.js"></script>
<script src="/myadmin/plugins/switchery/switchery.min.js"></script>
<script src="/myadmin/js/space.min.js"></script>







