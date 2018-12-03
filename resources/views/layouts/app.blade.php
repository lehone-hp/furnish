<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Furnish - @yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/favicon.ico') }}">

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">

    <!-- All CSS Files -->
    <!-- Bootstrap css -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <!-- Icon Font -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('fonts/pe-Icon/pe-icon-7-stroke/css/pe-icon-7-stroke.css') }}">
    <!-- Plugins css file -->
    <link rel="stylesheet" href="{{ asset('css/plugins.css') }}">
    <!-- Theme main style -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- Responsive css -->
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">

    @yield("css")

    <!-- Modernizr JS -->
    <script src="{{ asset('js/vendor/modernizr-2.8.3.min.js') }}"></script>

</head>

<body>

<!-- Body main wrapper start -->
<div class="wrapper">

    <!-- START HEADER SECTION -->
    <header class="header-section section sticker header-transparent">
        <div class="container-fluid">
            <div class="row">
                <!-- logo -->
                <div class="col-md-2 col-sm-6 col-xs-6">
                    <div class="header-logo">
                        <a href="{{ route('index') }}"><img src="{{ asset('img/logo.png') }}" alt="main logo"></a>
                    </div>
                </div>
                <!-- header-search & total-cart -->
                <div class="col-md-2 col-sm-6 col-xs-6 float-right">
                    <div class="header-option-btns float-right">
                        <!-- header-search -->
                        <div class="header-search float-left">
                            <button class="search-toggle" data-toggle="modal" data-target="#myModal" ><i class="pe-7s-search"></i></button>
                        </div>
                        <!-- header Account -->
                        <div class="header-account float-left">
                            <ul>
                                <li><a href="#" data-toggle="dropdown"><i class="pe-7s-config"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Log in</a></li>
                                        <li><a href="#">Register</a></li>
                                        <li><a href="#">My Account</a></li>
                                        <li><a href="{{ route('wishlist') }}">Wish list</a></li>
                                        <li><a href="{{ route('checkout') }}">Checkout</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <!-- Header Cart -->
                        <div class="header-cart float-left">
                            <!-- Cart Toggle -->
                            <a class="cart-toggle" href="#" data-toggle="dropdown">
                                <i class="pe-7s-cart"></i>
                                <span>2</span>
                            </a>
                            <!-- Mini Cart Brief -->
                            <div class="mini-cart-brief dropdown-menu text-left">
                                <div class="cart-items"><p>You have <span>2 items</span> in your shopping bag</p></div>
                                <!-- Cart Products -->
                                <div class="all-cart-product clearfix">
                                    <div class="single-cart clearfix">
                                        <div class="cart-image">
                                            <a href="{{ route('product.details') }}"><img src="{{ asset('img/product/cart-1.jpg') }}" alt=""></a>
                                        </div>
                                        <div class="cart-info">
                                            <h5><a href="{{ route('product.details') }}">Le Parc Minotti Chair</a></h5>
                                            <p>Price : £9.00</p>
                                            <p>Qty : 1</p>
                                            <a href="#" class="cart-delete" title="Remove this item"><i class="pe-7s-trash"></i></a>
                                        </div>
                                    </div>
                                    <div class="single-cart clearfix">
                                        <div class="cart-image">
                                            <a href="{{ route('product.details') }}"><img src="{{ asset('img/product/cart-2.jpg') }}" alt=""></a>
                                        </div>
                                        <div class="cart-info">
                                            <h5><a href="{{ route('product.details') }}">DSR Eiffel chair</a></h5>
                                            <p>Price : £9.00</p>
                                            <p>Qty : 1</p>
                                            <a href="#" class="cart-delete" title="Remove this item"><i class="pe-7s-trash"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Cart Total -->
                                <div class="cart-totals">
                                    <h5>Total <span>£12.00</span></h5>
                                </div>
                                <!-- Cart Button -->
                                <div class="cart-bottom  clearfix">
                                    <a href="{{ route('checkout') }}">Check out</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- primary-menu -->
                <div class="col-md-8 col-xs-12">
                    <nav class="main-menu text-center">
                        <ul>
                            <li class="active"><a href="{{ route('index') }}">Home</a></li>
                            <li><a href="{{ route('shop') }}">shop</a>
                                <ul class="mega-menu">
                                    <li><a href="{{ route('shop') }}">Chair</a>
                                        <ul>
                                            <li><a href="#">Tops</a></li>
                                            <li><a href="#">Bras &amp; Tanks</a></li>
                                            <li><a href="#">Trousers</a></li>
                                            <li><a href="#">Hoodies &amp; Sweatshirts</a></li>
                                            <li><a href="#">Tees</a></li>
                                            <li><a href="#">Jackets</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="{{ route('shop') }}">Table</a>
                                        <ul>
                                            <li><a href="#">Tops</a></li>
                                            <li><a href="#">Bras &amp; Tanks</a></li>
                                            <li><a href="#">Trousers</a></li>
                                            <li><a href="#">Hoodies &amp; Sweatshirts</a></li>
                                            <li><a href="#">Tees</a></li>
                                            <li><a href="#">Jackets</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="{{ route('shop') }}">Cabinet</a>
                                        <ul>
                                            <li><a href="#">Tops</a></li>
                                            <li><a href="#">Bras &amp; Tanks</a></li>
                                            <li><a href="#">Trousers</a></li>
                                            <li><a href="#">Hoodies &amp; Sweatshirts</a></li>
                                            <li><a href="#">Tees</a></li>
                                            <li><a href="#">Jackets</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="{{ route('shop') }}">sofa</a></li>
                            <li><a href="{{ route('shop') }}">Cabinet</a></li>
                            <li><a href="{{ route('contact') }}">Contact</a></li>
                        </ul>
                    </nav>
                    <div class="mobile-menu"></div>
                </div>
            </div>
        </div>
    </header>
    <!-- END HEADER SECTION -->

    <!-- Search Modal -->
    <div class="search-modal modal fade text-center" id="myModal">
        <div class="header-search-form">
            <form action="#">
                <input type="text" placeholder="Search">
                <button><i class="pe-7s-search"></i></button>
            </form>
        </div>
    </div>

    @yield('content')

    <!-- Page footer -->
    @include('layouts.footer')

</div>
<!-- Body main wrapper end -->


<!-- Placed JS at the end of the document so the pages load faster -->

<!-- jQuery latest version -->
<script src="js/vendor/jquery-3.1.1.min.js"></script>
<!-- Bootstrap js -->
<script src="js/bootstrap.min.js"></script>
<!-- Plugins js -->
<script src="js/plugins.js"></script>
<!-- Ajax Mail js -->
<script src="js/ajax-mail.js"></script>
<!-- Main js -->
<script src="js/main.js"></script>

@yield("footer-script")

</body>

</html>