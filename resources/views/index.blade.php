@extends('layouts.app')
@section("title")
    Welcome
@endsection

@section('content')
    <!-- Page content -->
    <!-- START SLIDER SECTION -->
    <div class="home-slider-section section">
        <!-- Home Slider -->
        <div id="home-slider" class="slides">
            <img src="img/slider/1.jpg" alt="" title="#slider-caption-1"  />
            <img src="img/slider/2.jpg" alt="" title="#slider-caption-2"  />
        </div>
        <!-- Caption 1 -->
        <div id="slider-caption-1" class="nivo-html-caption">
            <div class="container">
                <div class="row">
                    <div class="hero-slider-content col-md-6 col-md-offset-6 col-sm-7 col-sm-offset-5 col-xs-12">
                        <h4 class="wow rotateInDownLeft" data-wow-duration="1s" data-wow-delay="0.5s">welcome to our</h4>
                        <h1 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s">furniture gallery</h1>
                        <p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.5s">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
                        <a href="#" class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="2s">Buy now</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Caption 2 -->
        <div id="slider-caption-2" class="nivo-html-caption">
            <div class="container">
                <div class="row">
                    <div class="hero-slider-content col-md-6 col-md-offset-6 col-sm-7 col-sm-offset-5 col-xs-12">
                        <h4 class="wow rotateInDownLeft" data-wow-duration="1s" data-wow-delay="0.5s">welcome to our</h4>
                        <h1 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s">furniture gallery</h1>
                        <p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.5s">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
                        <a href="#" class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="2s">Buy now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END SLIDER SECTION -->

    <!-- BANNER-SECTION START -->
    <div class="banner-section section pt-100 pb-70">
        <div class="container">
            <div class="row">
                <!-- Banner Item Start -->
                <div class="col-sm-6 col-xs-12 mb-30">
                    <div class="single-banner">
                        <a href="#"><img src="img/banner/1.jpg" alt=""></a>
                    </div>
                </div>
                <!-- Banner Item End -->
                <!-- Banner Item Start -->
                <div class="col-sm-6 col-xs-12 mb-30">
                    <div class="single-banner">
                        <a href="#"><img src="img/banner/2.jpg" alt=""></a>
                    </div>
                </div>
                <!-- Banner Item End -->
            </div>
        </div>
    </div>
    <!-- BANNER-SECTION END -->

    <!-- PRODUCT SECTION START -->
    <div class="product-section section pb-60">
        <div class="container">
            <div class="row">
                <div class="section-title text-center col-xs-12 mb-70">
                    <h4>our products</h4>
                    <h2>new arrivals</h2>
                </div>
            </div>
            <div class="row">
                <!-- product-item start -->
                @foreach($new_arrivals as $new_arrival)
                <div class="col-md-3 col-sm-4 col-xs-6 col-xs-wide mb-40">
                    <div class="product-item text-center">
                        <div class="product-img">
                            <a class="image" href="{{ route('product.details', ['slug'=>$new_arrival->slug]) }}"><img src="{{ route('product.image', ['image'=>$new_arrival->photo]) }}" alt=""/></a>
                            <a class="add-to-cart" onclick="addToCart('{{ $new_arrival->min_order }}', '{{ $new_arrival->slug }}', '{{ $new_arrival->in_stock }}')">
                                add to cart</a>
                            <div class="action-btn fix">
                                <a href="#" title="Wishlist"><i class="pe-7s-like"></i></a>
                                <a href="{{ route('product.details', ['slug'=>$new_arrival->slug]) }}" title="Quickview"><i class="pe-7s-look"></i></a>
                                <a onclick="addToCart('{{ $new_arrival->min_order }}', '{{ $new_arrival->slug }}', '{{ $new_arrival->in_stock }}');" title="Cart">
                                    <i class="pe-7s-cart"></i></a>
                            </div>
                        </div>
                        <div class="product-info">
                            <h5 class="title"><a href="{{ route('product.details', ['slug'=>$new_arrival->slug]) }}">{{ $new_arrival->name }}</a></h5>
                            <span class="price">
                                <span class="new">FCFA {{ number_format($new_arrival->price, 2) }}</span>
                                @if($new_arrival->old_price)
                                    <span class="old">FCFA {{ number_format($new_arrival->old_price, 2) }}</span>
                                @endif
                            </span>
                        </div>
                    </div>
                </div>
                @endforeach
                <!-- product-item end -->
            </div>
        </div>
    </div>
    <!-- PRODUCT SECTION END -->

    <!-- TESTIMONIAL SECTION START -->
    <div class="testimonial-section section pt-100 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1 col-xs-12">
                    <!-- Testimonial Slider -->
                    <div class="testimonial-slider text-center">
                        <!-- Single Testimonial -->
                        <div class="single-testimonial">
                            <img src="img/testimonial/1.png" alt="">
                            <p>“ Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram. ”</p>
                            <i class="pe-7s-way"></i>
                            <h5>Grace Kelly</h5>
                        </div>
                        <!-- Single Testimonial -->
                        <div class="single-testimonial">
                            <img src="img/testimonial/2.png" alt="">
                            <p>“ Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram. ”</p>
                            <i class="pe-7s-way"></i>
                            <h5>Diane Stevens</h5>
                        </div>
                        <!-- Single Testimonial -->
                        <div class="single-testimonial">
                            <img src="img/testimonial/3.png" alt="">
                            <p>“ Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram. ”</p>
                            <i class="pe-7s-way"></i>
                            <h5>Mary Harper</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- TESTIMONIAL SECTION END -->

@endsection
