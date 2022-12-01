<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class filecontrol extends Controller
{
    function index(Request $req)
    {
        return $req->file('doc')->store('img');
    }
}
