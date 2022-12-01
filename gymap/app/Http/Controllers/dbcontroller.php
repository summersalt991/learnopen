<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gymdata;
use App\Models\Gymlist;
class dbcontroller extends Controller
{
    
    function savedb(Request $req){
        $dat=new Gymdata;
        $dat->exerciseno = $req->eno;
        $dat->exercise = $req->ename ;
        $dat->weight = $req->weight ;
        $dat->sets = $req->sets ;
        $dat->reps = $req->reps ;
        $dat->save();
        return redirect('/');
    }
    function dbview()
    {
       $data=Gymdata::all();
    
        return view('viewpage',['collection'=>$data]);
}
function bringlist(){
    $da=Gymlist::all();
    return view('exercisestart',['selecti'=>$da]);
}
}