<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;
Route::get('/', function () {
    return view('welcome');
    
});

Route::get('/user', [UserController::class, 'getUser']);
Route::get('/aboutuser', [UserController::class, 'aboutUser']);
Route::get('/user/{name}', [UserController::class, 'getUserName']);
Route::get('/admin-login', [UserController::class, 'adminLogin']);
//Route::get('/show', [HomeController::class, 'show']);

// Route::get('/home', function () {
//     return view('home');
// });

// login to home page but redirect to welcome page

Route::redirect('/home', '/');

//short method
// Route::view('/home', 'home');
//   Route::view('/user', 'home')->name('hm');
// Route::view('/home', 'welcome');


// Route::get('/about/{name}', function ($name) {
//     //echo "My name is " . $name. "<br>";
//     return view('about', ['name' => $name]);
// });

Route::get('/home', [UserController::class, 'userHome']);

Route::get('/about', function (){
    return view('about');
});

Route::view('/user-form', 'user-form');

Route::post('adduser', [UserController::class, 'addUser']);

// Route::view('/student/home', 'home');
// Route::get('student/show', [HomeController::class, 'show']);
// Route::get('/student/add', [HomeController::class, 'add']);


Route::prefix('student')->group(function(){
     Route::view('/student/home', 'home');
     Route::get('/show', [HomeController::class, 'show']);
     Route::get('/add', [HomeController::class, 'add']);
});

// Route::get('/show', [StudentController::class, 'show']);

// Route::get('/add', [StudentController::class, 'add']); 

// Route::get('/delete', [StudentController::class, 'delete']);

//Above code is grouped in below code known as route grouping

Route::controller(StudentController::class)->group(function(){
    Route::get('/show', 'show');
    Route::get('/add', 'add'); 
    Route::get('/delete', 'delete');
    Route::get('/about/{name}', 'about');
});

Route::view('/home', 'home')->middleware('check1');
Route::view('/about', 'about');
Route::view('/user-form', 'user-form');
Route::view('/contact', 'contact');
//Route::view('/home', 'home');

//Group middleware
// Route::group(['middleware' => ['check1']], function(){
//     Route::view('/home', 'home');
//     Route::view('/about', 'about');
//     Route::view('/user-form', 'user-form');
//     Route::view('/contact', 'contact');
// });