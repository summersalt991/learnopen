<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dbcontroller;
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

Route::get('/', function () {
    return view('welcome');
});
Route::view('form','form');
Route::get('page',[dbcontroller::class,'pageview']);
Route::get('allist',[dbcontroller::class,'dbview']);
Route::post('insert',[dbcontroller::class,'insert']);
Route::get('delete/{id}',[dbcontroller::class,'delete']);
Route::get('edit/{id}',[dbcontroller::class,'edit']);
Route::post('update',[dbcontroller::class,'update']);
