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
    return view('firstmoc');
});
Route::view('/goexer','exercisestart');
Route::post('/savedata',[dbcontroller::class,'savedb']);
Route::get('/datapage',[dbcontroller::class,'dbview']);
Route::get('/bl',[dbcontroller::class,'bringlist']);
