<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class dbcontroller extends Controller
{
    //
    function getdata()
    {
        // return DB::table('customers')->join('products','customers.id','=','products.pid')->get();
        // return DB::table('customers')->join('products','customers.id','=','products.pid')->select('products.*')->get();
        // return DB::table('customers')->join('products','customers.id','=','products.pid')->select('products.pname')->get();
        return DB::table('customers')->join('products','customers.id','=','products.pid')->where('products.pid','=','3')->select('customers.name')->get();
    }
}
