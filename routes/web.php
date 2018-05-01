<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', function () {
    return view('register');
});

// Second Route method – Root URL with ID will match this method
Route::get('ID/{id}',function($id){
   echo 'ID: '.$id;
});

Route::get('/Registration','RegistrationController@index');

//Signup
Route::get('/signup','SignupController@index');
Route::post('/signup','SignupController@signupCreate');

//Login
Route::get('/login', function () {
    return view('login');
});
Route::post('/login','SignupController@loginCheck');

