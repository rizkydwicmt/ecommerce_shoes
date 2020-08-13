@extends('users/core/main')
@extends('users/core/header')
@extends('users/core/footer')

@section('title', 'Halaman Product Detail')

@section('konten')
    <!-- breadcrumb area start -->
    <div class="breadcrumb-area breadcrumb-img bg-img" data-bg="{{ asset('assets/img/banner/shop.jpg') }}">
    </div>
    <!-- breadcrumb area end -->

    <!-- page main wrapper start -->
    <div class="shop-main-wrapper section-padding pb-0">
        <div class="container">
            <div class="row">
                <!-- product details wrapper start -->
                <div class="col-lg-12 order-1 order-lg-2">
                    <!-- product details inner end -->
                    <div class="product-details-inner">
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="product-large-slider">
                                    <div class="pro-large-img img-zoom">
                                        <img src="{{ asset('assets/img/product/product-details-img1.jpg') }}" alt="product-details" />
                                    </div>
                                    <div class="pro-large-img img-zoom">
                                        <img src="{{ asset('assets/img/product/product-details-img2.jpg') }}" alt="product-details" />
                                    </div>
                                    <div class="pro-large-img img-zoom">
                                        <img src="{{ asset('assets/img/product/product-details-img3.jpg') }}" alt="product-details" />
                                    </div>
                                    <div class="pro-large-img img-zoom">
                                        <img src="{{ asset('assets/img/product/product-details-img4.jpg') }}" alt="product-details" />
                                    </div>
                                </div>
                                <div class="pro-nav slick-row-10 slick-arrow-style">
                                    <div class="pro-nav-thumb">
                                        <img src="{{ asset('assets/img/product/product-details-img1.jpg') }}" alt="product-details" />
                                    </div>
                                    <div class="pro-nav-thumb">
                                        <img src="{{ asset('assets/img/product/product-details-img2.jpg') }}" alt="product-details" />
                                    </div>
                                    <div class="pro-nav-thumb">
                                        <img src="{{ asset('assets/img/product/product-details-img3.jpg') }}" alt="product-details" />
                                    </div>
                                    <div class="pro-nav-thumb">
                                        <img src="{{ asset('assets/img/product/product-details-img4.jpg') }}" alt="product-details" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="product-details-des">

                                    <form action="{{ Url('Product_detail/'.$barang[0]->ID_BAR) }}" method="post">
                                        @csrf
                                        <h3 class="product-name" id='nama_barang'>{{ $barang[0]->NAMA_BAR }}</h3>
                                        <div class="price-box">
                                            <span class="price-regular" id='harga_barang'>{{ $barang[0]->HARGA_BAR }}</span>
                                        </div>
                                        <div class="availability">
                                            <i class="fa fa-check-circle"></i>
                                            <span id='stok'>{{ $barang[0]->STOCK_BAR }} in stock</span>
                                        </div>
                                        <p class="pro-desc" id='deskripsi_barang'>{{ $barang[0]->DESKRIPSI }}</p>
                                        <div class="quantity-cart-box d-flex align-items-center">
                                            <h6 class="option-title">qty:</h6>
                                            <div class="quantity">
                                                <div class=""><input type="number" min="1" value="1" name="jumlah"  id='jumlah' onchange="ganti_harga()"></div>
                                            </div>
                                        </div>
                                        <div class="pro-size">
                                            <h6 class="option-title">ukuran :</h6>
                                            <select class="" id='ukuran' name="ukuran" onChange="get_barang('ukuran')">
                                                @foreach ($barang->unique('ID_UK') as $item)
                                                    <option value='{{ $item->ID_UK }}'>{{ $item->UKURAN }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="color-option">
                                            <h6 class="option-title">#Sementara warna :</h6>
                                            <select class="" id='warna' name="warna" onChange="get_barang('warna')">
                                                @foreach ($barang->unique('ID_WAR') as $item)
                                                    <option value='{{ $item->ID_WAR }}'>{{ $item->WARNA }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <input type="hidden" name="gambar" value="{{ $barang[0]->FOTO_BAR }}">
                                        <input type="hidden" name="harga" value="{{ $barang[0]->HARGA_BAR }}">
                                        <input type="hidden" name="nama" value="{{ $barang[0]->NAMA_BAR }}">
                                        <div class="quantity-cart-box d-flex align-items-center">
                                            <div class="action_link">
                                                <button type="submit" class="btn btn-cart2">Add To Cart</button>
                                            </div>
                                        </div>
                                    </form>

                                    <div class="color-option">
                                        <h6 class="option-title">#Hanya semple warna :</h6>
                                        <ul class="color-categories">
                                            <li>
                                                <a class="c-lightblue" href="#" title="LightSteelblue"></a>
                                            </li>
                                            <li>
                                                <a class="c-darktan" href="#" title="Darktan"></a>
                                            </li>
                                            <li>
                                                <a class="c-grey" href="#" title="Grey"></a>
                                            </li>
                                            <li>
                                                <a class="c-brown" href="#" title="Brown"></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="like-icon">
                                        <a class="facebook" href="#"><i class="fa fa-facebook"></i>like</a>
                                        <a class="twitter" href="#"><i class="fa fa-twitter"></i>tweet</a>
                                        <a class="pinterest" href="#"><i class="fa fa-pinterest"></i>save</a>
                                        <a class="google" href="#"><i class="fa fa-google-plus"></i>share</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- product details inner end -->

                    <!-- product details reviews start -->
                    <div class="product-details-reviews section-padding pb-0">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="product-review-info">
                                    <ul class="nav review-tab">
                                        <li>
                                            <a class="active" data-toggle="tab" href="#tab_one">description</a>
                                        </li>
                                        <li>
                                            <a data-toggle="tab" href="#tab_two">information</a>
                                        </li>
                                        <li>
                                            <a data-toggle="tab" href="#tab_three">reviews (1)</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content reviews-tab">
                                        <div class="tab-pane fade show active" id="tab_one">
                                            <div class="tab-one">
                                                <p>{{ $barang[0]->DESKRIPSI }}
                                                </p>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab_two">
                                            <table class="table table-bordered">
                                                <tbody>
                                                    <tr>
                                                        <td>color</td>
                                                        <td>@foreach ($barang as $item)
                                                            {{ $item->WARNA.', ' }}
                                                        @endforeach</td>
                                                    </tr>
                                                    <tr>
                                                        <td>size</td>
                                                        <td>@foreach ($barang as $item)
                                                            {{ $item->UKURAN.', ' }}
                                                        @endforeach</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="tab-pane fade" id="tab_three">
                                            <form action="#" class="review-form">
                                                <h5>1 review for <span>Chaz Kangeroo</span></h5>
                                                <div class="total-reviews">
                                                    <div class="rev-avatar">
                                                        <img src="{{ asset('assets/img/about/avatar.jpg') }}" alt="">
                                                    </div>
                                                    <div class="review-box">
                                                        <div class="ratings">
                                                            <span class="good"><i class="fa fa-star"></i></span>
                                                            <span class="good"><i class="fa fa-star"></i></span>
                                                            <span class="good"><i class="fa fa-star"></i></span>
                                                            <span class="good"><i class="fa fa-star"></i></span>
                                                            <span><i class="fa fa-star"></i></span>
                                                        </div>
                                                        <div class="post-author">
                                                            <p><span>admin -</span> 30 Mar, 2019</p>
                                                        </div>
                                                        <p>Aliquam fringilla euismod risus ac bibendum. Sed sit
                                                            amet sem varius ante feugiat lacinia. Nunc ipsum nulla,
                                                            vulputate ut venenatis vitae, malesuada ut mi. Quisque
                                                            iaculis, dui congue placerat pretium, augue erat
                                                            accumsan lacus</p>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col">
                                                        <label class="col-form-label"><span class="text-danger">*</span>
                                                            Your Name</label>
                                                        <input type="text" class="form-control" required>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col">
                                                        <label class="col-form-label"><span class="text-danger">*</span>
                                                            Your Email</label>
                                                        <input type="email" class="form-control" required>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col">
                                                        <label class="col-form-label"><span class="text-danger">*</span>
                                                            Your Review</label>
                                                        <textarea class="form-control" required></textarea>
                                                        <div class="help-block pt-10"><span
                                                                class="text-danger">Note:</span>
                                                            HTML is not translated!
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col">
                                                        <label class="col-form-label"><span class="text-danger">*</span>
                                                            Rating</label>
                                                        &nbsp;&nbsp;&nbsp; Bad&nbsp;
                                                        <input type="radio" value="1" name="rating">
                                                        &nbsp;
                                                        <input type="radio" value="2" name="rating">
                                                        &nbsp;
                                                        <input type="radio" value="3" name="rating">
                                                        &nbsp;
                                                        <input type="radio" value="4" name="rating">
                                                        &nbsp;
                                                        <input type="radio" value="5" name="rating" checked>
                                                        &nbsp;Good
                                                    </div>
                                                </div>
                                                <div class="buttons">
                                                    <button class="btn btn-sqr" type="submit">Continue</button>
                                                </div>
                                            </form> <!-- end of review-form -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- product details reviews end -->
                </div>
                <!-- product details wrapper end -->
            </div>
        </div>
    </div>
    <!-- page main wrapper end -->

    <!-- Related product area start -->
    <section class="product-gallery section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title text-center">
                        <h3 class="title">RELATED PRODUCT</h3>
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
                                <a href="#">
                                    <img src="{{ asset('assets/img/product/product-1.jpg') }}" alt="product thumb">
                                </a>
                                <div class="button-group">
                                    <a href="#" data-toggle="tooltip" title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
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
                                        <a href="#">Quickiin Mens shoes</a>
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
                        <!-- product single item end -->

                        <!-- product single item start -->
                        <div class="product-item">
                            <div class="product-thumb">
                                <a href="#">
                                    <img src="{{ asset('assets/img/product/product-2.jpg') }}" alt="product thumb">
                                </a>
                                <div class="button-group">
                                    <a href="#" data-toggle="tooltip" title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                    <a href="#" data-toggle="modal" data-target="#quick_view"><span data-toggle="tooltip"  title="Quick View"><i class="fa fa-eye"></i></span></a>
                                </div>
                                <div class="product-label">
                                    <span>new</span>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="product-caption">
                                    <h6 class="product-name">
                                        <a href="#">Womens High Hills</a>
                                    </h6>
                                    <div class="price-box">
                                        <span class="price-old"><del>$80.00</del></span>
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
                        <!-- product single item end -->

                        <!-- product single item start -->
                        <div class="product-item">
                            <div class="product-thumb">
                                <a href="#">
                                    <img src="{{ asset('assets/img/product/product-3.jpg') }}" alt="product thumb">
                                </a>
                                <div class="button-group">
                                    <a href="#" data-toggle="tooltip" title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                    <a href="#" data-toggle="modal" data-target="#quick_view"><span data-toggle="tooltip"  title="Quick View"><i class="fa fa-eye"></i></span></a>
                                </div>
                                <div class="product-label">
                                    <span>new</span>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="product-caption">
                                    <h6 class="product-name">
                                        <a href="#">Leather Mens slippers</a>
                                    </h6>
                                    <div class="price-box">
                                        <span class="price-old"><del>$60.00</del></span>
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
                        <!-- product single item end -->

                        <!-- product single item start -->
                        <div class="product-item">
                            <div class="product-thumb">
                                <a href="#">
                                    <img src="{{ asset('assets/img/product/product-4.jpg') }}" alt="product thumb">
                                </a>
                                <div class="button-group">
                                    <a href="#" data-toggle="tooltip" title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
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
                                        <a href="#">Rexpo Womens shoes</a>
                                    </h6>
                                    <div class="price-box">
                                        <span class="price-old"><del>$100.00</del></span>
                                        <span class="price-regular">$85.00</span>
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
                        <!-- product single item end -->

                        <!-- product single item start -->
                        <div class="product-item">
                            <div class="product-thumb">
                                <a href="#">
                                    <img src="{{ asset('assets/img/product/product-5.jpg') }}" alt="product thumb">
                                </a>
                                <div class="button-group">
                                    <a href="#" data-toggle="tooltip" title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                    <a href="#" data-toggle="modal" data-target="#quick_view"><span data-toggle="tooltip"  title="Quick View"><i class="fa fa-eye"></i></span></a>
                                </div>
                                <div class="product-label">
                                    <span>new</span>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="product-caption">
                                    <h6 class="product-name">
                                        <a href="#">Primitive Mens shoes</a>
                                    </h6>
                                    <div class="price-box">
                                        <span class="price-old"><del>$75.00</del></span>
                                        <span class="price-regular">$55.00</span>
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
                        <!-- product single item end -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Related product area end -->
@endsection

@section('script_custom')
    <script>
        const url = '{{ url('Product_detail') }}';
        const token = $('[name="_token"]').val();
        const id_barang = '{{ $barang[0]->ID_BAR }}';
        const harga_barang = parseInt($('#harga_barang').html());
        // console.log(token);
        //barang
        async function get_barang(atribut) {
            const id_ukuran = $('#ukuran').val();
            const id_warna = $('#warna').val();
            let html_ukuran = '';
            let html_warna = '';

            const barang = await fetch(url+'/', 
            {
                method: 'PUT',
                credentials: "same-origin",
                mode: 'cors',
                cache: 'no-cache',
                headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json',
                    'X-CSRF-TOKEN': token,
                },
                redirect: 'follow',
                referrerPolicy: 'no-referrer',
                body: JSON.stringify({id_barang, id_ukuran, id_warna}),
            })
            .then(response => response.json())
            .then(data => {
                $('#stok').html(data['barang'][0].STOCK_BAR+' in stock');
                if(atribut === 'warna'){
                    data['ukuran'].forEach(element => {
                        html_ukuran += "<option value='"+element.ID_UK+"'>"+element.UKURAN+"</option>";
                    });
                    $('#ukuran').html(html_ukuran);
                    // console.log(html_ukuran);   
                }else{
                    data['warna'].forEach(element => {
                        html_warna += "<option value='"+element.ID_WAR+"'>"+element.WARNA+"</option>";
                    });
                    $('#warna').html(html_warna);
                    // console.log(html_warna);   
                }
            });
            return barang;
        }

        function ganti_harga(){
            $('#harga_barang').html(harga_barang*parseInt($('#jumlah').val()));
            console.log(harga_barang*parseInt($('#jumlah').val()));
        }

    </script>
@endsection