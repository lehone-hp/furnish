@extends('layouts.app')
@section("title")
    Product Detail
@endsection

@section('content')
    <!-- Page content -->
    <!-- PAGE BANNER SECTION -->
    <div class="page-banner-section section">
        <div class="container">
            <div class="row">
                <div class="page-banner-content col-xs-12">
                    <h2>Product Details</h2>
                    <ul class="breadcrumb">
                        <li><a href="{{ route('index') }}">Home</a></li>
                        <li class="active">Product Details</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- END PAGE BANNER SECTION -->

    @if($product)
    <!-- PAGE SECTION START -->
    <div class="page-section section pt-100 pb-60">
        <div class="container">
            <div class="row mb-40">
                <div class="col-xs-12 col-sm-6 col-md-4 mb-40">
                    <!-- Tab panes -->
                    <div class="tab-content mb-10">
                        <div class="pro-large-img tab-pane active" id="pro-large-img-1">
                            <img src="{{ route('product.image', ['image'=>$product->photo]) }}" alt="{{ $product->name }}" />
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-8 mb-40">
                    <div class="product-details">
                        <h2 class="title">{{ $product->name }}</h2>
                        <span class="price section">
                            <span class="new">${{ number_format($product->price, 2) }}</span>
                            @if( $product->old_price)
                            <span class="old">${{ number_format($product->old_price, 2) }}</span>
                            @endif
                        </span>
                        <span class="availability section">
                            <strong>available:</strong>
                            @if( $product->in_stock)
                                <span class="in"><i class="fa fa-check"></i> In Stock</span>
                            @else
                                <span class="out"><i class="fa fa-times"></i> Out of Stock</span>
                            @endif
                        </span>
                        <div class="short-desc section">
                            <p><strong>Quick Overview:</strong> {{ substr(strip_tags($product->description), 0, 150).'....' }}</p>
                        </div>
                        <!--
                        <div class="color-list section">
                            <button class="active" style="background-color: #855439;"><i class="fa fa-check"></i></button>
                            <button style="background-color: #FF6801;"><i class="fa fa-check"></i></button>
                            <button style="background-color: #DCDCDA;"><i class="fa fa-check"></i></button>
                        </div>
                        -->
                        <ul class="usefull-link section">
                            <li><a href="#"><i class="pe-7s-like"></i> Wishlist</a></li>
                        </ul>
                        <div class="quantity-cart section">
                            <div class="product-quantity">
                                <input id="product_qty" class="product_qty" type="number" min="{{ $product->min_order }}" value="{{ $product->min_order }}" max="10" readonly>
                            </div>
                            <input type="hidden" value="{{ $product->slug }}" id="pdtSlug">
                            <button class="add-to-cart" id="addToCart">add to cart</button>
                        </div>
                        <div class="share-icons section">
                            <a class="twitter" href="#"><i class="fab fa-facebook"></i>  facebook</a>
                            <a class="facebook" href="#"><i class="fab fa-twitter"></i>  twitter</a>
                            <a class="google" href="#"><i class="fab fa-google-plus"></i>  linkedin</a>
                            <a class="pinterest" href="#"><i class="fab fa-pinterest"></i>  facebook</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Nav tabs -->
                <div class="col-xs-12">
                    <ul class="pro-info-tab-list section">
                        <li class="active"><a href="#more-info" data-toggle="tab">More info</a></li>
                        <li><a href="#data-sheet" data-toggle="tab">Data sheet</a></li>
                        <li><a href="#reviews" data-toggle="tab">Reviews</a></li>
                    </ul>
                </div>
                <!-- Tab panes -->
                <div class="tab-content col-xs-12">
                    <div class="pro-info-tab tab-pane active" id="more-info">
                        <p>{{ strip_tags($product->description) }}</p>
                    </div>
                    <div class="pro-info-tab tab-pane" id="data-sheet">
                        <table class="table-data-sheet">
                            <tbody>
                            <tr class="odd">
                                <td>Compositions</td>
                                <td>Cotton</td>
                            </tr>
                            <tr class="even">
                                <td>Styles</td>
                                <td>Casual</td>
                            </tr>
                            <tr class="odd">
                                <td>Properties</td>
                                <td>Short Sleeve</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="pro-info-tab tab-pane" id="reviews">
                        <a href="#">Be the first to write your review!</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- PAGE SECTION END -->

    <!-- PRODUCT SECTION START -->
    <div class="product-section section pb-100">
        <div class="container">
            <div class="row">
                <div class="section-title text-center col-xs-12 mb-70">
                    <h2>related products</h2>
                </div>
            </div>
            <div class="row">
                <div class="product-slider product-slider-4">

                    <!-- product-item start -->
                    @foreach($related_products as $related)
                    <div class="col-xs-12">
                        <div class="product-item text-center">
                            <div class="product-img">
                                <a class="image" href="{{ route('product.details', ['slug'=>$related->slug]) }}"><img src="{{ route('product.image', ['image'=>$related->photo]) }}" alt="{{ $related->name }}"/></a>
                                <a onclick="addToCart('{{ $related->min_order }}', '{{ $related->slug }}')"
                                   class="add-to-cart">add to cart</a>
                                <div class="action-btn fix">
                                    <a href="#" title="Wishlist"><i class="pe-7s-like"></i></a>
                                    <a href="{{ route('product.details', ['slug'=>$related->slug]) }}" title="Quickview"><i class="pe-7s-look"></i></a>
                                    <a onclick="addToCart('{{ $related->min_order }}', '{{ $related->slug }}')"
                                       title="Cart"><i class="pe-7s-cart"></i></a>
                                </div>
                            </div>
                            <div class="product-info">
                                <h5 class="title"><a href="{{ route('product.details', ['slug'=>$related->slug]) }}">{{ $related->name }}</a></h5>
                                <span class="price">
                                    <span class="new">${{ number_format($related->price, 2) }}</span>
                                    @if( $related->old_price )
                                    <span class="old">${{ number_format($related->old_price, 2) }}</span>
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
    </div>
    <!-- PRODUCT SECTION END -->
    @else
    <div class="product-section section pt-50 pb-50">
        <div class="container">
            <div class="row">
                <div class="section-title text-center col-xs-12">
                    <h2>Sorry! Product not found</h2>
                </div>
            </div>
            </div>
        </div>
    @endif


@endsection
