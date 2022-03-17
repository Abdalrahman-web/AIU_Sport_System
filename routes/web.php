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
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::group(['prefix'=>'add'],function(){

    Route::get('/insert',[App\Http\Controllers\Front\AddController::class,'insert'])->name('add.insert');
    Route::post('/create',[App\Http\Controllers\Front\AddController::class,'create'])->name('add.create');
});

Route::group(['prefix'=>'addcoache'],function(){

    Route::get('/insert',[App\Http\Controllers\Front\AddcoacheController::class,'insert'])->name('addcoache.insert');
    Route::post('/create',[App\Http\Controllers\Front\AddcoacheController::class,'create'])->name('addcoache.create');
});

Route::group(['prefix'=>'show'],function(){

    Route::get('/coaches',[App\Http\Controllers\Front\AddcoacheController::class,'show'])->name('show.coaches');
    Route::get('/players',[App\Http\Controllers\Front\AddController::class,'show'])->name('show.players');
    Route::get('/admins',[App\Http\Controllers\Front\AdminController::class,'index'])->name('show.admins');
});