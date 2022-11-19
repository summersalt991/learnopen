<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controllerloginx;
use App\Http\Controllers\sessioncontroller;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::post('/gotocontrollerx',[Controllerloginx::class,'displayinput']);
Route::post('/profilecheck',[sessioncontroller::class,'logincheck']);
Route::get('/logout',function (){
                                 if(session()->has('sessionuser'))
                                   {
                                      session()->pull('sessionuser',null);
                                     }
                                    return redirect('/login');
                                });
                                    
Route::get('/', function (){return view('login');});

Route::get('/loginx', function(){return view('loginx1');});

Route::get('/profile',function(){
                                    if(session()->has('sessionuser'))
                                    {return redirect('/profilex');}
                                    echo "please enter login details";
                                    return view('/login');
                                });
Route::view('profilex','profile');
Route::view('/login','login');
Route::get('/login',function(){
    if(session()->has('sessionuser'))
    {return redirect('/profilex');}

    return view('/login');
});
