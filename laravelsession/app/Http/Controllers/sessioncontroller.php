<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sessioncontroller extends Controller
{
    //
    function logincheck(Request $req)
    {
    $data=$req->input('username');
    $req->session()->put('sessionuser',$data);
    //echo session('sessionuser');
        return redirect('profile');
    }  
}
