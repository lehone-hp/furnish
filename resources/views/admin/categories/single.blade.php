@extends('layouts.admin')
@section("title")
        Category -{{ $category->name }}
    @endSection

@section('content')

    <!-- Page Inner -->
    <div class="page-inner">
        <div class="page-title">
            <button class="btn btn-large btn-danger pull-right" onclick="event.preventDefault();document.getElementById('destroy-category').submit();">Delete Category</button>
            <h3 class="breadcrumb-header">Category - <span class="text-primary">{{ $category->name }}</span></h3>
        </div>
        <div id="main-wrapper">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="panel panel-white">
                        <div class="panel-heading clearfix">
                            <h4 class="panel-title">Products</h4>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Price</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($category->products as $product)
                                        <tr>
                                            <th scope="row">{{ $category->id }}</th>
                                            <td>{{ $product->name }}</td>
                                            <td>{{ $product->price }}</td>
                                            <td><a href="/admin/products/{{ $product->slug }}" class="btn btn-default btn-sm">View <span class="fa fa-eye"></span></a></td>
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
                            <h4 class="panel-title">Edit Category</h4>
                        </div>
                        <div class="panel-body">
                            <form action="{{ route('categories.update', $category->id) }}" method="POST">
                                {{ @csrf_field() }}
                                {{ method_field('PATCH') }}
                                <div class="form-group">
                                    <label for="category">Edit Category</label>
                                    <input type="text" class="form-control" id="category" name="category" value="{{ $category->name }}" placeholder="Category e.g Sofa" required>
                                </div>
                                <p class="clearfix"></p>
                                <p class="clearfix"></p>
                                <button type="submit" class="btn btn-primary btn-block">Edit Category</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div><!-- Row -->
        </div><!-- Main Wrapper -->

        <!-- form to delete category -->
        <form id="destroy-category" action="{{ route('categories.destroy', $category->id) }}" method="POST" style="display: none;">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
        </form>

        <div class="page-footer">
            <p>Made with <i class="fa fa-heart"></i> by Lehone & Rachmann</p>
        </div>

    </div>
    <!-- /Page Inner -->

@endsection
