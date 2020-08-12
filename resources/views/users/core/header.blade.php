@section('header_menu')
    <header class="header-area header-style__2 header-transparent">
        <!-- main header start -->
        <div class="main-header d-none d-lg-block">
            <!-- header top start -->
            <div class="header-top">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-3">
                            <div class="header-social-link">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-pinterest"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-9 d-flex justify-content-end">
                            <ul class="user-info-block">
                                <li><a href="{{ url('Profile') }}"><i class="fa fa-user-circle"></i> My Account</a></li>
                                <li><a href="{{ url('Checkout') }}"><i class="fa fa-credit-card"></i> Checkout</a></li>
                                <li><a href="{{ url('Account') }}"><i class="fa fa-sign-in"></i> Sign In</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- header top end -->

            <!-- header middle area start -->
            <div class="header-main-area sticky">
                <div class="container">
                    <div class="row align-items-center position-relative">
                        <!-- start logo area -->
                        <div class="col-auto">
                            <div class="logo">
                                <a href="index.html">
                                    <img src="assets/img/logo/logo.png" alt="Brand Logo">
                                </a>
                            </div>
                        </div>
                        <!-- start logo area -->

                        <!-- main menu area start -->
                        <div class="col-auto position-static ml-auto">
                            <div class="main-menu-area">
                                <div class="main-menu">
                                    <!-- main menu navbar start -->
                                    <nav class="desktop-menu">
                                        <ul>
                                            <li class="active"><a href="{{ url('/') }}">Home</a>
                                            </li>
                                            <li><a href="{{ url('Shop') }}">shop</a>
                                            </li>
                                            <li><a href="{{ url('Contact') }}">Contact us</a></li>
                                        </ul>
                                    </nav>
                                    <!-- main menu navbar end -->
                                </div>
                            </div>
                        </div>
                        <!-- main menu area end -->

                        <!-- mini cart area start -->
                        <div class="col-auto ml-auto">
                            <div class="header-right">
                                <div class="header-configure-area">
                                    <ul class="nav">
                                        <li>
                                            <a href="#" class="search-trigger"><i class="fa fa-search"></i></a>
                                        </li>
                                        <li class="mini-cart-wrap">
                                            <a href="#" class="minicart-btn">
                                                <i class="fa fa-shopping-cart"></i>
                                                <span class="notification">2</span>
                                            </a>
                                            <div class="cart-list-wrapper">
                                                <ul class="cart-list">
                                                    <li>
                                                        <div class="cart-img">
                                                            <a href="product-details.html"><img src="assets/img/cart/cart-1.jpg" alt=""></a>
                                                        </div>
                                                        <div class="cart-info">
                                                            <h6 class="product-name"><a href="product-details.html">7th Generation classic</a></h6>
                                                            <span class="cart-qty">Qty: 1</span>
                                                            <span class="item-price">$60.00</span>
                                                        </div>
                                                        <div class="del-icon">
                                                            <i class="fa fa-times"></i>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="cart-img">
                                                            <a href="product-details.html"><img src="assets/img/cart/cart-2.jpg" alt=""></a>
                                                        </div>
                                                        <div class="cart-info">
                                                            <h6 class="product-name"><a href="product-details.html">Digital 8th generation</a></h6>
                                                            <span class="cart-qty">Qty: 2</span>
                                                            <span class="item-price">$70.00</span>
                                                        </div>
                                                        <div class="del-icon">
                                                            <i class="fa fa-times"></i>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <ul class="minicart-pricing-box">
                                                    <li>
                                                        <span>Sub-Total</span>
                                                        <span><strong>$300.00</strong></span>
                                                    </li>
                                                    <li>
                                                        <span>Eco Tax (-2.00)</span>
                                                        <span><strong>$10.00</strong></span>
                                                    </li>
                                                    <li>
                                                        <span>VAT (20%)</span>
                                                        <span><strong>$60.00</strong></span>
                                                    </li>
                                                    <li class="total">
                                                        <span>Total</span>
                                                        <span><strong>$370.00</strong></span>
                                                    </li>
                                                </ul>
                                                <div class="minicart-button">
                                                    <a href="{{ url('Cart') }}"><i class="fa fa-shopping-cart"></i> View Cart</a>
                                                    <a href="{{ url('Checkout') }}"><i class="fa fa-share"></i> Checkout</a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- mini cart area end -->

                    </div>
                </div>
            </div>
            <!-- header middle area end -->
        </div>
        <!-- main header start -->

        <!-- mobile header start -->
        <!-- mobile header start -->
        <div class="mobile-header d-lg-none d-md-block sticky black-soft">
            <!--mobile header top start -->
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-12">
                        <div class="mobile-main-header">
                            <div class="mobile-logo">
                                <a href="index.html">
                                    <img src="assets/img/logo/logo.png" alt="Brand Logo">
                                </a>
                            </div>
                            <div class="mobile-menu-toggler">
                                <div class="mini-cart-wrap">
                                    <a href="{{ url('Cart') }}">
                                        <i class="fa fa-shopping-cart"></i>
                                        <div class="notification">0</div>
                                    </a>
                                </div>
                                <button class="mobile-menu-btn">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- mobile header top start -->
        </div>
        <!-- mobile header end -->
        <!-- mobile header end -->

        <!-- offcanvas mobile menu start -->
        <!-- off-canvas menu start -->
        <aside class="off-canvas-wrapper">
            <div class="off-canvas-overlay"></div>
            <div class="off-canvas-inner-content">
                <div class="btn-close-off-canvas">
                    <i class="fa fa-close"></i>
                </div>

                <div class="off-canvas-inner">
                    <!-- search box start -->
                    <div class="search-box-offcanvas">
                        <form>
                            <input type="text" placeholder="Search Here...">
                            <button class="search-btn"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                    <!-- search box end -->

                    <!-- mobile menu start -->
                    <div class="mobile-navigation">

                        <!-- mobile menu navigation start -->
                        <nav>
                            <ul class="mobile-menu">
                                <li class="menu-item-has-children"><a href="{{ url('/') }}">Home</a>
                                </li>
                                <li class="menu-item-has-children "><a href="{{ url('Shop') }}">shop</a>
                                </li>
                                <li><a href="{{ url('Contact') }}">Contact us</a></li>
                            </ul>
                        </nav>
                        <!-- mobile menu navigation end -->
                    </div>
                    <!-- mobile menu end -->

                    <div class="mobile-settings">
                        <ul class="nav">
                            <li>
                                <div class="dropdown mobile-top-dropdown">
                                    <a href="#" class="dropdown-toggle" id="myaccount" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        My Account
                                        <i class="fa fa-angle-down"></i>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="myaccount">
                                        <a class="dropdown-item" href="{{ url('Profile') }}">my account</a>
                                        <a class="dropdown-item" href="{{ url('Account') }}"> login</a>
                                        <a class="dropdown-item" href="{{ url('Account') }}">register</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <!-- offcanvas widget area start -->
                    <div class="offcanvas-widget-area">
                        <div class="off-canvas-contact-widget">
                            <ul>
                                <li><i class="fa fa-mobile"></i>
                                    <a href="#">0123456789</a>
                                </li>
                                <li><i class="fa fa-envelope-o"></i>
                                    <a href="#">info@yourdomain.com</a>
                                </li>
                            </ul>
                        </div>
                        <div class="off-canvas-social-widget">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-pinterest-p"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-youtube-play"></i></a>
                        </div>
                    </div>
                    <!-- offcanvas widget area end -->
                </div>
            </div>
        </aside>
        <!-- off-canvas menu end -->
        <!-- offcanvas mobile menu end -->
    </header>
@endsection

@section('header_search')
    <div class="offcanvas-search-wrapper">
        <div class="offcanvas-search-inner">
            <div class="offcanvas-close">
                <i class="fa fa-close"></i>
            </div>
            <div class="container">
                <div class="offcanvas-search-box">
                    <form class="d-flex bdr-bottom w-100">
                        <input type="text" placeholder="Search entire storage here...">
                        <button class="search-btn"><i class="fa fa-search"></i>search</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
