<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use \Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use App\Models\Player;

class AddController extends Controller
{

   public function __construct()
   {
       $this->middleware('auth');
   }


   public function show(){

      $players = Player::all();
      return view('showplayers',compact('players'));
   }

   
   public function insert(){
     // $urlData = getURLList();
      return view('addplayer');
  }
  
  public function create(Request $request){

  
      $rules = [
       'fullname' => 'required|string|unique:players,fullname|min:3|max:255',
       'password' => 'required|string|min:8|max:16',
       'email' => 'required|string|email|unique:players,email|min:9|max:255',
       'image' => 'nullable|mimes:jpeg,jpg,png',
       'age' => 'required|string|max:2',
       'height' => 'required|max:3',
       'weight' => 'required|max:3',
       'disease' => 'nullable|max:255',
       'skill' => 'nullable|string|max:100'
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
         $student = new Player;
         $student->fullname = $data['fullname'];
         $student->password = $data['password'];
         $student->age = $data['age'];
         $student->email = $data['email'];
         $student->height = $data['height'];
         $student->weight = $data['weight'];
         $student->disease = $data['disease'];
         $student->skill = $data['skill'];
         if($request->hasfile('image')){
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move('uploads/images/',$filename);
         $student->image = $filename;
         }

         $student->save();
          return redirect('add/insert')->with('status',"Insert successfully");
       }
       catch(Exception $e){
          return redirect('add/insert')->with('failed',"operation failed");
       }
    }
  }


  //طريقة تانية وابسط لل insert وفي حال ما فهمتو شي من اللي فوق 

/*
  public function create(Request $request){
   $rules = [
      'fullname' => 'required|unique|min:3|max:100',
      'password' => 'required|min:8|max:16',
      'email' => 'required|email|max:100',
      'age' => 'required|max:2'
   ];


   //validate data
   $validator = Validator::make($request->all(),$rules,[
      'fullname.required' => 'ادخل اسمك الكامل',
      'fullname.unique' => 'الاسم مكرر',

   ]);
   if($validator -> fails()){
      return redirect('add.insert')
       ->withInput()
       ->withErrors($validator);
      //return $validator->errors() -> first();
   }

   //insert data

   Player::create([
      'fullname' => $request->fullname,
      'password' => $request->password,
      'email' => $request->email,
      'age' => $request->age
   ]);
   return 'saved';
  }
  }*/
}
