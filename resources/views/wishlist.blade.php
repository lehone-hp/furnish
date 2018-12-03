@extends('layouts.app')
@section("title")
    Page Title
@endsection

@section('css')
    <style>

    </style>
@endsection

@section('content')
    <!-- Page content -->
    <!-- PAGE BANNER SECTION -->
    <div class="page-banner-section section">
        <div class="container">
            <div class="row">
                <div class="page-banner-content col-xs-12">
                    <h2>Wishlist</h2>
                    <ul class="breadcrumb">
                        <li><a href="{{ route('index') }}">Home</a></li>
                        <li class="active">Wishlist</li>
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
                <form action="#">
                    <div class="col-xs-12">
                        <div class="wishlist-table table-responsive mb-40">
                            <table>
                                <thead>
                                <tr>
                                    <th class="pro-remove">Remove</th>
                                    <th class="pro-thumbnail">Image</th>
                                    <th class="pro-title">Product</th>
                                    <th class="pro-price">Unit Price</th>
                                    <th class="pro-stock-stauts">Stock Stauts</th>
                                    <th class="pro-add-to-cart">Add to Cart</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td class="pro-remove"><a href="#">×</a></td>
                                    <td class="pro-thumbnail"><a href="#"><img src="img/product/1.jpg" alt="" /></a></td>
                                    <td class="pro-title"><a href="#">Le Parc Minotti Chair</a></td>
                                    <td class="pro-price"><span class="amount">$169.00</span></td>
                                    <td class="pro-stock-stauts"><span class="in-stock">in stock</span></td>
                                    <td class="pro-add-to-cart"><a href="#" class="add-to-cart">add to cart</a></td>
                                </tr>
                                <tr>
                                    <td class="pro-remove"><a href="#">×</a></td>
                                    <td class="pro-thumbnail"><a href="#"><img src="img/product/2.jpg" alt="" /></a></td>
                                    <td class="pro-title"><a href="#">DSR Eiffel chair</a></td>
                                    <td class="pro-price"><span class="amount">$137.00</span></td>
                                    <td class="pro-stock-stauts"><span class="out-stock">out stock</span></td>
                                    <td class="pro-add-to-cart"><a href="#" class="add-to-cart">add to cart</a></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- PAGE SECTION END -->
@endsection

@section("footer-script")
    <script>
        // footer script
    </script>
@endsection