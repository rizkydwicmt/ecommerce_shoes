@extends('users/core/main')
@extends('users/core/header')
@extends('users/core/footer')

@section('title', 'Halaman Home')

@section('konten')
    <!-- slider area start -->
    <section class="hero-slider">
        <div class="hero-slider-active slick-arrow-style slick-arrow-style_hero slick-dot-style">
            <!-- single slider item start -->
            <div class="hero-single-slide hero-overlay">
                <div class="hero-slider-item bg-img" data-bg="assets/img/slider/home2-slide1.jpg">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="hero-slider-content content-top slide-1">
                                    <h2 class="slide-title">New</h2>
                                    <h3 class="slide-subtitle">Sports Sneakers <span>Men's like Flex</span></h3>
                                    <a href="{{ url('Shop') }}" class="btn btn-large">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- single slider item start -->

            <!-- single slider item start -->
            <div class="hero-single-slide hero-overlay">
                <div class="hero-slider-item bg-img" data-bg="assets/img/slider/home2-slide2.jpg">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="hero-slider-content content-top slide-2">
                                    <h2 class="slide-title">Sale</h2>
                                    <h3 class="slide-subtitle">Running Sneakers <span>Men's like Flex</span></h3>
                                    <a href="{{ url('Shop') }}" class="btn btn-large">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- single slider item start -->
        </div>
    </section>
    <!-- slider area end -->

    <!-- service policy start -->
    <section class="service-policy mtn-30">
        <div class="container">
            <div class="row row-10">
                <div class="col-lg-3 col-sm-6">
                    <div class="policy-block text-center">
                        <div class="policy-icon">
                            <i class="fa fa-heart-o"></i>
                        </div>
                        <div class="policy-text">
                            <h4 class="policy-title">Great Value</h4>
                            <p class="policy-desc">Nunc id ante quis tellus faucibus dictum in eget metus.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="policy-block text-center">
                        <div class="policy-icon">
                            <i class="fa fa-truck"></i>
                        </div>
                        <div class="policy-text">
                            <h4 class="policy-title">Worlwide Delivery</h4>
                            <p class="policy-desc">Nunc id ante quis tellus faucibus dictum in eget metus.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="policy-block text-center">
                        <div class="policy-icon">
                            <i class="fa fa-credit-card"></i>
                        </div>
                        <div class="policy-text">
                            <h4 class="policy-title">Safe Payment</h4>
                            <p class="policy-desc">Nunc id ante quis tellus faucibus dictum in eget metus.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="policy-block text-center">
                        <div class="policy-icon">
                            <i class="fa fa-headphones"></i>
                        </div>
                        <div class="policy-text">
                            <h4 class="policy-title">24/7 Help Center</h4>
                            <p class="policy-desc">Nunc id ante quis tellus faucibus dictum in eget metus.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- service policy end -->

    <!-- banner statistics area start -->
    <div class="banner-statistics-area section-padding">
        <div class="container">
            <div class="row banner-grid mtn-30">
                <div class="col-md-4 banner-item mt-30">
                    <div class="single-category-item">
                        <div class="category-title">
                            <a href="{{ url('Shop') }}">MEN</a>
                        </div>
                        <div class="category-thumb">
                            <a href="{{ url('Shop') }}">
                                <img src="assets/img/category/category-1.png" alt="category thumb">
                            </a>
                        </div>
                        <div class="shop-collection text-center">
                            <a class="shop-btn" href="{{ url('Shop') }}">Shop Collections</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 banner-item mt-30">
                    <div class="banner-statistics">
                        <a href="#">
                            <img src="assets/img/banner/cms_3.1.jpg" alt="banner thumb">
                        </a>
                    </div>
                </div>
                <div class="col-md-4 banner-item mt-30">
                    <div class="single-category-item">
                        <div class="category-title">
                            <a href="{{ url('Shop') }}">MEN</a>
                        </div>
                        <div class="category-thumb">
                            <a href="{{ url('Shop') }}">
                                <img src="assets/img/category/category-3.png" alt="category thumb">
                            </a>
                        </div>
                        <div class="shop-collection text-center">
                            <a class="shop-btn" href="{{ url('Shop') }}">Shop Collections</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 banner-item mt-30">
                    <div class="single-category-item">
                        <div class="category-title">
                            <a href="{{ url('Shop') }}">MEN</a>
                        </div>
                        <div class="category-thumb">
                            <a href="{{ url('Shop') }}">
                                <img src="assets/img/category/category-2.png" alt="category thumb">
                            </a>
                        </div>
                        <div class="shop-collection text-center">
                            <a class="shop-btn" href="{{ url('Shop') }}">Shop Collections</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 banner-item mt-30">
                    <div class="banner-statistics">
                        <a href="#">
                            <img src="assets/img/banner/cms_3.3.jpg" alt="banner thumb">
                        </a>
                    </div>
                </div>
                <div class="col-md-4 banner-item mt-30">
                    <div class="banner-statistics">
                        <a href="#">
                            <img src="assets/img/banner/cms_3.2.jpg" alt="banner thumb">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- banner statistics area end -->

    <!-- product gallery area start -->
    <section class="product-gallery section-padding bg-img" data-bg="assets/img/bg/bg-new.jpg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title text-center">
                        <h3 class="title">NEW ARRIVALS PRODUCTS</h3>
                        <h4 class="sub-title">Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius claritas est etiam processus dynamicus, qui sequitur mutationem.</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="product-carousel--4 slick-row-5 slick-arrow-style">
                        <!-- product single item start -->
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
                                    <a class="add-to-cart" href="cart.html"><i class="fa fa-shopping-cart"></i></a>
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
                        <!-- product single item end -->

                        <!-- product single item start -->
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
                                        <a href="product-details.html">New Womens High Hills</a>
                                    </h6>
                                    <div class="price-box">
                                        <span class="price-old"><del>$80.00</del></span>
                                        <span class="price-regular">$60.00</span>
                                    </div>
                                    <a class="add-to-cart" href="cart.html"><i class="fa fa-shopping-cart"></i></a>
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
                        <!-- product single item end -->

                        <!-- product single item start -->
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
                                        <span class="price-old"><del>$60.00</del></span>
                                        <span class="price-regular">$50.00</span>
                                    </div>
                                    <a class="add-to-cart" href="cart.html"><i class="fa fa-shopping-cart"></i></a>
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
                        <!-- product single item end -->

                        <!-- product single item start -->
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
                                    <span>-15% Off</span>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="product-caption">
                                    <h6 class="product-name">
                                        <a href="product-details.html">Rexpo Womens shoes</a>
                                    </h6>
                                    <div class="price-box">
                                        <span class="price-old"><del>$100.00</del></span>
                                        <span class="price-regular">$85.00</span>
                                    </div>
                                    <a class="add-to-cart" href="cart.html"><i class="fa fa-shopping-cart"></i></a>
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
                        <!-- product single item end -->

                        <!-- product single item start -->
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
                                        <span class="price-old"><del>$75.00</del></span>
                                        <span class="price-regular">$55.00</span>
                                    </div>
                                    <a class="add-to-cart" href="cart.html"><i class="fa fa-shopping-cart"></i></a>
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
                        <!-- product single item end -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- product gallery area end -->

    <!-- product gallery area start -->
    <section class="product-gallery section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title text-center">
                        <h3 class="title">OUR IN STORE</h3>
                        <h4 class="sub-title">Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius claritas est etiam processus dynamicus, qui sequitur mutationem.</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="product-container">
                        <!-- product tab menu start -->
                        <div class="product-tab-menu">
                            <ul class="nav justify-content-center">
                                <li><a href="#tab1" class="active" data-toggle="tab">New Arrival</a></li>
                                <li><a href="#tab2" data-toggle="tab">Best Seller</a></li>
                                <li><a href="#tab3" data-toggle="tab">Featured Products</a></li>
                            </ul>
                        </div>
                        <!-- product tab menu end -->

                        <!-- product tab content start -->
                        <div class="tab-content">
                            <!-- single tab item start -->
                            <div class="tab-pane fade show active" id="tab1">
                                <div class="product-carousel-4_2 slick-row-5 slick-arrow-style">
                                    <!-- product single item start -->
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
                                                <a class="add-to-cart" href="cart.html"><i class="fa fa-shopping-cart"></i></a>
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
                                    <!-- product single item end -->

                                    <!-- product single item start -->
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
                                                    <a href="product-details.html">New Womens High Hills</a>
                                                </h6>
                                                <div class="price-box">
                                                    <span class="price-old"><del>$80.00</del></span>
                                                    <span class="price-regular">$60.00</span>
                                                </div>
                                                <a class="add-to-cart" href="cart.html"><i class="fa fa-shopping-cart"></i></a>
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
                                    <!-- product single item end -->

                                    <!-- product single item start -->
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
                                                    <span class="price-old"><del>$60.00</del></span>
                                                    <span class="price-regular">$50.00</span>
                                                </div>
                                                <a class="add-to-cart" href="cart.html"><i class="fa fa-shopping-cart"></i></a>
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
                                    <!-- product single item end -->

                                    <!-- product single item start -->
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
                                                <span>-15% Off</span>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <div class="product-caption">
                                                <h6 class="product-name">
                                                    <a href="product-details.html">Rexpo Womens shoes</a>
                                                </h6>
                                                <div class="price-box">
                                                    <span class="price-old"><del>$100.00</del></span>
                                                    <span class="price-regular">$85.00</span>
                                                </div>
                                                <a class="add-to-cart" href="cart.html"><i class="fa fa-shopping-cart"></i></a>
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
                                    <!-- product single item end -->

                                    <!-- product single item start -->
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
                                                    <span class="price-old"><del>$75.00</del></span>
                                                    <span class="price-regular">$55.00</span>
                                                </div>
                                                <a class="add-to-cart" href="cart.html"><i class="fa fa-shopping-cart"></i></a>
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
                                    <!-- product single item end -->

                                    <!-- product single item start -->
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
                                                    <span class="price-old"><del>$90.00</del></span>
                                                    <span class="price-regular">$70.00</span>
                                                </div>
                                                <a class="add-to-cart" href="cart.html"><i class="fa fa-shopping-cart"></i></a>
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
                                    <!-- product single item end -->

                                    <!-- product single item start -->
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
                                                    <a href="product-details.html">New Womens High Hills</a>
                                                </h6>
                                                <div class="price-box">
                                                    <span class="price-old"><del>$80.00</del></span>
                                                    <span class="price-regular">$60.00</span>
                                                </div>
                                                <a class="add-to-cart" href="cart.html"><i class="fa fa-shopping-cart"></i></a>
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
                                    <!-- product single item end -->

                                    <!-- product single item start -->
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
                                                    <a href="product-details.html">Leather Mens slippers</a>
                                                </h6>
                                                <div class="price-box">
                                                    <span class="price-old"><del>$60.00</del></span>
                                                    <span class="price-regular">$50.00</span>
                                                </div>
                                                <a class="add-to-cart" href="cart.html"><i class="fa fa-shopping-cart"></i></a>
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
                                    <!-- product single item end -->

                                    <!-- product single item start -->
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
                                                <a class="add-to-cart" href="cart.html"><i class="fa fa-shopping-cart"></i></a>
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
                                    <!-- product single item end -->

                                    <!-- product single item start -->
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
                                                    <a href="product-details.html">New Womens High Hills</a>
                                                </h6>
                                                <div class="price-box">
                                                    <span class="price-old"><del>$80.00</del></span>
                                                    <span class="price-regular">$60.00</span>
                                                </div>
                                                <a class="add-to-cart" href="cart.html"><i class="fa fa-shopping-cart"></i></a>
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
                                    <!-- product single item end -->
                                </div>
                            </div>
                            <!-- single tab item end -->

                            <!-- single tab item start -->
                            <div class="tab-pane fade" id="tab2">
                                <div class="product-carousel-4_2 slick-row-5 slick-arrow-style">
                                    <!-- product single item start -->
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
                                                    <span class="price-old"><del>$90.00</del></span>
                                                    <span class="price-regular">$70.00</span>
                                                </div>
                                                <a class="add-to-cart" href="cart.html"><i class="fa fa-shopping-cart"></i></a>
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
                                    <!-- product single item end -->

                                    <!-- product single item start -->
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
                                                    <a href="product-details.html">New Womens High Hills</a>
                                                </h6>
                                                <div class="price-box">
                                                    <span class="price-old"><del>$80.00</del></span>
                                                    <span class="price-regular">$60.00</span>
                                                </div>
                                                <a class="add-to-cart" href="cart.html"><i class="fa fa-shopping-cart"></i></a>
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
                                    <!-- product single item end -->

                                    <!-- product single item start -->
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
                                        </div>
                                        <div class="product-content">
                                            <div class="product-caption">
                                                <h6 class="product-name">
                                                    <a href="product-details.html">Leather Mens slippers</a>
                                                </h6>
                                                <div class="price-box">
                                                    <span class="price-old"><del>$60.00</del></span>
                                                    <span class="price-regular">$50.00</span>
                                                </div>
                                                <a class="add-to-cart" href="cart.html"><i class="fa fa-shopping-cart"></i></a>
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
                                    <!-- product single item end -->

                                    <!-- product single item start -->
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
                                            <div class="discount-label">
                                                <span>-15% Off</span>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <div class="product-caption">
                                                <h6 class="product-name">
                                                    <a href="product-details.html">Rexpo Womens shoes</a>
                                                </h6>
                                                <div class="price-box">
                                                    <span class="price-old"><del>$100.00</del></span>
                                                    <span class="price-regular">$85.00</span>
                                                </div>
                                                <a class="add-to-cart" href="cart.html"><i class="fa fa-shopping-cart"></i></a>
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
                                    <!-- product single item end -->

                                    <!-- product single item start -->
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
                                            <div class="discount-label">
                                                <span>-10% Off</span>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <div class="product-caption">
                                                <h6 class="product-name">
                                                    <a href="product-details.html">Primitive Mens shoes</a>
                                                </h6>
                                                <div class="price-box">
                                                    <span class="price-old"><del>$75.00</del></span>
                                                    <span class="price-regular">$55.00</span>
                                                </div>
                                                <a class="add-to-cart" href="cart.html"><i class="fa fa-shopping-cart"></i></a>
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
                                    <!-- product single item end -->

                                    <!-- product single item start -->
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
                                                    <a href="product-details.html">Quickiin Mens shoes</a>
                                                </h6>
                                                <div class="price-box">
                                                    <span class="price-old"><del>$90.00</del></span>
                                                    <span class="price-regular">$70.00</span>
                                                </div>
                                                <a class="add-to-cart" href="cart.html"><i class="fa fa-shopping-cart"></i></a>
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
                                    <!-- product single item end -->

                                    <!-- product single item start -->
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
                                        </div>
                                        <div class="product-content">
                                            <div class="product-caption">
                                                <h6 class="product-name">
                                                    <a href="product-details.html">New Womens High Hills</a>
                                                </h6>
                                                <div class="price-box">
                                                    <span class="price-old"><del>$80.00</del></span>
                                                    <span class="price-regular">$60.00</span>
                                                </div>
                                                <a class="add-to-cart" href="cart.html"><i class="fa fa-shopping-cart"></i></a>
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
                                    <!-- product single item end -->

                                    <!-- product single item start -->
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
                                            <div class="discount-label">
                                                <span>-10% Off</span>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <div class="product-caption">
                                                <h6 class="product-name">
                                                    <a href="product-details.html">Leather Mens slippers</a>
                                                </h6>
                                                <div class="price-box">
                                                    <span class="price-old"><del>$60.00</del></span>
                                                    <span class="price-regular">$50.00</span>
                                                </div>
                                                <a class="add-to-cart" href="cart.html"><i class="fa fa-shopping-cart"></i></a>
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
                                    <!-- product single item end -->

                                    <!-- product single item start -->
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
                                                    <span class="price-old"><del>$100.00</del></span>
                                                    <span class="price-regular">$85.00</span>
                                                </div>
                                                <a class="add-to-cart" href="cart.html"><i class="fa fa-shopping-cart"></i></a>
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
                                    <!-- product single item end -->

                                    <!-- product single item start -->
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
                                        </div>
                                        <div class="product-content">
                                            <div class="product-caption">
                                                <h6 class="product-name">
                                                    <a href="product-details.html">Primitive Mens shoes</a>
                                                </h6>
                                                <div class="price-box">
                                                    <span class="price-old"><del>$75.00</del></span>
                                                    <span class="price-regular">$55.00</span>
                                                </div>
                                                <a class="add-to-cart" href="cart.html"><i class="fa fa-shopping-cart"></i></a>
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
                                    <!-- product single item end -->
                                </div>
                            </div>
                            <!-- single tab item end -->

                            <!-- single tab item start -->
                            <div class="tab-pane fade" id="tab3">
                                <div class="product-carousel-4_2 slick-row-5 slick-arrow-style">
                                    <!-- product single item start -->
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
                                                <a class="add-to-cart" href="cart.html"><i class="fa fa-shopping-cart"></i></a>
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
                                    <!-- product single item end -->

                                    <!-- product single item start -->
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
                                        </div>
                                        <div class="product-content">
                                            <div class="product-caption">
                                                <h6 class="product-name">
                                                    <a href="product-details.html">New Womens High Hills</a>
                                                </h6>
                                                <div class="price-box">
                                                    <span class="price-old"><del>$80.00</del></span>
                                                    <span class="price-regular">$60.00</span>
                                                </div>
                                                <a class="add-to-cart" href="cart.html"><i class="fa fa-shopping-cart"></i></a>
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
                                    <!-- product single item end -->

                                    <!-- product single item start -->
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
                                                    <a href="product-details.html">Leather Mens slippers</a>
                                                </h6>
                                                <div class="price-box">
                                                    <span class="price-old"><del>$60.00</del></span>
                                                    <span class="price-regular">$50.00</span>
                                                </div>
                                                <a class="add-to-cart" href="cart.html"><i class="fa fa-shopping-cart"></i></a>
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
                                    <!-- product single item end -->

                                    <!-- product single item start -->
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
                                                <span>-15% Off</span>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <div class="product-caption">
                                                <h6 class="product-name">
                                                    <a href="product-details.html">Rexpo Womens shoes</a>
                                                </h6>
                                                <div class="price-box">
                                                    <span class="price-old"><del>$100.00</del></span>
                                                    <span class="price-regular">$85.00</span>
                                                </div>
                                                <a class="add-to-cart" href="cart.html"><i class="fa fa-shopping-cart"></i></a>
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
                                    <!-- product single item end -->

                                    <!-- product single item start -->
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
                                            <div class="discount-label">
                                                <span>-20% Off</span>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <div class="product-caption">
                                                <h6 class="product-name">
                                                    <a href="product-details.html">Primitive Mens shoes</a>
                                                </h6>
                                                <div class="price-box">
                                                    <span class="price-old"><del>$75.00</del></span>
                                                    <span class="price-regular">$55.00</span>
                                                </div>
                                                <a class="add-to-cart" href="cart.html"><i class="fa fa-shopping-cart"></i></a>
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
                                    <!-- product single item end -->

                                    <!-- product single item start -->
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
                                                <a class="add-to-cart" href="cart.html"><i class="fa fa-shopping-cart"></i></a>
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
                                    <!-- product single item end -->

                                    <!-- product single item start -->
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
                                                    <a href="product-details.html">New Womens High Hills</a>
                                                </h6>
                                                <div class="price-box">
                                                    <span class="price-old"><del>$80.00</del></span>
                                                    <span class="price-regular">$60.00</span>
                                                </div>
                                                <a class="add-to-cart" href="cart.html"><i class="fa fa-shopping-cart"></i></a>
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
                                    <!-- product single item end -->

                                    <!-- product single item start -->
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
                                            <div class="discount-label">
                                                <span>-10% Off</span>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <div class="product-caption">
                                                <h6 class="product-name">
                                                    <a href="product-details.html">Leather Mens slippers</a>
                                                </h6>
                                                <div class="price-box">
                                                    <span class="price-old"><del>$60.00</del></span>
                                                    <span class="price-regular">$50.00</span>
                                                </div>
                                                <a class="add-to-cart" href="cart.html"><i class="fa fa-shopping-cart"></i></a>
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
                                    <!-- product single item end -->

                                    <!-- product single item start -->
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
                                                    <a href="product-details.html">Rexpo Womens shoes</a>
                                                </h6>
                                                <div class="price-box">
                                                    <span class="price-old"><del>$100.00</del></span>
                                                    <span class="price-regular">$85.00</span>
                                                </div>
                                                <a class="add-to-cart" href="cart.html"><i class="fa fa-shopping-cart"></i></a>
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
                                    <!-- product single item end -->

                                    <!-- product single item start -->
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
                                                    <a href="product-details.html">Primitive Mens shoes</a>
                                                </h6>
                                                <div class="price-box">
                                                    <span class="price-old"><del>$75.00</del></span>
                                                    <span class="price-regular">$55.00</span>
                                                </div>
                                                <a class="add-to-cart" href="cart.html"><i class="fa fa-shopping-cart"></i></a>
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
                                    <!-- product single item end -->
                                </div>
                            </div>
                            <!-- single tab item end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- product gallery area end -->

    <!-- banner statistics area start -->
    <div class="banner-statistics-area section-padding pt-0">
        <div class="container">
            <div class="row mtn-30">
                <div class="col-md-6">
                    <div class="banner-statistics mt-30">
                        <a href="#">
                            <img src="assets/img/banner/banner_1.2.jpg" alt="banner thumb">
                        </a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="banner-statistics mt-30">
                        <a href="#">
                            <img src="assets/img/banner/banner_1.3.jpg" alt="banner thumb">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- banner statistics area end -->

    <!-- testimonial area start -->
    <section class="testimonial-area bg-img section-padding" data-bg="assets/img/bg/bg-testimonial-02.jpg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="testimonial-wrapper">
                        <div class="testimonial-carousel">
                            <!-- slide item start -->
                            <div class="testimonial-slide-item">
                                <div class="testimonial-item text-center">
                                    <p class="testimonial-desc">
                                        "When potential customers are researching you online, they're getting to know you by way of the content of your website."
                                    </p>
                                    <div class="testimonial-author">
                                        <img src="assets/img/testimonial/testimonial-1.png" alt="testimonial author">
                                    </div>
                                    <h6 class="author-designation text-white">jhone doe</h6>
                                </div>
                            </div>
                            <!-- slide item end -->
                            <!-- slide item start -->
                            <div class="testimonial-slide-item">
                                <div class="testimonial-item text-center">
                                    <p class="testimonial-desc">
                                        " When potential customers are researching you online, they're getting to know you by way of the content of your website. "
                                    </p>
                                    <div class="testimonial-author">
                                        <img src="assets/img/testimonial/testimonial-1.png" alt="testimonial author">
                                    </div>
                                    <h6 class="author-designation text-white">jhone doe</h6>
                                </div>
                            </div>
                            <!-- slide item end -->
                            <!-- slide item start -->
                            <div class="testimonial-slide-item">
                                <div class="testimonial-item text-center">
                                    <p class="testimonial-desc">
                                        " When potential customers are researching you online, they're getting to know you by way of the content of your website. "
                                    </p>
                                    <div class="testimonial-author">
                                        <img src="assets/img/testimonial/testimonial-1.png" alt="testimonial author">
                                    </div>
                                    <h6 class="author-designation text-white">jhone doe</h6>
                                </div>
                            </div>
                            <!-- slide item end -->
                        </div>
                    </div>
                    <div class="brand-logo-wrapper">
                        <div class="brand-logo-carousel slick-row-10 slick-arrow-style">
                            <!-- single brand start -->
                            <div class="brand-item">
                                <a href="#">
                                    <img src="assets/img/brand/1.png" alt="">
                                </a>
                            </div>
                            <!-- single brand end -->

                            <!-- single brand start -->
                            <div class="brand-item">
                                <a href="#">
                                    <img src="assets/img/brand/2.png" alt="">
                                </a>
                            </div>
                            <!-- single brand end -->

                            <!-- single brand start -->
                            <div class="brand-item">
                                <a href="#">
                                    <img src="assets/img/brand/3.png" alt="">
                                </a>
                            </div>
                            <!-- single brand end -->

                            <!-- single brand start -->
                            <div class="brand-item">
                                <a href="#">
                                    <img src="assets/img/brand/4.png" alt="">
                                </a>
                            </div>
                            <!-- single brand end -->

                            <!-- single brand start -->
                            <div class="brand-item">
                                <a href="#">
                                    <img src="assets/img/brand/5.png" alt="">
                                </a>
                            </div>
                            <!-- single brand end -->

                            <!-- single brand start -->
                            <div class="brand-item">
                                <a href="#">
                                    <img src="assets/img/brand/6.png" alt="">
                                </a>
                            </div>
                            <!-- single brand end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- testimonial area end -->

@endsection