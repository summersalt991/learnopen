<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class httpcontroller extends Controller
{
    function testrequest(Request $req)
    {
        echo " form submitted ";
        
        return $req->input();
    }
}
