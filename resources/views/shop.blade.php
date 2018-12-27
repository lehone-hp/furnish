@extends('layouts.app')
@section("title")
    Shop List
@endsection

@section('content')
    <!-- Page content -->
    <!-- PAGE BANNER SECTION -->
    <div class="page-banner-section section">
        <div class="container">
            <div class="row">
                <div class="page-banner-content col-xs-12">
                    <h2>Shop</h2>
                    <ul class="breadcrumb">
                        <li><a href="{{ route('index') }}">Home</a></li>
                        <li class="active">shop</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- END PAGE BANNER SECTION -->

    <!-- PAGE SECTION START -->
    <div class="page-section section pt-100 pb-60">
        <div class="container">
            <div class="row">
                @if(count($products) > 0)
                    <div class="col-lg-9 col-md-8 col-xs-12 float-right">
                        <div class="shop-bar mb-30">
                            <ul class="shop-tablist">
                                <li class="active"><a href="#product-grid" data-toggle="tab"><i class="fa fa-th"></i></a></li>
                                <li><a href="#product-list" data-toggle="tab"><i class="fa fa-list"></i></a></li>
                            </ul>
                            <div class="item-per-page">
                                <select>
                                    <option value="1">9 items/pages</option>
                                    <option value="2">12 items/pages</option>
                                    <option value="3">15 items/pages</option>
                                    <option value="4">18 items/pages</option>
                                </select>
                            </div>
                            <p>show item 1-9 of 36</p>
                        </div>
                        <div class="tab-content section">
                            <div class="tab-pane active row" id="product-grid">
                                <!-- product-item start -->
                                @foreach($products as $product)
                                <div class="col-lg-4 col-md-6 col-sm-4 col-xs-6 col-xs-wide mb-40">
                                    <div class="product-item text-center">
                                        <div class="product-img">
                                            <a class="image" href="{{ route('product.details', ['slug'=>$product->slug]) }}">
                                                <img src="{{ route('product.image', ['image'=>$product->photo]) }}" alt=""/></a>
                                            <a onclick="addToCart('{{ $product->min_order }}', '{{ $product->slug }}')"
                                               class="add-to-cart">add to cart</a>
                                            <div class="action-btn fix">
                                                <a href="#" title="Wishlist"><i class="pe-7s-like"></i></a>
                                                <a href="{{ route('product.details', ['slug'=>$product->slug]) }}" title="Quickview"><i class="pe-7s-look"></i></a>
                                                <a onclick="addToCart('{{ $product->min_order }}', '{{ $product->slug }}')"
                                                   title="Cart"><i class="pe-7s-cart"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <h5 class="title"><a href="{{ route('product.details', ['slug'=>$product->slug]) }}">{{ $product->name }}</a></h5>
                                            <span class="price">
                                                <span class="new">${{ number_format($product->price, 2) }}</span>
                                                @if( $product->old_price )
                                                    <span class="old">${{ number_format($product->old_price) }}</span>
                                                @endif
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                <!-- product-item end -->
                                <div class="page-pagination text-center col-xs-12 fix mb-40">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                                        <li class="active"><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">4</a></li>
                                        <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                                    </ul>
                                </div>

                            </div>
                            <div class="tab-pane row" id="product-list">
                                <!-- list product-item start -->
                                @foreach($products as $product)
                                <div class="col-xs-12 mb-40">
                                    <div class="list-product-item">
                                        <div class="list-product-img">
                                            <a class="image" href="{{ route('product.details', ['slug'=>$product->slug]) }}">
                                                <img src="{{ route('product.image', ['image'=>$product->photo]) }}" alt=""/></a>
                                        </div>
                                        <div class="list-product-info fix">
                                            <h2 class="title"><a href="{{ route('product.details', ['slug'=>$product->slug]) }}">
                                                    {{ $product->name }}</a></h2>
                                            <span class="price">
                                                <span class="new">${{ number_format($product->price, 2) }}</span>
                                                @if( $product->old_price )
                                                    <span class="old">${{ number_format($product->old_price) }}</span>
                                                @endif
                                            </span>
                                            <p>{{ substr(strip_tags($product->description), 0, 155).'....' }}</p>
                                            <div class="list-action-btn fix">
                                                <a href="#" title="Wishlist"><i class="pe-7s-like"></i></a>
                                                <a href="{{ route('product.details', ['slug'=>$product->slug]) }}" title="Quickview"><i class="pe-7s-look"></i></a>
                                                <a onclick="addToCart('{{ $product->min_order }}', '{{ $product->slug }}')"
                                                   title="Add To Cart"><i class="pe-7s-cart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                <!-- list product-item end -->
                                <div class="page-pagination text-center col-xs-12 fix mb-40">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                                        <li class="active"><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">4</a></li>
                                        <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>
                @else
                    <div class="col-lg-9 col-md-8 col-xs-12 float-right">
                        <div class="shop-bar mb-30">
                            <h2>Sorry! No product found under this category</h2>
                            <h3>Please try another category</h3>
                        </div>
                    </div>
                @endif
                <div class="col-lg-3 col-md-4 col-xs-12">

                    <div class="single-sidebar mb-40">
                        <form action="#" class="sidebar-search">
                            <input type="text" placeholder="Search here...">
                            <button class="submit"><i class="pe-7s-search"></i></button>
                        </form>
                    </div>

                    <div class="single-sidebar mb-40">
                        <h3 class="sidebar-title">Category</h3>
                        <ul class="category-sidebar">
                            @foreach($categories as $category)
                            <li><a href="{{ route('shop', ['cat'=>$category->slug]) }}">
                                    {{ $category->name }} ({{ count($category->products) }})</a></li>
                            @endforeach
                        </ul>
                    </div>

                    <div class="single-sidebar mb-40">
                        <h3 class="sidebar-title">Price</h3>
                        <div id="price-range"></div>
                    </div>

                    <div class="single-sidebar mb-40">
                        <h3 class="sidebar-title">Color</h3>
                        <ul class="color-sidebar">
                            <li><a href="#"><i style="background-color: #0000FF;"></i><span>blue</span></a></li>
                            <li><a href="#"><i style="background-color: #DCDCDA;"></i><span>gray</span></a></li>
                            <li><a href="#"><i style="background-color: #855439;"></i><span>brown</span></a></li>
                            <li><a href="#"><i style="background-color: #50B948;"></i><span>green</span></a></li>
                            <li><a href="#"><i style="background-color: #FF0000;"></i><span>red</span></a></li>
                            <li><a href="#"><i style="background-color: #FF6801;"></i><span>orange</span></a></li>
                            <li><a href="#"><i style="background-color: #000000;"></i><span>black</span></a></li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- PAGE SECTION END -->

@endsection
