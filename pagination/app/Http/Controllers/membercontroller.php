<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;
use App\Models\Member;
class membercontroller extends Controller
{
    function index()
    {
        $data=Member::all();
        return $data;
    }
}
