<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{

    public function login()
    {
        //$this->cek_sesi();
        return view('admin/konten/login');
    }

    public function cek_login(Request $request)
    {

        return redirect('admin');
    }

    public function logout(){
        Session::flush();
        return redirect('admin/Login')->with('alert-primary','Anda berhasil logout');
    }


}
