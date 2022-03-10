<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class AddController extends Controller
{
   public function AddPlayer(){

      return view('addplayer');
   }
}
