
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Admin template">
    <meta name="author" content="Lehone & Rachmann">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Admin Logn</title>

    <!-- Fontfaces CSS-->
    <link href="/client/css/font-face.css" rel="stylesheet" media="all">
    <link href="/client/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="/client/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="/client/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="/client/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="/client/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="/client/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="/client/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="/client/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="/client/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="/client/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="/client/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="/client/css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
<div class="page-wrapper">
    <div class="page-content--bge5">
        <div class="container">
            <div class="login-wrap">
                <div class="login-content">
                    <div class="login-logo">
                        <a href="#">
                            <img src="{{ asset('img/logo.png') }}" alt="Admin Logo">
                        </a>
                    </div>
                    @if(session()->has('error'))
                    <div class="alert alert-danger alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <p>{{ session()->get('error') }}</p>
                    </div>
                    @endif
                    <div class="login-form">
                        <form action="{{ route('admin.login') }}" method="POST">
                            {{ @csrf_field() }}
                            <div class="form-group">
                                <label>Email Address</label>
                                <input class="au-input au-input--full" type="email" name="email" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input class="au-input au-input--full" type="password" name="password" placeholder="Password">
                            </div>
                            <div class="login-checkbox">
                                <label>
                                    <input type="checkbox" name="remember" checked>Remember Me
                                </label>
                                <label>
                                    <a href="#">Forgotten Password?</a>
                                </label>
                            </div>
                            <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">sign in</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<!-- Jquery JS-->
<script src="/client/vendor/jquery-3.2.1.min.js"></script>
<!-- Bootstrap JS-->
<script src="/client/vendor/bootstrap-4.1/popper.min.js"></script>
<script src="/client/vendor/bootstrap-4.1/bootstrap.min.js"></script>
<!-- Vendor JS       -->
<script src="/client/vendor/slick/slick.min.js">
</script>
<script src="/client/vendor/wow/wow.min.js"></script>
<script src="/client/vendor/animsition/animsition.min.js"></script>
<script src="/client/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
</script>
<script src="/client/vendor/counter-up/jquery.waypoints.min.js"></script>
<script src="/client/vendor/counter-up/jquery.counterup.min.js">
</script>
<script src="/client/vendor/circle-progress/circle-progress.min.js"></script>
<script src="/client/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
<script src="/client/vendor/chartjs/Chart.bundle.min.js"></script>
<script src="/client/vendor/select2/select2.min.js">
</script>

<!-- Main JS-->
<script src="/client/js/main.js"></script>

</body>

</html>
<!-- end document-->