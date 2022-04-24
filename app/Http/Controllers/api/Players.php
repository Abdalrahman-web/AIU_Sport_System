<?php
   
   namespace App\Http\Controllers\API;
      
   use Illuminate\Http\Request;
   use App\Http\Controllers\API\BaseController as BaseController;
   use App\Http\Resources\Players as PlayersResources;
use App\Models\Players;
 
   use Validator;
   
   
   class TaskController extends BaseController
   {
   
       public function index()
       {
           $players = Players::all();
           return $this->handleResponse(PlayersResources::collection($players), 'player have been retrieved!');
       }
   
       
       public function store(Request $request)
       {
           $input = $request->all();
           $validator = Validator::make($input, [
            'player_id' => 'required',
            'fullname'=> 'required',
            'password' => 'required',
            'email' => 'required',
            
            
            'image',
            'age',
            'height'
            ,'weight'
            ,'disease'
            ,'skill'
            ,'teams'
           ]);
           if($validator->fails()){
               return $this->handleError($validator->errors());       
           }
           $players = Players::create($input);
           return $this->handleResponse(new PlayersResources($players), 'player added');
       }
   
      
       public function show($id)
       {
        $players = Players::find($id);
           if (is_null( $players)) {
               return $this->handleError('damn player not found!');
           }
           return $this->handleResponse(new PlayersResources( $players), 'there ya go info retrieved.');
       }
       
   
       public function update(Request $request, Players  $players)
       {
           $input = $request->all();
   
           $validator = Validator::make($input, [
            'player_id' => 'required',
            'fullname'=> 'required',
            'password' => 'required',
            'email' => 'required',
           ]);
   
           if($validator->fails()){
               return $this->handleError($validator->errors());       
           }
   
           $players->player_id = $input['player_id'];
           $players->fullname = $input['fullname'];
           $players->password= $input['password'];
           $players->email = $input['email'];
           $players->save();
           
           return $this->handleResponse(new PlayersResources($players), 'dont lose your info again !');
       }
      
       public function destroy(Players $players)
       {
           $players->delete();
           return $this->handleResponse([], 'ciao student');
       }
   }