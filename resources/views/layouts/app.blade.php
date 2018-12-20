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
    <!--
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    -->
    <link href="{{ asset('client/css/font-face.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('client/vendor/font-awesome-4.7/css/font-awesome.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('client/vendor/font-awesome-5/css/fontawesome-all.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('client/vendor/mdi-font/css/material-design-iconic-font.min.css') }}" rel="stylesheet" media="all">

    <link rel="stylesheet" href="{{ asset('fonts/pe-Icon/pe-icon-7-stroke/css/pe-icon-7-stroke.css') }}">
    <!-- Plugins css file -->
    <link rel="stylesheet" href="{{ asset('css/plugins.css') }}">
    <!-- Theme main style -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- Responsive css -->
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
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
                                        @guest
                                            <li><a href="{{ route('login') }}">Log in</a></li>
                                            <li><a href="{{ route('register') }}">Register</a></li>
                                        @endguest
                                        @auth
                                            <li><a href="{{ route('client.dashboard') }}">Client Dashboard</a></li>
                                            <li><a href="{{ route('client.logout') }}">Logout</a></li>
                                        @endauth
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
                                            <a href="{{ route('product.details', 1) }}"><img src="{{ asset('img/product/cart-1.jpg') }}" alt=""></a>
                                        </div>
                                        <div class="cart-info">
                                            <h5><a href="{{ route('product.details', 1) }}">Le Parc Minotti Chair</a></h5>
                                            <p>Price : £9.00</p>
                                            <p>Qty : 1</p>
                                            <a href="#" class="cart-delete" title="Remove this item"><i class="pe-7s-trash"></i></a>
                                        </div>
                                    </div>
                                    <div class="single-cart clearfix">
                                        <div class="cart-image">
                                            <a href="{{ route('product.details', 1) }}"><img src="{{ asset('img/product/cart-2.jpg') }}" alt=""></a>
                                        </div>
                                        <div class="cart-info">
                                            <h5><a href="{{ route('product.details', 1) }}">DSR Eiffel chair</a></h5>
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
                                <div class="cart-bottom">
                                    <a href="{{ route('cart') }}" class="btn-sm">Cart</a>
                                    <p class="clearfix"></p>
                                    <a href="{{ route('checkout') }}" class="btn-sm">Check out</a>
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
                                <ul class="sub-menu">
                                    @foreach(\App\Category::orderBy('name', 'ASC')->get() as $category)
                                    <li><a href="{{ route('shop', ['cat'=>$category->slug]) }}">
                                            {{ $category->name }}</a></li>
                                    @endforeach
                                </ul>
                            </li>
                            @foreach(\App\Category::take(2)->inRandomOrder()->get() as $category)
                                <li><a href="{{ route('shop', ['cat'=>$category->slug]) }}">
                                        {{ $category->name }}</a></li>
                            @endforeach
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
    <!-- SERVICE SECTION START -->
    <div class="service-section section pt-70 pb-40">
        <div class="container">
            <div class="row">
                <!-- Single Service -->
                <div class="single-service col-md-3 col-sm-6 col-xs-6 mb-30">
                    <div class="service-icon">
                        <i class="pe-7s-world"></i>
                    </div>
                    <div class="service-title">
                        <h3>FREE SHIPPING</h3>
                        <p>Free shipping on all UK orders</p>
                    </div>
                </div>
                <!-- Single Service -->
                <div class="single-service col-md-3 col-sm-6 col-xs-6 mb-30">
                    <div class="service-icon">
                        <i class="pe-7s-refresh"></i>
                    </div>
                    <div class="service-title">
                        <h3>FREE EXCHANGE</h3>
                        <p>30 days return on all items</p>
                    </div>
                </div>
                <!-- Single Service -->
                <div class="single-service col-md-3 col-sm-6 col-xs-6 mb-30">
                    <div class="service-icon">
                        <i class="pe-7s-headphones"></i>
                    </div>
                    <div class="service-title">
                        <h3>PREMIUM SUPPORT</h3>
                        <p>We support online 24 hours a day</p>
                    </div>
                </div>
                <!-- Single Service -->
                <div class="single-service col-md-3 col-sm-6 col-xs-6 mb-30">
                    <div class="service-icon">
                        <i class="pe-7s-gift"></i>
                    </div>
                    <div class="service-title">
                        <h3>BLACK FRIDAY</h3>
                        <p>Shocking discount on every friday</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- SERVICE SECTION END -->

    <!-- FOOTER TOP SECTION START -->
    <div class="footer-top-section section pb-60 pt-100">
        <div class="container">
            <div class="row">
                <!-- Footer Widget -->
                <div class="footer-widget col-md-3 col-sm-6 col-xs-12 mb-40">
                    <h4 class="widget-title">Contact Info</h4>
                    <p><strong>Address :</strong> <span>28 Green Tower, Street Name, New York City, USA</span></p>
                    <p><strong>Phone :</strong> <span>+8880 44338899</span></p>
                    <p><strong>Email :</strong> <a href="#">yourmail@outlook.com</a></p>
                    <!-- Footer Social -->
                    <div class="footer-social fix">
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-pinterest"></i></a>
                    </div>
                </div>
                <!-- Footer Widget -->
                <div class="footer-widget link-widget col-md-3 col-sm-6 col-xs-12 mb-40">
                    <h4 class="widget-title">accounts</h4>
                    <ul>
                        <li><a href="#">My Account</a></li>
                        <li><a href="/wishlsist">My Wishlist</a></li>
                        <li><a href="/cart">My Cart</a></li>
                        <li><a href="#">Sign In</a></li>
                        <li><a href="/checkout">Check out</a></li>
                    </ul>
                </div>
                <!-- Footer Widget -->
                <div class="footer-widget col-md-3 col-sm-6 col-xs-12 mb-40">
                    <h4 class="widget-title">quick links</h4>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="/shop">Shop</a></li>
                        <li><a href="/shop">Chair</a></li>
                        <li><a href="/shop">Tables</a></li>
                        <li><a href="/shop">Cabinets</a></li>
                        <li><a href="/contact">Contact</a></li>
                    </ul>
                </div>
                <!-- Footer Widget -->
                <div class="footer-widget col-md-3 col-sm-6 col-xs-12 mb-40">
                    <h4 class="widget-title">Newsletters</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor incididunt.</p>
                    <form action="http://devitems.us11.list-manage.com/subscribe/post?u=6bbb9b6f5827bd842d9640c82&amp;id=05d85f18ef" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="sunscribe-form validate" target="_blank" novalidate>
                        <div id="mc_embed_signup_scroll">
                            <label for="mce-EMAIL" class="hidden">Subscribe to our mailing list</label>
                            <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="Email Address" required>
                            <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                            <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_6bbb9b6f5827bd842d9640c82_05d85f18ef" tabindex="-1" value=""></div>
                            <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- FOOTER TOP SECTION END -->

    <!-- FOOTER BOTTOM SECTION START -->
    <div class="footer-bottom-section section pb-20 pt-20">
        <div class="container">
            <div class="row">
                <!-- Copyright -->
                <div class="copyright text-left col-sm-6 col-xs-12">
                    <p>Copyright &copy; 2018 <a href="#">Furnish Team</a>. All Right Reserved.</p>
                </div>
                <!-- Payment Method -->
                <div class="payment-method text-right col-sm-6 col-xs-12">
                    <img src="{{ asset('img/payment/1.png') }}" alt="payment" />
                    <img src="{{ asset('img/payment/2.png') }}" alt="payment" />
                    <img src="{{ asset('img/payment/3.png') }}" alt="payment" />
                    <img src="{{ asset('img/payment/4.png') }}" alt="payment" />
                </div>
            </div>
        </div>
    </div>
    <!-- FOOTER BOTTOM SECTION END -->


</div>
<!-- Body main wrapper end -->
<!-- Placed JS at the end of the document so the pages load faster -->
<!-- jQuery latest version -->
<script src="/js/vendor/jquery-3.1.1.min.js"></script>
<!-- Bootstrap js -->
<script src="/js/bootstrap.min.js"></script>
<!-- Plugins js -->
<script src="/js/plugins.js"></script>
<!-- Ajax Mail js -->
<script src="/js/ajax-mail.js"></script>
<!-- Main js -->
<script src="/js/main.js"></script>

</body>

</html>