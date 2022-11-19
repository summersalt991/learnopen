<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class dbcontroller extends Controller
{
    //
    function show()
    {
        // $dat= DB::select("select * from customers");
        //$dat= DB::table('customers')->where('id',6)->get();
        // $dat= DB::table('customers')->where('address','goa')->get();
        //  $dat= DB::table('customers')->find(4);
       // $dat=(array)DB::table('customers')->find(4);
        // return $dat;
       // return view('show',['collection'=>$dat]);
        // return DB::table('customers')->count();
       // return DB::table('customers')->insert(['name'=>'kohli','address'=>'delhi']);
       // return DB::table('customers')->where('id',12)->update(['name'=>'ikhtar','address'=>'nagpur']);
    //    return DB::table('customers')->sum('id');
    //    return DB::table('customers')->avg('id');
    //    return DB::table('customers')->max('id');
    //    return DB::table('customers')->min('id');
    //    return DB::table('customers')->min('name');
       return DB::table('customers')->max('name');

       
    }
}
