<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Controllerloginx extends Controller
{
    function displayinput(Request $req){
        echo "form submitted";
        
        $data= $req->input('username');
        $req->session()->flash('flashuser',$data);
        return redirect('loginx');
    }
}
