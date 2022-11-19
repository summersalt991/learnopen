<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class dbcontroller extends Controller
{
    function pageview()
    {
       //$data=Customer::all();
       $data=Customer::paginate(3);
        return view('showlist',['collection'=>$data]);
    }
    function dbview()
    {
       $data=Customer::all();
    
        return view('showlistall',['collection'=>$data]);
    }
    function insert(Request $req)
    {
        $customer= new Customer;
        $customer->name=$req->name;
        $customer->address=$req->address;
        $customer->save();
        return redirect('form');
        // return $req->input();
    }
    function delete($id)
    {
        $data=Customer::find($id);
        $data->delete();
        return redirect('form');
    }
    function edit($id)
    {
        $data=Customer::find($id);
        return view('edit',['edidat'=>$data]);
        //  $data;return
    }
    function update(Request $req)
    {
        $data=Customer::find($req->id);
        $data->name=$req->name;
        $data->address=$req->address;
        $data->save();
        return redirect('form');
        
    }
}
