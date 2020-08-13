@extends('users/core/main')
@extends('users/core/header')
@extends('users/core/footer')

@section('title', 'Halaman Cart')

@section('konten')
    <!-- breadcrumb area start -->
    <div class="breadcrumb-area breadcrumb-img bg-img" data-bg="{{ asset('assets/img/banner/shop.jpg') }}">
    </div>
    <!-- breadcrumb area end -->

    <!-- cart main wrapper start -->
    <div class="cart-main-wrapper section-padding">
        <div class="container">
            <div class="section-bg-color">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Cart Table Area -->
                        <div class="cart-table table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th class="pro-thumbnail">Thumbnail</th>
                                        <th class="pro-title">Product</th>
                                        <th class="pro-price">Price</th>
                                        <th class="pro-quantity">Quantity</th>
                                        <th class="pro-subtotal">Total</th>
                                        <th class="pro-remove">Remove</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="pro-thumbnail"><a href="#"><img class="img-fluid" src="assets/img/product/product-1.jpg" alt="Product" /></a></td>
                                        <td class="pro-title"><a href="#">PRIMITIVE MENS SHOES</a></td>
                                        <td class="pro-price"><span>$295.00</span></td>
                                        <td class="pro-quantity">
                                            <div class="pro-qty"><input type="text" value="1"></div>
                                        </td>
                                        <td class="pro-subtotal"><span>$295.00</span></td>
                                        <td class="pro-remove"><a href="#"><i class="fa fa-trash-o"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td class="pro-thumbnail"><a href="#"><img class="img-fluid" src="assets/img/product/product-2.jpg" alt="Product" /></a></td>
                                        <td class="pro-title"><a href="#">LEATHER MENS SLIPPERS</a></td>
                                        <td class="pro-price"><span>$275.00</span></td>
                                        <td class="pro-quantity">
                                            <div class="pro-qty"><input type="text" value="2"></div>
                                        </td>
                                        <td class="pro-subtotal"><span>$550.00</span></td>
                                        <td class="pro-remove"><a href="#"><i class="fa fa-trash-o"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td class="pro-thumbnail"><a href="#"><img class="img-fluid" src="assets/img/product/product-3.jpg" alt="Product" /></a></td>
                                        <td class="pro-title"><a href="#">REXPO WOMENS SHOES</a></td>
                                        <td class="pro-price"><span>$295.00</span></td>
                                        <td class="pro-quantity">
                                            <div class="pro-qty">
                                                <input type="text" value="1" />
                                            </div>
                                        </td>
                                        <td class="pro-subtotal"><span>$295.00</span></td>
                                        <td class="pro-remove"><a href="#"><i class="fa fa-trash-o"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td class="pro-thumbnail"><a href="#"><img class="img-fluid" src="assets/img/product/product-4.jpg" alt="Product" /></a></td>
                                        <td class="pro-title"><a href="#">QUICKIIN MENS SHOES</a></td>
                                        <td class="pro-price"><span>$110.00</span></td>
                                        <td class="pro-quantity">
                                            <div class="pro-qty">
                                                <input type="text" value="3" />
                                            </div>
                                        </td>
                                        <td class="pro-subtotal"><span>$110.00</span></td>
                                        <td class="pro-remove"><a href="#"><i class="fa fa-trash-o"></i></a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- Cart Update Option -->
                        <div class="cart-update-option d-block d-md-flex justify-content-between">
                            <div class="apply-coupon-wrapper">
                                <form action="#" method="post" class=" d-block d-md-flex">
                                    <input type="text" placeholder="Enter Your Coupon Code" required />
                                    <button class="btn btn-sqr">Apply Coupon</button>
                                </form>
                            </div>
                            <div class="cart-update">
                                <a href="#" class="btn btn-sqr">Update Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-5 ml-auto">
                        <!-- Cart Calculation Area -->
                        <div class="cart-calculator-wrapper">
                            <div class="cart-calculate-items">
                                <h6>Cart Totals</h6>
                                <div class="table-responsive">
                                    <table class="table">
                                        <tr>
                                            <td>Sub Total</td>
                                            <td>$230</td>
                                        </tr>
                                        <tr>
                                            <td>Shipping</td>
                                            <td>$70</td>
                                        </tr>
                                        <tr class="total">
                                            <td>Total</td>
                                            <td class="total-amount">$300</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <a href="{{ url('Checkout') }}" class="btn btn-sqr d-block">Proceed Checkout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- cart main wrapper end -->
@endsection