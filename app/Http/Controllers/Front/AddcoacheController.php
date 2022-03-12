<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use \Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use App\Models\Coache;

class AddcoacheController extends Controller
{

   public function __construct()
   {
       $this->middleware('auth');
   }

   
   public function insert(){
   
      return view('addcoache');
  }
  
  public function create(Request $request){

  
      $rules = [
       'firstname' => 'required|string|min:3|max:50',
       'lastname' => 'required|string|min:3|max:50',
       'email' => 'required|string|email|unique:coaches,email|min:9|max:255',
       'specialize' => 'required|string|max:20',
    ];
    $validator = Validator::make($request->all(),$rules);
    if ($validator->fails()) {
       return redirect()->back()
       ->withInputs($request->all())
       ->withErrors($validator);
    }
    else{
          $data = $request->input();
       try{
         $student = new Coache;
         $student->firstname = $data['firstname'];
         $student->lastname = $data['lastname'];
         $student->specialize = $data['specialize'];
         $student->email = $data['email'];
         $student->save();
          return redirect('addcoache/insert')->with('status',"Insert successfully");
       }
       catch(Exception $e){
          return redirect('addcoache/insert')->with('failed',"operation failed");
       }
    }
  }
}
