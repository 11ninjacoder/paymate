<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Routing\Redirector;
use Validator; 
use Hash;
use Auth;




class SignupController extends Controller {

    
    public function __construct() {
        //$this->middleware('signup');
    }

    public function index() {
        //echo "<br>Signup Controller.";
        return view('signup');
    }
    
    public function signupCreate(Request $request){
        
        
        $errors = Validator::make($request->all(), [
            'name' => 'required|min:3|max:50',
            'email' => 'required|email|unique:users,email',
            'password' => 'min:6|max:40',
            'password_confirmation' => 'required_with:password|same:password|min:6',
        ]);

        if ($errors->fails()) {
            return redirect('/signup')
                        ->withErrors($errors)
                        ->withInput();
        }
      //Retrieve the name input field
      $name = $request->input('name');
      $email = $request->input('email');
      $pass = Hash::make($request->input('password'));
      
      $id = DB::table('users')->insertGetId(
            ['name' => $name, 'email' => $email,  'password' => $pass]
      );
      return view('/signup',['msg'=>'Registration Successfully!']);
   }
    
   
   public function loginCheck(Request $request){
        
        
        $errors = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|min:6'
           
        ]);

        if ($errors->fails()) {
            return redirect('/login')
                        ->withErrors($errors)
                        ->withInput();
        }
      //Retrieve the name input field
      $email = $request->input('email');
      $pass = $request->input('password');
      
      // create our user data for the authentication
 
        $userdata = array(
                'email' => $email ,
                'password' => $pass
        );
        // attempt to do the login
       
        if (Auth::attempt($userdata))
                {
                  $user = auth()->user();
                  return view('/dashboard')->with('user', $user);
                  //return view('/dashboard');
                }
        return view('/login',['msg'=>'Invalid email address or password']);
      
      
   }
    

}
