<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FullCalenderController;
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


Route::group(['prefix'=>'edit'],function(){

    Route::get('/player/{player_id}',[App\Http\Controllers\Front\AddController::class,'edit'])->name('edit.player');
    Route::put('/update/{player_id}',[App\Http\Controllers\Front\AddController::class,'update'])->name('update.player');
    Route::get('/coache/{id}',[App\Http\Controllers\Front\AddcoacheController::class,'edit'])->name('edit.coache');
    Route::put('/updatec/{id}',[App\Http\Controllers\Front\AddcoacheController::class,'update'])->name('update.coache');
});

Route::group(['prefix'=>'delete'],function(){

    Route::get('/player/{player_id}',[App\Http\Controllers\Front\AddController::class,'destroy'])->name('delete.player');
    Route::get('/coache/{id}',[App\Http\Controllers\Front\AddcoacheController::class,'destroy'])->name('delete.coache');
  
});


Route::get('full-calender', [FullCalenderController::class, 'index'])->name('full-calender');

Route::post('full-calender/action', [FullCalenderController::class, 'action']);

Route::get('/post',[App\Http\Controllers\PostController::class, 'index'])->name('post.index');
Route::post('/post',[App\Http\Controllers\PostController::class, 'insert'])->name('post.insert');

Route::get('/offers',[App\Http\Controllers\OfferController::class, 'index'])->name('offers');

Route::group(['prefix'=>'make'],function(){
    Route::get('/tournament',[App\Http\Controllers\Match\TournamentController::class,'index'])->name('make.tournament');
});
/*
Route::get('/email', [App\Http\Controllers\EmailController::class, 'create']);
Route::post('/email', [App\Http\Controllers\EmailController::class, 'sendEmail'])->name('send.email');
*/