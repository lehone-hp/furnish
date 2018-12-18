@extends('layouts.admin')
@section("title", "Categories")

@section('content')

    <!-- Page Inner -->
    <div class="page-inner">
        <div class="page-title">
            <h3 class="breadcrumb-header">Fill in the full details of your Product</h3>
        </div>
        <div id="main-wrapper">
            <div class="row">
                <div class="col-lg-9 col-md-12">
                    <div class="panel panel-white">
                        <div class="panel-heading clearfix">
                            <h4 class="panel-title">Add Product</h4>
                        </div>
                        <div class="panel-body">
                            <form action="{{ url('admin/products') }}" method="POST" enctype="multipart/form-data">
                                {{ @csrf_field() }}
                                <div class="form-group">
                                    <label for="category">Product Name</label>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Product Name e.g Cane Chair" required>
                                </div>

                                <div class="form-group">
                                    <label for="category_id" class="control-label">Product Category</label>
                                        <select style="margin-bottom:15px;" class="form-control" name="category_id" id="category_id" required>
                                            <option>Select Product category</option>
                                            @foreach($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                </div>
                                <div class="form-group">
                                    <label for="min_order">Minimum Order</label>
                                    <input type="number" min="1" step="1" class="form-control" value="1" id="min_order" name="min_order" placeholder="Price" required>
                                </div>
                                <div class="form-group">
                                    <label for="category">Product Image</label>
                                    <input type="file" class="form-control"  name="image" required>
                                </div>
                                <div class="form-group">
                                    <label for="price"  class=" col-md-4 control-label">Price</label>
                                    <label for="old_price" class=" col-md-4 control-label">Old Price</label>
                                    <label for="in_stock" class=" col-md-2 control-label">In Stock <small>(Availability)</small></label>
                                    <label for="in_stock" class=" col-md-2 control-label">Featured <small>(Appear as featured)</small></label>
                                    <div class="col-sm-12">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <input type="text" class="form-control" id="price" name="price" placeholder="Price" required>
                                            </div>
                                            <div class="col-md-4">
                                                <input type="text" class="form-control" id="old_price" name="old_price" placeholder="Old Price">
                                            </div>
                                            <div class="col-md-2">
                                                <input type="checkbox" class="form-control" id="in_stock" name="in_stock" checked>
                                            </div>
                                            <div class="col-md-2">
                                                <input type="checkbox" class="form-control" id="is_featured" name="is_featured">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <p class="clearfix"></p>

                                <div class="form-group">
                                    <label for="description" class="control-label">Product Description</label>
                                    <div class="col-sm-12">
                                      <textarea name="description" id="description" class="summernote"></textarea>
                                    </div>
                                </div>
                                <p class="clearfix"></p>

                                <button type="submit" class="btn btn-primary btn-large pull-right">Add Product</button>
                            </form>
                        </div>
                    </div>
                </div>

            </div><!-- Row -->
        </div><!-- Main Wrapper -->

        <div class="page-footer">
            <p>Made with <i class="fa fa-heart"></i> by Lehone & Rachmann</p>
        </div>

    </div>
    <!-- /Page Inner -->

@endsection
