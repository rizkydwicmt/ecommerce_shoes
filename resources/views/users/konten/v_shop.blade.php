@extends('users/core/main')
@extends('users/core/header')
@extends('users/core/footer')

@section('title', 'Halaman Shop')
@section('custom_style')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection

@section('konten')
    <!-- breadcrumb area start -->
    <div class="breadcrumb-area breadcrumb-img bg-img" data-bg="{{ asset('assets/img/banner/shop.jpg') }}">
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
                        {{-- <div class="sidebar-single">
                            <h6 class="sidebar-title">Categories</h6>
                            <div class="sidebar-body">
                                <ul class="radio-container search-list">
                                    <li>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" id="customCheck50">
                                            <label class="custom-control-label" for="customCheck50">$7.00 - $9.00 (2)</label>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div> --}}
                        <!-- single sidebar end -->

                        <!-- single sidebar start -->
                        <div class="sidebar-single">
                            <h6 class="sidebar-title">color</h6>
                            <div class="sidebar-body">
                                <ul class="checkbox-container search-list" id="warna">
                                </ul>
                            </div>
                        </div>
                        <!-- single sidebar end -->

                        <!-- single sidebar start -->
                        <div class="sidebar-single">
                            <h6 class="sidebar-title">size</h6>
                            <div class="sidebar-body">
                                <ul class="checkbox-container search-list" id='ukuran'>
                                </ul>
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
                            @foreach ($barang as $item)
                            <div class="col-md-4 col-sm-6" id="barang_{{ $item->ID_BAR }}" >
                                <!-- product grid start -->
                                <div class="product-item">
                                    <div class="product-thumb">
                                        <a href="{{ url('Product_detail/'.$item->ID_BAR ) }}">
                                            <img src="{{ url('assets/img/product/'.$item->FOTO_BAR ) }}" alt="product thumb">
                                        </a>
                                        <div class="product-label">
                                            <span>new</span>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-caption">
                                            <h6 class="product-name">
                                                <a href="{{ url('Product_detail/'.$item->ID_BAR) }}">{{ $item->NAMA_BAR }}</a>
                                            </h6>
                                            <div class="price-box">
                                                <span class="price-regular">{{ $item->HARGA_BAR }}</span>
                                            </div>
                                            <a class="add-to-cart" href="{{ url('Product_detail/'.$item->ID_BAR) }}"><i class="fa fa-shopping-cart"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- product grid end -->
                                <!-- product list item start -->
                                <div class="product-list-item">
                                    <div class="product-thumb">
                                        <a href="{{ url('Product_detail') }}">
                                            <img src="{{ url('assets/img/product/'.$item->FOTO_BAR ) }}" alt="product thumb">
                                        </a>
                                        <div class="product-label">
                                            <span>new</span>
                                        </div>
                                    </div>
                                    <div class="product-content-list">
                                        <h4 class="product-name"><a href="{{ url('Product_detail/'.$item->ID_BAR) }}">{{ $item->NAMA_BAR }}</a></h4>
                                        <div class="price-box">
                                            <span class="price-regular">{{ $item->HARGA_BAR }}</span>
                                        </div>
                                        <p>{{ $item->DESKRIPSI }}
                                        </p>
                                        <a href="{{ url('Product_detail/'.$item->ID_BAR) }}" class="btn btn-large hover-color">Add To Cart</a>
                                    </div>
                                </div>
                                <!-- product list item end -->
                            </div>
                            @endforeach
                            <!-- product single item end -->
                        </div>
                        <!-- product item list wrapper end -->

                        <!-- start pagination area -->
                        <div class="paginatoin-area text-center">
                            <ul class="pagination-box">
                                <li><a class="previous" href="#"><i class="fa fa-angle-left"></i></a></li>
                                <li class="active"><a href="#">1</a></li>
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

@section('script_custom')
    <script>
        const token = $('meta[name="csrf-token"]').attr('content');
        const url = '{{ url('Shop') }}';
        let val_ukuran = new Array();
        let val_warna = new Array();

        //warna
        async function warna(id = null) {
            const warna = await fetch(url+'/warna', 
            {
                method: 'PUT',
                credentials: "same-origin",
                mode: 'cors',
                cache: 'no-cache',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': token,
                },
                redirect: 'follow',
                referrerPolicy: 'no-referrer'
            }).then(response => response.json());
            return warna;
        }

        //ukuran
        async function ukuran(id = null) {
            const ukuran = await fetch(url+'/ukuran', 
            {
                method: 'PUT',
                credentials: "same-origin",
                mode: 'cors',
                cache: 'no-cache',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': token,
                },
                redirect: 'follow',
                referrerPolicy: 'no-referrer'
            }).then(response => response.json());
            return ukuran;
        }

        async function detail_barang(atribut, id) {
            if(atribut === 'ukuran'){
                if(document.getElementById("ukuran_"+id).checked){
                    val_ukuran.push(id);
                }else{
                    while (val_ukuran.indexOf(id) !== -1) {
                        val_ukuran.splice(val_ukuran.indexOf(id), 1);
                    }
                }
            }else if(atribut === 'warna'){
                if(document.getElementById("warna_"+id).checked){
                    val_warna.push(id);
                }else{
                    while (val_warna.indexOf(id) !== -1) {
                        val_warna.splice(val_warna.indexOf(id), 1);
                    }
                }
            }
            
            // console.log(JSON.stringify({val_ukuran,val_warna}));

            const resultFilter = await fetch(url+'/filter', 
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
                body: JSON.stringify({val_ukuran,val_warna}),
            }).then(response => response.json());

            return resultFilter;
        }

        function Filter(atribut, id){
            @foreach ($barang as $item)
                $('#barang_{{ $item->ID_BAR }}').hide();
            @endforeach

            detail_barang(atribut, id).then(function(result) {
                result.forEach(element => {
                    $('#barang_'+element.ID_BAR).show();
                });
            });
        }

        warna().then(function(result) {
            let html = '';
            for(i=0; i<result.length; i++){
                html += "<li><div class='custom-control custom-checkbox'><input type='checkbox' class='custom-control-input' name='cekWarna[]' onChange=\"Filter('warna','"+result[i].ID_WAR+"')\" id='warna_"+result[i].ID_WAR+"'><label class='custom-control-label' for='warna_"+result[i].ID_WAR+"'>"+result[i].WARNA+"</label></div></li>";
            }
            $('#warna').html(html);
        });

        ukuran().then(function(result) {
            let html = '';
            for(i=0; i<result.length; i++){
                html += "<li><div class='custom-control custom-checkbox'><input type='checkbox' class='custom-control-input' name='cekUkuran[]' onChange=\"Filter('ukuran','"+result[i].ID_UK+"')\" id='ukuran_"+result[i].ID_UK+"'><label class='custom-control-label' for='ukuran_"+result[i].ID_UK+"'>"+result[i].UKURAN+"</label></div></li>";
            }
            $('#ukuran').html(html);
        });

    </script>
@endsection