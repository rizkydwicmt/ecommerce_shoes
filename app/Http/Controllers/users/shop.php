<?php

namespace App\Http\Controllers\users;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class shop extends Controller
{
    public function show(){
        $data = array(
            'barang' => DB::table('barang')->get(), 
        );
        return view('users/konten/v_shop',$data);
    }

    public function list_warna(){
        $warna = DB::table('warna')->get();
        echo json_encode($warna);
    }

    public function list_ukuran(){
        $ukuran = DB::table('ukuran')->get();
        echo json_encode($ukuran);
    }

    public function filter(Request $request){;
        if($request->val_ukuran && $request->val_warna){
            $detail = DB::table('detail_barang')
                ->distinct()
                ->select('ID_BAR')
                ->whereIn('ID_UK', $request->val_ukuran)
                ->whereIn('ID_WAR', $request->val_warna)
                ->get();
        }else{
            $detail = [];
        }
        
        echo json_encode($detail);
    }

}
