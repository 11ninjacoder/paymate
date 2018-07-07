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


Route::get('/Registration','RegistrationController@index');

//Signup
Route::get('/signup','SignupController@index');
Route::post('/signup','SignupController@signupCreate');

//Login
Route::get('/login', function () {
    return view('login');
});
Route::post('/login','SignupController@loginCheck');

//Logout 
Route::get('/logout','SignupController@logout');



//User Dashboard
Route::get('/dashboard','UserController@index');

//Add Video
Route::get('/addVideo','UserController@addVideo');

//Add Video
Route::post('/addVideo','UserController@addVideoValidate');

//view Video
Route::get('/viewVideo','UserController@viewVideo');



