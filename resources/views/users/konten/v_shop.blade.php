@extends('users/core/main')
@extends('users/core/header')
@extends('users/core/footer')

@section('title', 'Halaman Shop')

@section('konten')
    <!-- breadcrumb area start -->
    <div class="breadcrumb-area breadcrumb-img bg-img" data-bg="assets/img/banner/shop.jpg">
    </div>
    <!-- breadcrumb area end -->

    <!-- page main wrapper start -->
    <div class="shop-main-wrapper section-padding">
        <div class="container">
            <div class="row">
                <!-- sidebar area start -->
                <div class="col-lg-3 order-2 order-lg-1">
                    <aside class="sidebar-wrapper">
                        <!-- single sidebar start -->
                        <div class="sidebar-single">
                            <h6 class="sidebar-title">Categories</h6>
                            <div class="sidebar-body">
                                <ul class="checkbox-container search-list">
                                    <li>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                                            <label class="custom-control-label" for="customCheck1">Mens (3)</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck2">
                                            <label class="custom-control-label" for="customCheck2">Womens (4)</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck3">
                                            <label class="custom-control-label" for="customCheck3">Kids (15)</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck4">
                                            <label class="custom-control-label" for="customCheck4">Sports (10)</label>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- single sidebar end -->

                        <!-- single sidebar start -->
                        <div class="sidebar-single">
                            <h6 class="sidebar-title">Brand</h6>
                            <div class="sidebar-body">
                                <ul class="checkbox-container search-list">
                                    <li>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck5">
                                            <label class="custom-control-label" for="customCheck5">Studio (3)</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck6">
                                            <label class="custom-control-label" for="customCheck6">Hastech (4)</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck7">
                                            <label class="custom-control-label" for="customCheck7">Quickiin (15)</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck8">
                                            <label class="custom-control-label" for="customCheck8">Graphic corner (10)</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck9">
                                            <label class="custom-control-label" for="customCheck9">devItems (12)</label>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- single sidebar end -->

                        <!-- single sidebar start -->
                        <div class="sidebar-single">
                            <h6 class="sidebar-title">Categories</h6>
                            <div class="sidebar-body">
                                <ul class="radio-container search-list">
                                    <li>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" id="customCheck50">
                                            <label class="custom-control-label" for="customCheck50">$7.00 - $9.00 (2)</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" id="customCheck51">
                                            <label class="custom-control-label" for="customCheck51">$10.00 - $12.00 (3)</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" id="customCheck52">
                                            <label class="custom-control-label" for="customCheck52">$17.00 - $20.00 (3)</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" id="customCheck53">
                                            <label class="custom-control-label" for="customCheck53"> $21.00 - $22.00 (1)</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" id="customCheck54">
                                            <label class="custom-control-label" for="customCheck54">$25.00 - $30.00 (3)</label>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- single sidebar end -->

                        <!-- single sidebar start -->
                        <div class="sidebar-single">
                            <h6 class="sidebar-title">color</h6>
                            <div class="sidebar-body">
                                <ul class="checkbox-container search-list">
                                    <li>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck11">
                                            <label class="custom-control-label" for="customCheck11">green (5)</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck12">
                                            <label class="custom-control-label" for="customCheck12">black (20)</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck13">
                                            <label class="custom-control-label" for="customCheck13">red (6)</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck14">
                                            <label class="custom-control-label" for="customCheck14">blue (8)</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck15">
                                            <label class="custom-control-label" for="customCheck15">pink (4)</label>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- single sidebar end -->

                        <!-- single sidebar start -->
                        <div class="sidebar-single">
                            <h6 class="sidebar-title">size</h6>
                            <div class="sidebar-body">
                                <ul class="checkbox-container search-list">
                                    <li>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck111">
                                            <label class="custom-control-label" for="customCheck111">S (4)</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck222">
                                            <label class="custom-control-label" for="customCheck222">M (5)</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck333">
                                            <label class="custom-control-label" for="customCheck333">L (7)</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck444">
                                            <label class="custom-control-label" for="customCheck444">XL (3)</label>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- single sidebar end -->

                        <!-- single sidebar start -->
                        <div class="sidebar-banner">
                            <div class="banner-thumb">
                                <a href="#">
                                    <img src="assets/img/banner/sidebar-banner.jpg" alt="">
                                </a>
                            </div>
                        </div>
                        <!-- single sidebar end -->
                    </aside>
                </div>
                <!-- sidebar area end -->

                <!-- shop main wrapper start -->
                <div class="col-lg-9 order-1 order-lg-2">
                    <div class="shop-product-wrapper">
                        <!-- shop product top wrap start -->
                        <div class="shop-top-bar">
                            <div class="row align-items-center">
                                <div class="col-lg-7 col-md-6 order-2 order-md-1">
                                    <div class="top-bar-left">
                                        <div class="product-view-mode">
                                            <a class="active" href="#" data-target="grid-view" data-toggle="tooltip" title="Grid View"><i class="fa fa-th"></i></a>
                                            <a href="#" data-target="list-view" data-toggle="tooltip" title="List View"><i class="fa fa-list"></i></a>
                                        </div>
                                        <div class="product-amount">
                                            <p>Showing 1–16 of 21 results</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-6 order-1 order-md-2">
                                    <div class="top-bar-right">
                                        <div class="product-short">
                                            <p>Sort By : </p>
                                            <select class="nice-select" name="sortby">
                                                <option value="trending">Relevance</option>
                                                <option value="sales">Name (A - Z)</option>
                                                <option value="sales">Name (Z - A)</option>
                                                <option value="rating">Price (Low &gt; High)</option>
                                                <option value="date">Rating (Lowest)</option>
                                                <option value="price-asc">Model (A - Z)</option>
                                                <option value="price-asc">Model (Z - A)</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- shop product top wrap start -->

                        <!-- product item list wrapper start -->
                        <div class="shop-product-wrap grid-view row mbn-30">
                            <!-- product single item start -->
                            <div class="col-md-4 col-sm-6">
                                <!-- product grid start -->
                                <div class="product-item">
                                    <div class="product-thumb">
                                        <a href="product-details.html">
                                            <img src="assets/img/product/product-1.jpg" alt="product thumb">
                                        </a>
                                        <div class="button-group">
                                            <a href="wishlist.html" data-toggle="tooltip" title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                            <a href="#" data-toggle="modal" data-target="#quick_view"><span data-toggle="tooltip"  title="Quick View"><i class="fa fa-eye"></i></span></a>
                                        </div>
                                        <div class="product-label">
                                            <span>new</span>
                                        </div>
                                        <div class="discount-label">
                                            <span>-10% Off</span>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-caption">
                                            <h6 class="product-name">
                                                <a href="product-details.html">Quickiin Mens shoes</a>
                                            </h6>
                                            <div class="price-box">
                                                <span class="price-old"><del>$90.00</del></span>
                                                <span class="price-regular">$70.00</span>
                                            </div>
                                            <a class="add-to-cart" href="{{ url('Cart') }}"><i class="fa fa-shopping-cart"></i></a>
                                        </div>
                                        <div class="ratings">
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <!-- product grid end -->

                                <!-- product list item end -->
                                <div class="product-list-item">
                                    <div class="product-thumb">
                                        <a href="product-details.html">
                                            <img src="assets/img/product/product-1.jpg" alt="product thumb">
                                        </a>
                                        <div class="button-group">
                                            <a href="wishlist.html" data-toggle="tooltip" title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                            <a href="#" data-toggle="modal" data-target="#quick_view"><span data-toggle="tooltip"  title="Quick View"><i class="fa fa-eye"></i></span></a>
                                        </div>
                                        <div class="product-label">
                                            <span>new</span>
                                        </div>
                                        <div class="discount-label">
                                            <span>-10% Off</span>
                                        </div>
                                    </div>
                                    <div class="product-content-list">
                                        <h4 class="product-name"><a href="product-details.html">Quickiin Mens shoes</a></h4>
                                        <div class="ratings">
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                        </div>
                                        <div class="price-box">
                                            <span class="price-old"><del>$29.99</del></span>
                                            <span class="price-regular">$50.00</span>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde perspiciatis
                                            quod numquam, sit fugiat, deserunt ipsa mollitia sunt quam.
                                        </p>
                                        <a href="{{ url('Cart') }}" class="btn btn-large hover-color">Add To Cart</a>
                                    </div>
                                </div>
                                <!-- product list item end -->
                            </div>
                            <!-- product single item start -->

                            <!-- product single item start -->
                            <div class="col-md-4 col-sm-6">
                                <!-- product grid start -->
                                <div class="product-item">
                                    <div class="product-thumb">
                                        <a href="product-details.html">
                                            <img src="assets/img/product/product-2.jpg" alt="product thumb">
                                        </a>
                                        <div class="button-group">
                                            <a href="wishlist.html" data-toggle="tooltip" title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                            <a href="#" data-toggle="modal" data-target="#quick_view"><span data-toggle="tooltip"  title="Quick View"><i class="fa fa-eye"></i></span></a>
                                        </div>
                                        <div class="product-label">
                                            <span>new</span>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-caption">
                                            <h6 class="product-name">
                                                <a href="product-details.html">Womens High Hills</a>
                                            </h6>
                                            <div class="price-box">
                                                <span class="price-old"><del>$85.00</del></span>
                                                <span class="price-regular">$60.00</span>
                                            </div>
                                            <a class="add-to-cart" href="{{ url('Cart') }}"><i class="fa fa-shopping-cart"></i></a>
                                        </div>
                                        <div class="ratings">
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <!-- product grid end -->

                                <!-- product list item end -->
                                <div class="product-list-item">
                                    <div class="product-thumb">
                                        <a href="product-details.html">
                                            <img src="assets/img/product/product-2.jpg" alt="product thumb">
                                        </a>
                                        <div class="button-group">
                                            <a href="wishlist.html" data-toggle="tooltip" title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                            <a href="#" data-toggle="modal" data-target="#quick_view"><span data-toggle="tooltip"  title="Quick View"><i class="fa fa-eye"></i></span></a>
                                        </div>
                                        <div class="product-label">
                                            <span>new</span>
                                        </div>
                                    </div>
                                    <div class="product-content-list">
                                        <h4 class="product-name"><a href="product-details.html">Womens High Hills</a></h4>
                                        <div class="ratings">
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                        </div>
                                        <div class="price-box">
                                            <span class="price-old"><del>$85.00</del></span>
                                            <span class="price-regular">$70.00</span>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde perspiciatis
                                            quod numquam, sit fugiat, deserunt ipsa mollitia sunt quam.
                                        </p>
                                        <a href="{{ url('Cart') }}" class="btn btn-large hover-color">Add To Cart</a>
                                    </div>
                                </div>
                                <!-- product list item end -->
                            </div>
                            <!-- product single item start -->

                            <!-- product single item start -->
                            <div class="col-md-4 col-sm-6">
                                <!-- product grid start -->
                                <div class="product-item">
                                    <div class="product-thumb">
                                        <a href="product-details.html">
                                            <img src="assets/img/product/product-3.jpg" alt="product thumb">
                                        </a>
                                        <div class="button-group">
                                            <a href="wishlist.html" data-toggle="tooltip" title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                            <a href="#" data-toggle="modal" data-target="#quick_view"><span data-toggle="tooltip"  title="Quick View"><i class="fa fa-eye"></i></span></a>
                                        </div>
                                        <div class="product-label">
                                            <span>new</span>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-caption">
                                            <h6 class="product-name">
                                                <a href="product-details.html">Leather Mens slippers</a>
                                            </h6>
                                            <div class="price-box">
                                                <span class="price-old"><del>$70.00</del></span>
                                                <span class="price-regular">$50.00</span>
                                            </div>
                                            <a class="add-to-cart" href="{{ url('Cart') }}"><i class="fa fa-shopping-cart"></i></a>
                                        </div>
                                        <div class="ratings">
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <!-- product grid end -->

                                <!-- product list item end -->
                                <div class="product-list-item">
                                    <div class="product-thumb">
                                        <a href="product-details.html">
                                            <img src="assets/img/product/product-3.jpg" alt="product thumb">
                                        </a>
                                        <div class="button-group">
                                            <a href="wishlist.html" data-toggle="tooltip" title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                            <a href="#" data-toggle="modal" data-target="#quick_view"><span data-toggle="tooltip"  title="Quick View"><i class="fa fa-eye"></i></span></a>
                                        </div>
                                        <div class="product-label">
                                            <span>new</span>
                                        </div>
                                    </div>
                                    <div class="product-content-list">
                                        <h4 class="product-name"><a href="product-details.html">QLeather Mens slippers</a></h4>
                                        <div class="ratings">
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                        </div>
                                        <div class="price-box">
                                            <span class="price-old"><del>$90</del></span>
                                            <span class="price-regular">$60.00</span>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde perspiciatis
                                            quod numquam, sit fugiat, deserunt ipsa mollitia sunt quam.
                                        </p>
                                        <a href="{{ url('Cart') }}" class="btn btn-large hover-color">Add To Cart</a>
                                    </div>
                                </div>
                                <!-- product list item end -->
                            </div>
                            <!-- product single item start -->

                            <!-- product single item start -->
                            <div class="col-md-4 col-sm-6">
                                <!-- product grid start -->
                                <div class="product-item">
                                    <div class="product-thumb">
                                        <a href="product-details.html">
                                            <img src="assets/img/product/product-4.jpg" alt="product thumb">
                                        </a>
                                        <div class="button-group">
                                            <a href="wishlist.html" data-toggle="tooltip" title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                            <a href="#" data-toggle="modal" data-target="#quick_view"><span data-toggle="tooltip"  title="Quick View"><i class="fa fa-eye"></i></span></a>
                                        </div>
                                        <div class="product-label">
                                            <span>new</span>
                                        </div>
                                        <div class="discount-label">
                                            <span>-10% Off</span>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-caption">
                                            <h6 class="product-name">
                                                <a href="product-details.html">Rexpo Womens shoes</a>
                                            </h6>
                                            <div class="price-box">
                                                <span class="price-regular">$70.00</span>
                                            </div>
                                            <a class="add-to-cart" href="{{ url('Cart') }}"><i class="fa fa-shopping-cart"></i></a>
                                        </div>
                                        <div class="ratings">
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <!-- product grid end -->

                                <!-- product list item end -->
                                <div class="product-list-item">
                                    <div class="product-thumb">
                                        <a href="product-details.html">
                                            <img src="assets/img/product/product-4.jpg" alt="product thumb">
                                        </a>
                                        <div class="button-group">
                                            <a href="wishlist.html" data-toggle="tooltip" title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                            <a href="#" data-toggle="modal" data-target="#quick_view"><span data-toggle="tooltip"  title="Quick View"><i class="fa fa-eye"></i></span></a>
                                        </div>
                                        <div class="product-label">
                                            <span>new</span>
                                        </div>
                                    </div>
                                    <div class="product-content-list">
                                        <h4 class="product-name"><a href="product-details.html">Rexpo Womens shoes</a></h4>
                                        <div class="ratings">
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                        </div>
                                        <div class="price-box">
                                            <span class="price-regular">$70.00</span>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde perspiciatis
                                            quod numquam, sit fugiat, deserunt ipsa mollitia sunt quam.
                                        </p>
                                        <a href="{{ url('Cart') }}" class="btn btn-large hover-color">Add To Cart</a>
                                    </div>
                                </div>
                                <!-- product list item end -->
                            </div>
                            <!-- product single item start -->

                            <!-- product single item start -->
                            <div class="col-md-4 col-sm-6">
                                <!-- product grid start -->
                                <div class="product-item">
                                    <div class="product-thumb">
                                        <a href="product-details.html">
                                            <img src="assets/img/product/product-5.jpg" alt="product thumb">
                                        </a>
                                        <div class="button-group">
                                            <a href="wishlist.html" data-toggle="tooltip" title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                            <a href="#" data-toggle="modal" data-target="#quick_view"><span data-toggle="tooltip"  title="Quick View"><i class="fa fa-eye"></i></span></a>
                                        </div>
                                        <div class="product-label">
                                            <span>new</span>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-caption">
                                            <h6 class="product-name">
                                                <a href="product-details.html">Primitive Mens shoes</a>
                                            </h6>
                                            <div class="price-box">
                                                <span class="price-regular">$60.00</span>
                                            </div>
                                            <a class="add-to-cart" href="{{ url('Cart') }}"><i class="fa fa-shopping-cart"></i></a>
                                        </div>
                                        <div class="ratings">
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <!-- product grid end -->

                                <!-- product list item end -->
                                <div class="product-list-item">
                                    <div class="product-thumb">
                                        <a href="product-details.html">
                                            <img src="assets/img/product/product-5.jpg" alt="product thumb">
                                        </a>
                                        <div class="button-group">
                                            <a href="wishlist.html" data-toggle="tooltip" title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                            <a href="#" data-toggle="modal" data-target="#quick_view"><span data-toggle="tooltip"  title="Quick View"><i class="fa fa-eye"></i></span></a>
                                        </div>
                                        <div class="product-label">
                                            <span>new</span>
                                        </div>
                                    </div>
                                    <div class="product-content-list">
                                        <h4 class="product-name"><a href="product-details.html">Primitive Mens shoes</a></h4>
                                        <div class="ratings">
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                        </div>
                                        <div class="price-box">
                                            <span class="price-regular">$60.00</span>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde perspiciatis
                                            quod numquam, sit fugiat, deserunt ipsa mollitia sunt quam.
                                        </p>
                                        <a href="{{ url('Cart') }}" class="btn btn-large hover-color">Add To Cart</a>
                                    </div>
                                </div>
                                <!-- product list item end -->
                            </div>
                            <!-- product single item start -->

                            <!-- product single item start -->
                            <div class="col-md-4 col-sm-6">
                                <!-- product grid start -->
                                <div class="product-item">
                                    <div class="product-thumb">
                                        <a href="product-details.html">
                                            <img src="assets/img/product/product-6.jpg" alt="product thumb">
                                        </a>
                                        <div class="button-group">
                                            <a href="wishlist.html" data-toggle="tooltip" title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                            <a href="#" data-toggle="modal" data-target="#quick_view"><span data-toggle="tooltip"  title="Quick View"><i class="fa fa-eye"></i></span></a>
                                        </div>
                                        <div class="product-label">
                                            <span>new</span>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-caption">
                                            <h6 class="product-name">
                                                <a href="product-details.html">Quickiin Mens shoes</a>
                                            </h6>
                                            <div class="price-box">
                                                <span class="price-old"><del>$80.00</del></span>
                                                <span class="price-regular">$40.00</span>
                                            </div>
                                            <a class="add-to-cart" href="{{ url('Cart') }}"><i class="fa fa-shopping-cart"></i></a>
                                        </div>
                                        <div class="ratings">
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <!-- product grid end -->

                                <!-- product list item end -->
                                <div class="product-list-item">
                                    <div class="product-thumb">
                                        <a href="product-details.html">
                                            <img src="assets/img/product/product-6.jpg" alt="product thumb">
                                        </a>
                                        <div class="button-group">
                                            <a href="wishlist.html" data-toggle="tooltip" title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                            <a href="#" data-toggle="modal" data-target="#quick_view"><span data-toggle="tooltip"  title="Quick View"><i class="fa fa-eye"></i></span></a>
                                        </div>
                                        <div class="product-label">
                                            <span>new</span>
                                        </div>
                                    </div>
                                    <div class="product-content-list">
                                        <h4 class="product-name"><a href="product-details.html">Quickiin Mens shoes</a></h4>
                                        <div class="ratings">
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                        </div>
                                        <div class="price-box">
                                            <span class="price-old"><del>$80.00</del></span>
                                            <span class="price-regular">$40.00</span>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde perspiciatis
                                            quod numquam, sit fugiat, deserunt ipsa mollitia sunt quam.
                                        </p>
                                        <a href="{{ url('Cart') }}" class="btn btn-large hover-color">Add To Cart</a>
                                    </div>
                                </div>
                                <!-- product list item end -->
                            </div>
                            <!-- product single item start -->

                            <!-- product single item start -->
                            <div class="col-md-4 col-sm-6">
                                <!-- product grid start -->
                                <div class="product-item">
                                    <div class="product-thumb">
                                        <a href="product-details.html">
                                            <img src="assets/img/product/product-7.jpg" alt="product thumb">
                                        </a>
                                        <div class="button-group">
                                            <a href="wishlist.html" data-toggle="tooltip" title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                            <a href="#" data-toggle="modal" data-target="#quick_view"><span data-toggle="tooltip"  title="Quick View"><i class="fa fa-eye"></i></span></a>
                                        </div>
                                        <div class="product-label">
                                            <span>new</span>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-caption">
                                            <h6 class="product-name">
                                                <a href="product-details.html">Womens High Hills</a>
                                            </h6>
                                            <div class="price-box">
                                                <span class="price-old"><del>$90.00</del></span>
                                                <span class="price-regular">$70.00</span>
                                            </div>
                                            <a class="add-to-cart" href="{{ url('Cart') }}"><i class="fa fa-shopping-cart"></i></a>
                                        </div>
                                        <div class="ratings">
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <!-- product grid end -->

                                <!-- product list item end -->
                                <div class="product-list-item">
                                    <div class="product-thumb">
                                        <a href="product-details.html">
                                            <img src="assets/img/product/product-7.jpg" alt="product thumb">
                                        </a>
                                        <div class="button-group">
                                            <a href="wishlist.html" data-toggle="tooltip" title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                            <a href="#" data-toggle="modal" data-target="#quick_view"><span data-toggle="tooltip"  title="Quick View"><i class="fa fa-eye"></i></span></a>
                                        </div>
                                        <div class="product-label">
                                            <span>new</span>
                                        </div>
                                    </div>
                                    <div class="product-content-list">
                                        <h4 class="product-name"><a href="product-details.html">Womens High Hills</a></h4>
                                        <div class="ratings">
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                        </div>
                                        <div class="price-box">
                                            <span class="price-old"><del>$30.00</del></span>
                                            <span class="price-regular">$25.00</span>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde perspiciatis
                                            quod numquam, sit fugiat, deserunt ipsa mollitia sunt quam.
                                        </p>
                                        <a href="{{ url('Cart') }}" class="btn btn-large hover-color">Add To Cart</a>
                                    </div>
                                </div>
                                <!-- product list item end -->
                            </div>
                            <!-- product single item start -->

                            <!-- product single item start -->
                            <div class="col-md-4 col-sm-6">
                                <!-- product grid start -->
                                <div class="product-item">
                                    <div class="product-thumb">
                                        <a href="product-details.html">
                                            <img src="assets/img/product/product-8.jpg" alt="product thumb">
                                        </a>
                                        <div class="button-group">
                                            <a href="wishlist.html" data-toggle="tooltip" title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                            <a href="#" data-toggle="modal" data-target="#quick_view"><span data-toggle="tooltip"  title="Quick View"><i class="fa fa-eye"></i></span></a>
                                        </div>
                                        <div class="product-label">
                                            <span>new</span>
                                        </div>
                                        <div class="discount-label">
                                            <span>-10% Off</span>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-caption">
                                            <h6 class="product-name">
                                                <a href="product-details.html">LEATHER MENS SLIPPERS</a>
                                            </h6>
                                            <div class="price-box">
                                                <span class="price-old"><del>$40.00</del></span>
                                                <span class="price-regular">$50.00</span>
                                            </div>
                                            <a class="add-to-cart" href="{{ url('Cart') }}"><i class="fa fa-shopping-cart"></i></a>
                                        </div>
                                        <div class="ratings">
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <!-- product grid end -->

                                <!-- product list item end -->
                                <div class="product-list-item">
                                    <div class="product-thumb">
                                        <a href="product-details.html">
                                            <img src="assets/img/product/product-8.jpg" alt="product thumb">
                                        </a>
                                        <div class="button-group">
                                            <a href="wishlist.html" data-toggle="tooltip" title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                            <a href="#" data-toggle="modal" data-target="#quick_view"><span data-toggle="tooltip"  title="Quick View"><i class="fa fa-eye"></i></span></a>
                                        </div>
                                        <div class="product-label">
                                            <span>new</span>
                                        </div>
                                        <div class="discount-label">
                                            <span>-10% Off</span>
                                        </div>
                                    </div>
                                    <div class="product-content-list">
                                        <h4 class="product-name"><a href="product-details.html">LEATHER MENS SLIPPERS</a></h4>
                                        <div class="ratings">
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                        </div>
                                        <div class="price-box">
                                            <span class="price-old"><del>$40.00</del></span>
                                            <span class="price-regular">$50.00</span>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde perspiciatis
                                            quod numquam, sit fugiat, deserunt ipsa mollitia sunt quam.
                                        </p>
                                        <a href="{{ url('Cart') }}" class="btn btn-large hover-color">Add To Cart</a>
                                    </div>
                                </div>
                                <!-- product list item end -->
                            </div>
                            <!-- product single item start -->

                            <!-- product single item start -->
                            <div class="col-md-4 col-sm-6">
                                <!-- product grid start -->
                                <div class="product-item">
                                    <div class="product-thumb">
                                        <a href="product-details.html">
                                            <img src="assets/img/product/product-9.jpg" alt="product thumb">
                                        </a>
                                        <div class="button-group">
                                            <a href="wishlist.html" data-toggle="tooltip" title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                            <a href="#" data-toggle="modal" data-target="#quick_view"><span data-toggle="tooltip"  title="Quick View"><i class="fa fa-eye"></i></span></a>
                                        </div>
                                        <div class="product-label">
                                            <span>new</span>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-caption">
                                            <h6 class="product-name">
                                                <a href="product-details.html">Womens High Hills</a>
                                            </h6>
                                            <div class="price-box">
                                                <span class="price-regular">$60.00</span>
                                            </div>
                                            <a class="add-to-cart" href="{{ url('Cart') }}"><i class="fa fa-shopping-cart"></i></a>
                                        </div>
                                        <div class="ratings">
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <!-- product grid end -->

                                <!-- product list item end -->
                                <div class="product-list-item">
                                    <div class="product-thumb">
                                        <a href="product-details.html">
                                            <img src="assets/img/product/product-9.jpg" alt="product thumb">
                                        </a>
                                        <div class="button-group">
                                            <a href="wishlist.html" data-toggle="tooltip" title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                            <a href="#" data-toggle="modal" data-target="#quick_view"><span data-toggle="tooltip"  title="Quick View"><i class="fa fa-eye"></i></span></a>
                                        </div>
                                        <div class="product-label">
                                            <span>new</span>
                                        </div>
                                    </div>
                                    <div class="product-content-list">
                                        <h4 class="product-name"><a href="product-details.html">Womens High Hills</a></h4>
                                        <div class="ratings">
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                        </div>
                                        <div class="price-box">
                                            <span class="price-regular">$60.00</span>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde perspiciatis
                                            quod numquam, sit fugiat, deserunt ipsa mollitia sunt quam.
                                        </p>
                                        <a href="{{ url('Cart') }}" class="btn btn-large hover-color">Add To Cart</a>
                                    </div>
                                </div>
                                <!-- product list item end -->
                            </div>
                            <!-- product single item start -->

                            <!-- product single item start -->
                            <div class="col-md-4 col-sm-6">
                                <!-- product grid start -->
                                <div class="product-item">
                                    <div class="product-thumb">
                                        <a href="product-details.html">
                                            <img src="assets/img/product/product-10.jpg" alt="product thumb">
                                        </a>
                                        <div class="button-group">
                                            <a href="wishlist.html" data-toggle="tooltip" title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                            <a href="#" data-toggle="modal" data-target="#quick_view"><span data-toggle="tooltip"  title="Quick View"><i class="fa fa-eye"></i></span></a>
                                        </div>
                                        <div class="product-label">
                                            <span>new</span>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-caption">
                                            <h6 class="product-name">
                                                <a href="product-details.html">Quickiin Mens shoes</a>
                                            </h6>
                                            <div class="price-box">
                                                <span class="price-regular">$75.00</span>
                                            </div>
                                            <a class="add-to-cart" href="{{ url('Cart') }}"><i class="fa fa-shopping-cart"></i></a>
                                        </div>
                                        <div class="ratings">
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <!-- product grid end -->

                                <!-- product list item end -->
                                <div class="product-list-item">
                                    <div class="product-thumb">
                                        <a href="product-details.html">
                                            <img src="assets/img/product/product-10.jpg" alt="product thumb">
                                        </a>
                                        <div class="button-group">
                                            <a href="wishlist.html" data-toggle="tooltip" title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                            <a href="#" data-toggle="modal" data-target="#quick_view"><span data-toggle="tooltip"  title="Quick View"><i class="fa fa-eye"></i></span></a>
                                        </div>
                                        <div class="product-label">
                                            <span>new</span>
                                        </div>
                                    </div>
                                    <div class="product-content-list">
                                        <h4 class="product-name"><a href="product-details.html">Quickiin Mens shoes</a></h4>
                                        <div class="ratings">
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                        </div>
                                        <div class="price-box">
                                            <span class="price-regular">$55.00</span>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde perspiciatis
                                            quod numquam, sit fugiat, deserunt ipsa mollitia sunt quam.
                                        </p>
                                        <a href="{{ url('Cart') }}" class="btn btn-large hover-color">Add To Cart</a>
                                    </div>
                                </div>
                                <!-- product list item end -->
                            </div>
                            <!-- product single item start -->

                            <!-- product single item start -->
                            <div class="col-md-4 col-sm-6">
                                <!-- product grid start -->
                                <div class="product-item">
                                    <div class="product-thumb">
                                        <a href="product-details.html">
                                            <img src="assets/img/product/product-3.jpg" alt="product thumb">
                                        </a>
                                        <div class="button-group">
                                            <a href="wishlist.html" data-toggle="tooltip" title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                            <a href="#" data-toggle="modal" data-target="#quick_view"><span data-toggle="tooltip"  title="Quick View"><i class="fa fa-eye"></i></span></a>
                                        </div>
                                        <div class="product-label">
                                            <span>new</span>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-caption">
                                            <h6 class="product-name">
                                                <a href="product-details.html">LEATHER MENS SLIPPERS</a>
                                            </h6>
                                            <div class="price-box">
                                                <span class="price-regular">$70.00</span>
                                            </div>
                                            <a class="add-to-cart" href="{{ url('Cart') }}"><i class="fa fa-shopping-cart"></i></a>
                                        </div>
                                        <div class="ratings">
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <!-- product grid end -->

                                <!-- product list item end -->
                                <div class="product-list-item">
                                    <div class="product-thumb">
                                        <a href="product-details.html">
                                            <img src="assets/img/product/product-3.jpg" alt="product thumb">
                                        </a>
                                        <div class="button-group">
                                            <a href="wishlist.html" data-toggle="tooltip" title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                            <a href="#" data-toggle="modal" data-target="#quick_view"><span data-toggle="tooltip"  title="Quick View"><i class="fa fa-eye"></i></span></a>
                                        </div>
                                        <div class="product-label">
                                            <span>new</span>
                                        </div>
                                    </div>
                                    <div class="product-content-list">
                                        <h4 class="product-name"><a href="product-details.html">LEATHER MENS SLIPPERS</a></h4>
                                        <div class="ratings">
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                        </div>
                                        <div class="price-box">
                                            <span class="price-regular">$50.00</span>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde perspiciatis
                                            quod numquam, sit fugiat, deserunt ipsa mollitia sunt quam.
                                        </p>
                                        <a href="{{ url('Cart') }}" class="btn btn-large hover-color">Add To Cart</a>
                                    </div>
                                </div>
                                <!-- product list item end -->
                            </div>
                            <!-- product single item start -->

                            <!-- product single item start -->
                            <div class="col-md-4 col-sm-6">
                                <!-- product grid start -->
                                <div class="product-item">
                                    <div class="product-thumb">
                                        <a href="product-details.html">
                                            <img src="assets/img/product/product-2.jpg" alt="product thumb">
                                        </a>
                                        <div class="button-group">
                                            <a href="wishlist.html" data-toggle="tooltip" title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                            <a href="#" data-toggle="modal" data-target="#quick_view"><span data-toggle="tooltip"  title="Quick View"><i class="fa fa-eye"></i></span></a>
                                        </div>
                                        <div class="product-label">
                                            <span>new</span>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-caption">
                                            <h6 class="product-name">
                                                <a href="product-details.html">REXPO WOMENS SHOES</a>
                                            </h6>
                                            <div class="price-box">
                                                <span class="price-regular">$90.00</span>
                                            </div>
                                            <a class="add-to-cart" href="{{ url('Cart') }}"><i class="fa fa-shopping-cart"></i></a>
                                        </div>
                                        <div class="ratings">
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <!-- product grid end -->

                                <!-- product list item end -->
                                <div class="product-list-item">
                                    <div class="product-thumb">
                                        <a href="product-details.html">
                                            <img src="assets/img/product/product-2.jpg" alt="product thumb">
                                        </a>
                                        <div class="button-group">
                                            <a href="wishlist.html" data-toggle="tooltip" title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                            <a href="#" data-toggle="modal" data-target="#quick_view"><span data-toggle="tooltip"  title="Quick View"><i class="fa fa-eye"></i></span></a>
                                        </div>
                                        <div class="product-label">
                                            <span>new</span>
                                        </div>
                                    </div>
                                    <div class="product-content-list">
                                        <h4 class="product-name"><a href="product-details.html">REXPO WOMENS SHOES</a></h4>
                                        <div class="ratings">
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                        </div>
                                        <div class="price-box">
                                            <span class="price-regular">$90.00</span>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde perspiciatis
                                            quod numquam, sit fugiat, deserunt ipsa mollitia sunt quam.
                                        </p>
                                        <a href="{{ url('Cart') }}" class="btn btn-large hover-color">Add To Cart</a>
                                    </div>
                                </div>
                                <!-- product list item end -->
                            </div>
                            <!-- product single item start -->
                        </div>
                        <!-- product item list wrapper end -->

                        <!-- start pagination area -->
                        <div class="paginatoin-area text-center">
                            <ul class="pagination-box">
                                <li><a class="previous" href="#"><i class="fa fa-angle-left"></i></a></li>
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a class="next" href="#"><i class="fa fa-angle-right"></i></a></li>
                            </ul>
                        </div>
                        <!-- end pagination area -->
                    </div>
                </div>
                <!-- shop main wrapper end -->
            </div>
        </div>
    </div>
    <!-- page main wrapper end -->
@endsection