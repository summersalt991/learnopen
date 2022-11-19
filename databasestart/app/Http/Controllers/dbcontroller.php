<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Illuminate\Support\Facades\DB;
use App\Models\Customer;
class dbcontroller extends Controller
{
   function dbfunc()
   {   
   // $dat= DB::select("select * from customer");
   $dat=Customer::all();
    
    return view('dbview',['collection'=>$dat]);}

}
