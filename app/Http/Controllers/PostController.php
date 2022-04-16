<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class PostController extends Controller
{

    public function __construct()
   {
       $this->middleware('auth');
   }

   public function index(){
   
    return view('post');
}

   public function show(){

    $posts = Post::all();
    
    return view('post',compact('posts'));
 }


    public function insert(Request $request){
        $rules = [
            'title' => 'required|string',
            'description' => 'required|string|min:20',
            'is_publish' => '',
         ];
         $validator = Validator::make($request->all(),$rules);
         if ($validator->fails()) {
            return redirect('post')
            ->withInputs($request->all())
            ->withErrors($validator);
         }
         else{
               $data = $request->input();
            try{
              $post = new Post;
              $post->title = $data['title'];
              $post->description = $data['description'];
             /*
              if($request->hasfile('image')){
                 $file = $request->file('image');
                 $filename = time() . '.' . $file->getClientOriginalExtension();
                 $file->move('uploads/images/',$filename);
              $coache->image = $filename;
              }*/
     
              $post->save();
               return redirect('post/insert')->with('status',"Insert successfully");
            }
            catch(Exception $e){
               return redirect('post/insert')->with('failed',"operation failed");
            }
         }
       }
     
       public function edit($id){
       $posts = post::find($id);
       return view('post',compact('posts'));
     
     
     }
     
     public function update(Request $request,$id){
     
     
        $rules = [
            'title' => 'required|string',
            'description' => 'required|string|min:20',
            'is_publish' => 'nullable',
         ];
         $validator = Validator::make($request->all(),$rules);
         if ($validator->fails()) {
            return redirect()->back()
            ->withInputs($request->all())
            ->withErrors($validator);
         }
         else{
               $data = $request->input();
              $post = new Post;
              $post->title = $data['title'];
              $post->description = $data['description'];
     
            /* if($request->hasfile('image')){
     
                //to delete the old image
               $dest = 'uploads/images/'.$coache->image;
                if(File::exists($dest)){
                File::delete($dest);
              }
     
                //add new image
                $file = $request->file('image');
                $filename = time() . '.' . $file->getClientOriginalExtension();
                $file->move('uploads/images/',$filename);
             $coache->image = $filename;*/
             
     
             $post->update();
              return redirect('post')->with('status',"updated successfully");
            
     }
     }
     
     public function destroy($id){
     
     $posts = post::find($id);
     if($posts)
     {
        $dest = 'uploads/images/'.$posts->image;
        if(File::exists($dest)){
           File::delete($dest);
        }
     
        $posts->delete();
        return redirect()->back()->with('message','Coache Deleted Successfully');
     }
     else
     {
        return redirect()->back()->with('message','No Coache is found');
     }
     }
     
     }
