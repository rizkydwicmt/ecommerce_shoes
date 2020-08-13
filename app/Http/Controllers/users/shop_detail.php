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

    public function get_barang($atribut, $id){
        $callback = array(
            'atribut' => $atribut,
            'id' => $id,
        );

        echo json_encode($callback);
    }
}
