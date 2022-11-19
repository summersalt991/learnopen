<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class usercontroller extends Controller
{
    //
    function index()
    {$dat =Http::get("https://reqres.in/api/users?page=2");
    return view('user',['collection'=>$dat['data']]);}
}
 