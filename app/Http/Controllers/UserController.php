<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Session;

class UserController extends Controller {

    
    public function __construct() {
        
        $this->index();
    }
    
    public function index(){
        if (!(Session::has('userId'))){
            return redirect('/login');
        }else{
             return view('/dashboard');     
        }
        
    }
    
    public function addVideo(){
        if (!(Session::has('userId'))){
            return redirect('/login');
        }else{
             return view('/addVideo');     
        }
        
    }
    
    
    

   

}
