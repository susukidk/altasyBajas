<?php

use App\Http\Controllers\Registros;
use App\Models\Registro;
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
*/
Route::get('/',[Registros::class,'index']);
Route::get('/create',[Registros::class,'create']);
Route::post('/store',[Registros::class, 'store']);  
Route::get('/edit/{id}',[Registros::class, 'edit']) ->name('edit') ;
Route::put('/update/{id}',[Registros::class, 'update'])->name('update');
Route::get('/show/{id}',[Registros::class, 'show'])->name('show');
Route::delete('/destroy/{id}',[Registros::class, 'destroy'])->name('destroy');