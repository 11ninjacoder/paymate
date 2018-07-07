<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Validator;
use Session;

class UserController extends Controller {

    
    public function __construct() {
        
        $this->index();
    }
    
    public function index(){
        if (!(Session::has('userId'))){
            return redirect('/login');
        }else{
             $videos = DB::table('videos')->get();
             return view('dashboard', ['videos' => $videos]);
             //return view('/dashboard');     
        }
        
    }
    
    public function addVideo(){
        if (!(Session::has('userId'))){
            return redirect('/login');
        }else{
             return view('/addVideo');     
        }
        
    }
    
    public function addVideoValidate(Request $request){
        
        
        $errors = Validator::make($request->all(), [
            'title' => 'required|min:6',
            'url' => 'required|url',
            'description' => 'required|min:20'
            
        ]);

        if ($errors->fails()) {
            return redirect('/addVideo')
                        ->withErrors($errors)
                        ->withInput();
        }
      //Retrieve the input field
      $title = $request->input('title');
      $url = $request->input('url');
      $description = $request->input('description');
      $creatorID = session('userId');
      
      
      $id = DB::table('videos')->insertGetId(
            ['title' => $title, 'url' => $url, 'creator_id' => $creatorID, 'description'=>$description, 'creation_date' => date("Y-m-d H:i:s")]
      );
      return view('/addVideo',['msg'=>'Video added successfully!']);
   }
   
   public function viewVideo(Request $request){
        
        if (!(Session::has('userId'))){
            return redirect('/login');
        }else{
             $id = $request->input('id'); 
             if(trim($id)!=''){
                 $videos = DB::table('videos')->where('id', $id)->first();
                 return view('viewVideo', ['videos' => $videos]);
               
             }else{
                 return redirect('/dashboard'); 
             }
             
        }
        
    }
    
    
    
    

   

}
