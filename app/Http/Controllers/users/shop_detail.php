<?php

namespace App\Http\Controllers\users;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class shop_detail extends Controller
{
    public function show($id){
        $data = array(
            'barang' => DB::table('detail_barang')
                    ->join('barang', 'detail_barang.ID_BAR', '=', 'barang.ID_BAR')
                    ->join('ukuran', 'detail_barang.ID_UK', '=', 'ukuran.ID_UK')
                    ->join('warna', 'detail_barang.ID_WAR', '=', 'warna.ID_WAR')
                    ->select('barang.*', 'ukuran.UKURAN', 'warna.WARNA', 'detail_barang.*')
                    ->where('detail_barang.ID_BAR', $id)
                    ->get(),
        );
        //dd($data);
        if (!$data['barang']->isEmpty()) {
            return view('users/konten/v_shop_detail',$data);
        }else{
            return redirect('Product_detail');
        }
    }

    public function get_barang(Request $request){

        $barang = DB::table('detail_barang')
        ->join('barang', 'detail_barang.ID_BAR', '=', 'barang.ID_BAR')
        ->where('detail_barang.ID_BAR', $request->id_barang)
        ->where('detail_barang.ID_UK', $request->id_ukuran)
        ->where('detail_barang.ID_WAR', $request->id_warna)
        ->get();

        $ukuran = DB::table('detail_barang')
        ->join('ukuran', 'detail_barang.ID_UK', '=', 'ukuran.ID_UK')
        ->where('detail_barang.ID_BAR', $request->id_barang)
        ->where('detail_barang.ID_WAR', $request->id_warna)
        ->select('ukuran.*')
        ->distinct()
        ->get();

        $warna = DB::table('detail_barang')
        ->join('warna', 'detail_barang.ID_WAR', '=', 'warna.ID_WAR')
        ->where('detail_barang.ID_BAR', $request->id_barang)
        ->where('detail_barang.ID_UK', $request->id_ukuran)
        ->select('warna.*')
        ->distinct()
        ->get();

        $callback = array(
            'barang' => $barang, 
            'warna' => $warna, 
            'ukuran' => $ukuran, 
        );

        echo json_encode($callback);
    }

    public function post_barang(Request $request, $id){
        $this->plus_barang($request, $id);
        return redirect('Cart');
    }

    function plus_barang($request, $id){
        $data = array(
            'id_barang' => $id, 
            'id_ukuran' => $request->ukuran, 
            'id_warna' => $request->warna, 
            'nama' => $request->nama, 
            'gambar' => $request->gambar, 
            'harga' => $request->harga, 
            'jumlah' => (int)$request->jumlah, 
        );
        
        if(session('cart') != null){

            $carts = session('cart');
            foreach($carts as &$cart){
                if($cart['id_barang'] == $id && $cart['id_ukuran'] == $request->ukuran && $cart['id_warna'] == $request->warna){
                    $cart['jumlah'] = $cart['jumlah']+$request->jumlah;
                }
            }
        
            if(session('cart') !== $carts){
                $request->session()->put('cart', $carts);
            }else{
                $request->session()->push('cart', $data);
            }

        }else{
            $request->session()->push('cart', $data);
        }
    }
}
