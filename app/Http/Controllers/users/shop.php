<?php

namespace App\Http\Controllers\users;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class shop extends Controller
{
    public function show(){
        return view('users/konten/v_shop');
    }
}
