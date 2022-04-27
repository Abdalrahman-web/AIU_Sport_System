<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Player;
use App\Models\Coache;
use App\Models\User;
use App\Models\Post;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $players = Player::count();
        $coaches = Coache::count();
        $admins = User::count();
        $posts = Post::count();

        return view('home',compact('players','coaches','admins','posts'));
    }


    //عم بجرب database فقط 
    /*
    public function index(){
        $users = DB::select('select * from student_details');
        return view('stud_view',['users'=>$users]);
        }
*/

}
