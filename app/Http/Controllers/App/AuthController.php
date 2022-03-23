<?php
namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use \Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use App\Models\Player;

class AuthController extends Controller
{
    public function login(Request $request){

        //هون بعمل شروطي
        $rules = [
            'email' => 'required',
            'password' => 'required|string'
        ];

        $request->validate($rules);
        $player = Player::where('email',$request->email)->first();

        if($player && Hash::check($request->password, $player->password)){
            $token = $player->createToken('Personal Access Token')->plainTextToken;
            $response = ['player'=>$player,'token'=>$token];
            return response()->json($response,200);
        }
        $response = ['message'=>'incorrect email or password'];
        return response()->json($response,400);
        
    }

}