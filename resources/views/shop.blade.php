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
                            <div class="col-lg-4 col-md-6 col-sm-4 col-xs-6 col-xs-wide mb-40">
                                <div class="product-item text-center">
                                    <div class="product-img">
                                        <a class="image" href="product-details.html"><img src="img/product/1.jpg" alt=""/></a>
                                        <a href="#" class="add-to-cart">add to cart</a>
                                        <div class="action-btn fix">
                                            <a href="#" title="Wishlist"><i class="pe-7s-like"></i></a>
                                            <a href="#" data-toggle="modal"  data-target="#productModal" title="Quickview"><i class="pe-7s-look"></i></a>
                                            <a href="#" title="Compare"><i class="pe-7s-repeat"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="title"><a href="product-details.html">Le Parc Minotti Chair</a></h5>
                                        <span class="price"><span class="new">$169.00</span></span>
                                    </div>
                                </div>
                            </div>
                            <!-- product-item end -->
                            <!-- product-item start -->
                            <div class="col-lg-4 col-md-6 col-sm-4 col-xs-6 col-xs-wide mb-40">
                                <div class="product-item text-center">
                                    <div class="product-img">
                                        <a class="image" href="product-details.html"><img src="img/product/2.jpg" alt=""/></a>
                                        <a href="#" class="add-to-cart">add to cart</a>
                                        <div class="action-btn fix">
                                            <a href="#" title="Wishlist"><i class="pe-7s-like"></i></a>
                                            <a href="#" data-toggle="modal"  data-target="#productModal" title="Quickview"><i class="pe-7s-look"></i></a>
                                            <a href="#" title="Compare"><i class="pe-7s-repeat"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="title"><a href="product-details.html">DSR Eiffel chair</a></h5>
                                        <span class="price"><span class="new">$137.00</span><span class="old">$115.00</span></span>
                                    </div>
                                </div>
                            </div>
                            <!-- product-item end -->
                            <!-- product-item start -->
                            <div class="col-lg-4 col-md-6 col-sm-4 col-xs-6 col-xs-wide mb-40">
                                <div class="product-item text-center">
                                    <div class="product-img">
                                        <a class="image" href="product-details.html"><img src="img/product/3.jpg" alt=""/></a>
                                        <a href="#" class="add-to-cart">add to cart</a>
                                        <div class="action-btn fix">
                                            <a href="#" title="Wishlist"><i class="pe-7s-like"></i></a>
                                            <a href="#" data-toggle="modal"  data-target="#productModal" title="Quickview"><i class="pe-7s-look"></i></a>
                                            <a href="#" title="Compare"><i class="pe-7s-repeat"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="title"><a href="product-details.html">3d laser cut models</a></h5>
                                        <span class="price"><span class="new">$185.00</span><span class="old">$125..00</span></span>
                                    </div>
                                </div>
                            </div>
                            <!-- product-item end -->
                            <!-- product-item start -->
                            <div class="col-lg-4 col-md-6 col-sm-4 col-xs-6 col-xs-wide mb-40">
                                <div class="product-item text-center">
                                    <div class="product-img">
                                        <a class="image" href="product-details.html"><img src="img/product/4.jpg" alt=""/></a>
                                        <a href="#" class="add-to-cart">add to cart</a>
                                        <div class="action-btn fix">
                                            <a href="#" title="Wishlist"><i class="pe-7s-like"></i></a>
                                            <a href="#" data-toggle="modal"  data-target="#productModal" title="Quickview"><i class="pe-7s-look"></i></a>
                                            <a href="#" title="Compare"><i class="pe-7s-repeat"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="title"><a href="product-details.html">carl hansen ch25</a></h5>
                                        <span class="price"><span class="new">$245.00</span></span>
                                    </div>
                                </div>
                            </div>
                            <!-- product-item end -->
                            <!-- product-item start -->
                            <div class="col-lg-4 col-md-6 col-sm-4 col-xs-6 col-xs-wide mb-40">
                                <div class="product-item text-center">
                                    <div class="product-img">
                                        <a class="image" href="product-details.html"><img src="img/product/5.jpg" alt=""/></a>
                                        <a href="#" class="add-to-cart">add to cart</a>
                                        <div class="action-btn fix">
                                            <a href="#" title="Wishlist"><i class="pe-7s-like"></i></a>
                                            <a href="#" data-toggle="modal"  data-target="#productModal" title="Quickview"><i class="pe-7s-look"></i></a>
                                            <a href="#" title="Compare"><i class="pe-7s-repeat"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="title"><a href="product-details.html">DSR Eiffel chair</a></h5>
                                        <span class="price"><span class="new">$137.00</span><span class="old">$115.00</span></span>
                                    </div>
                                </div>
                            </div>
                            <!-- product-item end -->
                            <!-- product-item start -->
                            <div class="col-lg-4 col-md-6 col-sm-4 col-xs-6 col-xs-wide mb-40">
                                <div class="product-item text-center">
                                    <div class="product-img">
                                        <a class="image" href="product-details.html"><img src="img/product/6.jpg" alt=""/></a>
                                        <a href="#" class="add-to-cart">add to cart</a>
                                        <div class="action-btn fix">
                                            <a href="#" title="Wishlist"><i class="pe-7s-like"></i></a>
                                            <a href="#" data-toggle="modal"  data-target="#productModal" title="Quickview"><i class="pe-7s-look"></i></a>
                                            <a href="#" title="Compare"><i class="pe-7s-repeat"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="title"><a href="product-details.html">Retro chairs</a></h5>
                                        <span class="price"><span class="new">$169.00</span></span>
                                    </div>
                                </div>
                            </div>
                            <!-- product-item end -->
                            <!-- product-item start -->
                            <div class="col-lg-4 col-md-6 col-sm-4 col-xs-6 col-xs-wide mb-40">
                                <div class="product-item text-center">
                                    <div class="product-img">
                                        <a class="image" href="product-details.html"><img src="img/product/7.jpg" alt=""/></a>
                                        <a href="#" class="add-to-cart">add to cart</a>
                                        <div class="action-btn fix">
                                            <a href="#" title="Wishlist"><i class="pe-7s-like"></i></a>
                                            <a href="#" data-toggle="modal"  data-target="#productModal" title="Quickview"><i class="pe-7s-look"></i></a>
                                            <a href="#" title="Compare"><i class="pe-7s-repeat"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="title"><a href="product-details.html">kichler pendant light</a></h5>
                                        <span class="price"><span class="new">$185.00</span><span class="old">$125..00</span></span>
                                    </div>
                                </div>
                            </div>
                            <!-- product-item end -->
                            <!-- product-item start -->
                            <div class="col-lg-4 col-md-6 col-sm-4 col-xs-6 col-xs-wide mb-40">
                                <div class="product-item text-center">
                                    <div class="product-img">
                                        <a class="image" href="product-details.html"><img src="img/product/8.jpg" alt=""/></a>
                                        <a href="#" class="add-to-cart">add to cart</a>
                                        <div class="action-btn fix">
                                            <a href="#" title="Wishlist"><i class="pe-7s-like"></i></a>
                                            <a href="#" data-toggle="modal"  data-target="#productModal" title="Quickview"><i class="pe-7s-look"></i></a>
                                            <a href="#" title="Compare"><i class="pe-7s-repeat"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="title"><a href="product-details.html">pendant lights</a></h5>
                                        <span class="price"><span class="new">$245.00</span></span>
                                    </div>
                                </div>
                            </div>
                            <!-- product-item end -->
                            <!-- product-item start -->
                            <div class="col-lg-4 col-md-6 col-sm-4 col-xs-6 col-xs-wide mb-40">
                                <div class="product-item text-center">
                                    <div class="product-img">
                                        <a class="image" href="product-details.html"><img src="img/product/9.jpg" alt=""/></a>
                                        <a href="#" class="add-to-cart">add to cart</a>
                                        <div class="action-btn fix">
                                            <a href="#" title="Wishlist"><i class="pe-7s-like"></i></a>
                                            <a href="#" data-toggle="modal"  data-target="#productModal" title="Quickview"><i class="pe-7s-look"></i></a>
                                            <a href="#" title="Compare"><i class="pe-7s-repeat"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="title"><a href="product-details.html">midcentury pendant light</a></h5>
                                        <span class="price"><span class="new">$245.00</span></span>
                                    </div>
                                </div>
                            </div>
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
                            <div class="col-xs-12 mb-40">
                                <div class="list-product-item">
                                    <div class="list-product-img">
                                        <a class="image" href="product-details.html"><img src="img/product/1.jpg" alt=""/></a>
                                    </div>
                                    <div class="list-product-info fix">
                                        <h2 class="title"><a href="product-details.html">Le Parc Minotti Chair</a></h2>
                                        <span class="price"><span class="new">$169.00</span></span>
                                        <p>Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram.</p>
                                        <div class="list-action-btn fix">
                                            <a href="#" class="add-to-cart">add to cart</a>
                                            <a href="#" title="Wishlist"><i class="pe-7s-like"></i></a>
                                            <a href="#" data-toggle="modal"  data-target="#productModal" title="Quickview"><i class="pe-7s-look"></i></a>
                                            <a href="#" title="Compare"><i class="pe-7s-repeat"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- list product-item end -->
                            <!-- list product-item start -->
                            <div class="col-xs-12 mb-40">
                                <div class="list-product-item">
                                    <div class="list-product-img">
                                        <a class="image" href="product-details.html"><img src="img/product/2.jpg" alt=""/></a>
                                    </div>
                                    <div class="list-product-info fix">
                                        <h2 class="title"><a href="product-details.html">DSR Eiffel chair</a></h2>
                                        <span class="price"><span class="new">$137.00</span><span class="old">$115.00</span></span>
                                        <p>Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram.</p>
                                        <div class="list-action-btn fix">
                                            <a href="#" class="add-to-cart">add to cart</a>
                                            <a href="#" title="Wishlist"><i class="pe-7s-like"></i></a>
                                            <a href="#" data-toggle="modal"  data-target="#productModal" title="Quickview"><i class="pe-7s-look"></i></a>
                                            <a href="#" title="Compare"><i class="pe-7s-repeat"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- list product-item end -->
                            <!-- list product-item start -->
                            <div class="col-xs-12 mb-40">
                                <div class="list-product-item">
                                    <div class="list-product-img">
                                        <a class="image" href="product-details.html"><img src="img/product/3.jpg" alt=""/></a>
                                    </div>
                                    <div class="list-product-info fix">
                                        <h2 class="title"><a href="product-details.html">3d laser cut models</a></h2>
                                        <span class="price"><span class="new">$185.00</span><span class="old">$125..00</span></span>
                                        <p>Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram.</p>
                                        <div class="list-action-btn fix">
                                            <a href="#" class="add-to-cart">add to cart</a>
                                            <a href="#" title="Wishlist"><i class="pe-7s-like"></i></a>
                                            <a href="#" data-toggle="modal"  data-target="#productModal" title="Quickview"><i class="pe-7s-look"></i></a>
                                            <a href="#" title="Compare"><i class="pe-7s-repeat"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- list product-item end -->
                            <!-- list product-item start -->
                            <div class="col-xs-12 mb-40">
                                <div class="list-product-item">
                                    <div class="list-product-img">
                                        <a class="image" href="product-details.html"><img src="img/product/4.jpg" alt=""/></a>
                                    </div>
                                    <div class="list-product-info fix">
                                        <h2 class="title"><a href="product-details.html">carl hansen ch25</a></h2>
                                        <span class="price"><span class="new">$245.00</span></span>
                                        <p>Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram.</p>
                                        <div class="list-action-btn fix">
                                            <a href="#" class="add-to-cart">add to cart</a>
                                            <a href="#" title="Wishlist"><i class="pe-7s-like"></i></a>
                                            <a href="#" data-toggle="modal"  data-target="#productModal" title="Quickview"><i class="pe-7s-look"></i></a>
                                            <a href="#" title="Compare"><i class="pe-7s-repeat"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- list product-item end -->
                            <!-- list product-item start -->
                            <div class="col-xs-12 mb-40">
                                <div class="list-product-item">
                                    <div class="list-product-img">
                                        <a class="image" href="product-details.html"><img src="img/product/6.jpg" alt=""/></a>
                                    </div>
                                    <div class="list-product-info fix">
                                        <h2 class="title"><a href="product-details.html">Retro chairs</a></h2>
                                        <span class="price"><span class="new">$169.00</span></span>
                                        <p>Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram.</p>
                                        <div class="list-action-btn fix">
                                            <a href="#" class="add-to-cart">add to cart</a>
                                            <a href="#" title="Wishlist"><i class="pe-7s-like"></i></a>
                                            <a href="#" data-toggle="modal"  data-target="#productModal" title="Quickview"><i class="pe-7s-look"></i></a>
                                            <a href="#" title="Compare"><i class="pe-7s-repeat"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
                            <li><a href="#">Chairs</a></li>
                            <li><a href="#">Tables</a></li>
                            <li><a href="#">Sofas</a></li>
                            <li><a href="#">Lights & Lamps</a></li>
                            <li><a href="#">Decorations</a></li>
                            <li><a href="#">Others</a></li>
                        </ul>
                    </div>

                    <div class="single-sidebar mb-40">
                        <h3 class="sidebar-title">Category</h3>
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

                    <div class="single-sidebar mb-40">
                        <h3 class="sidebar-title">Popular Tags</h3>
                        <div class="tag-cloud">
                            <a href="#">Chairs</a>
                            <a href="#">Tables</a>
                            <a href="#">Sofas</a>
                            <a href="#">Lights</a>
                            <a href="#">Lamps</a>
                            <a href="#">curtains</a>
                            <a href="#">cabinets</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- PAGE SECTION END -->

@endsection
