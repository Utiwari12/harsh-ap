<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function getUser(){
        //return "Hello Upendra Tiwari";
        return view('user');
    }
    //create many function just as you want
    function aboutUser(){
        return "Hello Nilam Tiwari";
    }

    function getUserName($name){
        //return "Hello $name";
        return view('getuser', ['name' => $name]);
    }

    function adminLogin(){
        return view('admin.login'); //admin.login here . is given due to login pafe is in admin folder
    }
}
