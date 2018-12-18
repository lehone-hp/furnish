
@extends('layouts.admin')
@section("title")
    {{ $product->name }} | Admin
    @endSection


@section('content')

    <div class="page-inner">
        <div class="page-title">
            <h3 class="breadcrumb-header">{{ $product->name }}'s Details</h3>
        </div>
        <div id="main-wrapper">
            <div class="row">
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
                            <button type="button" onclick="event.preventDefault();document.getElementById('destroy-product').submit();" class="btn btn-danger btn-block">Delete Product</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="profile-timeline">
                        <ul class="list-unstyled">
                            <li class="timeline-item">
                                <div class="panel panel-white">
                                    <div class="panel-body">
                                        <div class="timeline-item-header">
                                            <img src="/products/images/{{$product->photo}}" alt="{{ $product->name }}">
                                            <p>{{ $product->name }}</p>
                                            <small><span style="font-weight: bolder">Registered</span> - {{ $product->created_at->diffForHumans() }}</small>
                                        </div>
                                        <div class="timeline-item-post">
                                            <p>
                                               {!! $product->description !!}
                                            </p>

                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="panel panel-white">
                        <div class="panel-heading clearfix">
                            <h4 class="panel-title">Edit Product</h4>
                        </div>
                        <div class="panel-body">
                            <form action="{{ route('products.update', $product->slug) }}" method="POST" enctype="multipart/form-data">
                                {{ @csrf_field() }}
                                {{ method_field('PATCH') }}
                                <div class="form-group">
                                    <label for="category">Product Name</label>
                                    <input type="text" class="form-control" id="name" value="{{ $product->name }}" name="name" placeholder="Product Name e.g Cane Chair" required>
                                </div>

                                <div class="form-group">
                                    <label for="category_id" class="control-label">Product Category</label>
                                    <select style="margin-bottom:15px;" class="form-control" name="category_id" id="category_id" required>
                                        <option>Select Product category</option>
                                        @foreach($categories as $category)
                                            <option value="{{ $category->id }}" @if($product->category_id == $category->id) selected @endif>{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="min_order">Minimum Order</label>
                                    <input type="number" min="1" step="1" class="form-control" value="{{ $product->min_order }}" id="min_order" name="min_order" placeholder="Price" required>
                                </div>
                                <div class="form-group">
                                    <label for="category">Product Image</label>
                                    <input type="file" class="form-control"  name="image">
                                </div>
                                <div class="form-group">
                                    <label for="price"  class=" col-md-5 control-label">Price</label>
                                    <label for="old_price" class=" col-md-5 control-label">Old Price</label>
                                    <label for="in_stock" class=" col-md-2 control-label">In Stock <small>(Availability)</small></label>
                                    <div class="col-sm-12">
                                        <div class="row">
                                            <div class="col-md-5">
                                                <input type="text" class="form-control" id="price" value="{{ $product->price }}" name="price" placeholder="Price" required>
                                            </div>
                                            <div class="col-md-5">
                                                <input type="text" class="form-control" id="old_price" value="{{ $product->old_price }}" name="old_price" placeholder="Old Price">
                                            </div>
                                            <div class="col-md-2">
                                                <input type="checkbox" class="form-control" id="in_stock" name="in_stock" @if($product->in_stock == 1) checked @endif>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <p class="clearfix"></p>

                                <div class="form-group">
                                    <label for="description" class="control-label">Product Description</label>
                                    <div class="col-sm-12">
                                        <textarea name="description" id="description" class="summernote">{{ $product->description }}</textarea>
                                    </div>
                                </div>
                                <p class="clearfix"></p>
                                <button type="submit" class="btn btn-primary btn-large pull-right">Update Product</button>
                            </form>
                        </div>
                        <form id="destroy-product" action="{{ route('products.destroy', $product->slug) }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                        </form>
                    </div>
                </div>
            </div><!-- Row -->
        </div><!-- Main Wrapper -->
        <div class="page-footer">
            <p>Made with <i class="fa fa-heart"></i> by Lehone & Rachmann</p>
        </div>
    </div>

    @endSection