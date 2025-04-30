<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
Route::get('/', function () {
    return view('welcome');
    
});

Route::get('/user', [UserController::class, 'getUser']);
Route::get('/aboutuser', [UserController::class, 'aboutUser']);
Route::get('/user/{name}', [UserController::class, 'getUserName']);
Route::get('/admin', [UserController::class, 'adminLogin']);

// Route::get('/home', function () {
//     return view('home');
// });

// login to home page but redirect to welcome page

//Route::redirect('/home', '/');

//short method
Route::view('/home', 'home');
//Route::view('/home', 'welcome');

// Route::get('/about/{name}', function ($name) {
//     //echo "My name is " . $name. "<br>";
//     return view('about', ['name' => $name]);
// });

Route::get('/about', function (){
    return view('about');
});
