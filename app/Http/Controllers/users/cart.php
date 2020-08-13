<?php

namespace App\Http\Controllers\users;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class cart extends Controller
{
    public function show(){
        $data = array(
                'cart' => session('cart'), 
            );
        return view('users/konten/v_cart', $data);
    }
}
