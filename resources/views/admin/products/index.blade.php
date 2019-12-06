@extends('layouts.admin')
@section("title", "Products | Admin")

@section('content')
    <div class="page-inner">
        <div class="page-title">
            <h3 class="breadcrumb-header">Products</h3>
        </div>
        <div id="main-wrapper">
            <div class="row">

                @foreach($products as $product)

                <div class="col-md-4">
                    <div class="panel panel-white">
                        <div class="panel-body user-profile-panel">
                            <div class="user-verify">
                                <img src="/products/images/{{$product->photo}}" class="img-responsive center-block" alt="{{ $product->name }}" style="height: 250px">
                                <img src="@if($product->in_stock == 0) /img/outofstock.png @else /img/instock.png @endif" class="img-circle verify-status" style="width: 80px;height: 80px;">
                            </div>
                            <h4 class="text-center m-t-lg">{{ $product->name }}</h4>
                            <p class="text-center">{{ $product->email }}</p>
                            <hr>
                            <ul class="list-unstyled text-left">
                                <li><p><i class="fa fa-tags m-r-xs"></i>{{ $product->category->name }} @if($product->featured == 1) &nbsp;&nbsp; <span class="fa fa-star" style="color: goldenrod"></span><span class="fa fa-star" style="color: goldenrod"></span><span class="fa fa-star" style="color: goldenrod"></span><span class="fa fa-star" style="color: goldenrod"></span><span class="fa fa-star" style="color: goldenrod"></span>  @endif</p></li>
                                <li><p class="text-primary"><i class="fa fa-money m-r-xs"></i>{{ $product->price }} FCFA @if( $product->old_price != null)<small><strike>{{ $product->old_price }} FCFA</strike></small> @endif</li>
                            </ul>
                            <hr>
                            <a href="/admin/products/{{ $product->slug }}" class="btn btn-info btn-block">View Product</a>
                        </div>
                    </div>
                </div>
                    @endforeach
            </div><!-- Row -->
        </div><!-- Main Wrapper -->

        <div class="page-footer">
            <p>Made with <i class="fa fa-heart"></i> by Lehone & Rachmann</p>
        </div>
    </div>

    @endSection