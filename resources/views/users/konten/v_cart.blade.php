@extends('users/core/main')
@extends('users/core/header')
@extends('users/core/footer')

@section('title', 'Halaman Cart')
@section('custom_style')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection

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
                                        <th class="pro-thumbnail">Gambar</th>
                                        <th class="pro-title">Produk</th>
                                        <th class="pro-price">Harga</th>
                                        <th class="pro-quantity">Jumlah</th>
                                        <th class="pro-subtotal">Total</th>
                                        <th class="pro-remove">Remove</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $total = 0;
                                    ?>
                                    @if(session('cart') !== null)
                                    @foreach ($cart as $item)
                                    <tr id="tr_{{ $loop->iteration }}">
                                        <td class="pro-thumbnail"><a href="#"><img class="img-fluid" src="{{ asset('assets/img/product/'.$item['gambar'] ) }}" alt="Product" /></a></td>
                                        <td class="pro-title"><a href="{{ Url('Product_detail/'.$item['id_barang']) }}">{{ $item['nama'].' '.$item['id_warna'].' '.$item['id_ukuran'] }}</a></td>
                                        <td class="pro-price"><span id='harga_{{ $loop->iteration }}'>{{ $item['harga'] }}</span></td>
                                        <td class="pro-quantity">
                                            <div><input type="number" value="{{ $item['jumlah'] }}" id="jumlah_{{ $loop->iteration }}" min="1" onChange="ganti_harga('{{ $loop->iteration }}')" style="width: 60px"></div>
                                        </td>
                                        <td class="pro-subtotal">
                                            <span id="subtotal_{{ $loop->iteration }}">
                                            <?php
                                                $total = $total+(int)$item['harga']*(int)$item['jumlah'];
                                                echo $item['harga']*$item['jumlah'];
                                            ?>
                                            </span>
                                        </td>
                                        <td class="pro-remove"><button type="button" onClick="remove('{{ $loop->iteration }}')"><i class="fa fa-trash-o"></i></button></td>
                                    </tr>
                                    @endforeach
                                    @endif
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
                                <button class="btn btn-sqr" type="button" onClick="perbarui()">Update Cart</button>
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
                                        <tr class="total">
                                            <td>Total</td>
                                        <td class="total-amount" id="total">{{ $total }}</td>
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

@section('script_custom')
    <script>
        const token = $('meta[name="csrf-token"]').attr('content');
        const url = '{{ url('Cart') }}';

        function ganti_harga(id){
            const jumlah = $("#jumlah_"+id).val();
            const harga = parseInt($("#harga_"+id).html());
            const subtotal = jumlah*harga;

            $("#subtotal_"+id).html(subtotal);
            ganti_total();
        }

        function ganti_total(){
            let total = 0;

            for (let i = 1; i <= ($('table tbody tr').length-1); i++) {
                total += parseInt($("#subtotal_"+i).html());
            }
            // console.log(total);
            $("#total").html(total);
        }

        function remove(id){
            $("#tr_"+id).html('');
        }

        function remove_minicart(id){
            $("#minicart_"+id).html('');
        }

        async function perbarui(){
            var obj = JSON.stringify({
                'row1' : {
                    'key1' : 'input1',
                    'key2' : 'input2'
                },
                'row2' : {
                    'key3' : 'input3',
                    'key4' : 'input4'
                }
            });
            console.log(obj);
            const barang = await fetch(url, 
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
                body: obj,
            })
            .then(response => console.log('sukses'));

            return barang;
        }
    </script>
@endsection