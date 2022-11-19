<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
let make three middle ware to learn 
1 global middleware
    global
2 grouped middleware 
    cater to 2pages
3 routed middleware

*/

Route::get('/', function () {
    return view('welcome');
});
Route::view('noaccess','noaccess');

Route::group(['middleware' =>['restricted']],function(){
    Route::view('page1','page1');
    Route::view('page2','page2');
});

Route::view('page3','page3')->middleware('rout');