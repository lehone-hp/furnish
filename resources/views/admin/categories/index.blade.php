@extends('layouts.admin')
@section("title", "Categories")

@section('content')

    <!-- Page Inner -->
    <div class="page-inner">
        <div class="page-title">
            <h3 class="breadcrumb-header">Categories</h3>
        </div>
        <div id="main-wrapper">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="panel panel-white">
                        <div class="panel-heading clearfix">
                            <h4 class="panel-title">Product Categories</h4>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>N<sup>o</sup> of Products</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($categories as $category)
                                        <tr>
                                            <th scope="row">{{ $category->id }}</th>
                                            <td>{{ $category->name }}</td>
                                            <td>{{ $category->products->count() }}</td>
                                            <td><a href="#" class="btn btn-default btn-sm">View <span class="fa fa-eye"></span></a></td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="panel panel-white">
                        <div class="panel-heading clearfix">
                            <h4 class="panel-title">Add Product Category</h4>
                        </div>
                        <div class="panel-body">
                            <form action="{{ url('admin/categories') }}" method="POST">
                                {{ @csrf_field() }}
                                <div class="form-group">
                                    <label for="category">Category Name</label>
                                    <input type="text" class="form-control" id="category" name="category" placeholder="Category e.g Sofa" required>
                                </div>
                                <p class="clearfix"></p>
                                <p class="clearfix"></p>
                                <button type="submit" class="btn btn-primary btn-block">Add Category</button>
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
