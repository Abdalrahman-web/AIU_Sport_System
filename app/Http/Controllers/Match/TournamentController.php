<?php

namespace App\Http\Controllers\Match;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TournamentController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
     public function index(){
         
         return view('tournament');
     }
}
