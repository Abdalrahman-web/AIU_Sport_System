<?php

namespace App\Http\Controllers\Front;

use DB;
use Illuminate\Support\Facades\File;
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
       'player_id' => 'required|unique:players,player_id||max:255',
       'fullname' => 'required|string|unique:players,fullname|min:3|max:255',
       'password' => 'required|string|min:8|max:16',
       'email' => 'required|string|email|unique:players,email|min:9|max:255',
       'image' => 'nullable|mimes:jpeg,jpg,png',
       'age' => 'required|string|max:2',
       'height' => 'required|max:3',
       'weight' => 'required|max:3',
       'disease' => 'nullable|max:255',
       'skill' => 'nullable|max:100'
    ];
    $validator = Validator::make($request->all(),$rules);
    if ($validator->fails()) {
       return redirect()->back()
       ->withInputs($request->all())
       ->withErrors($validator);
    }
    else{
          $data = $request->input();
       
         $student = new Player;
         $student->player_id = $data['player_id'];
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
  }
  public function edit($id){
      //$players = DB::select('select * from players where player_id = ?',[$player_id]);
     $players = Player::find($id);
     return view('editplayer',compact('players'));


  }

  public function update(Request $request,$id){
   $rules = [
      'player_id' => 'required|max:255',
    'fullname' => 'required|string|min:3|max:255',
    'password' => 'required|string|min:8|max:16',
    'email' => 'required|string|email|min:9|max:255',
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

      $student = Player::find($id);
      $student->player_id = $data['player_id'];
      $student->fullname = $data['fullname'];
      $student->password = $data['password'];
      $student->age = $data['age'];
      $student->email = $data['email'];
      $student->height = $data['height'];
      $student->weight = $data['weight'];
      $student->disease = $data['disease'];
      $student->skill = $data['skill'];
      if($request->hasfile('image')){

         //to delete the old image
         $dest = 'uploads/images/'.$student->image;
         if(File::exists($dest)){
            File::delete($dest);
         }

         //add new image
         $file = $request->file('image');
         $filename = time() . '.' . $file->getClientOriginalExtension();
         $file->move('uploads/images/',$filename);
      $student->image = $filename;
      }

      $student->update();
       return redirect('show/players')->with('status',"updated successfully");
    }
 }


 public function destroy($id){

   $players = Player::find($id);
   if($players)
   {
      $dest = 'uploads/images/'.$players->image;
      if(File::exists($dest)){
         File::delete($dest);
      }

      $players->delete();
      return redirect()->back()->with('message','Player Deleted Successfully');
   }
   else
   {
      return redirect()->back()->with('message','No Player is found');
   }
 }

  
}
