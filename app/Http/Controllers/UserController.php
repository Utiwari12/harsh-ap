<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

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
        if(view()->exists('admin.login')){
            return view('admin.login'); //admin.login here . is given due to login pafe is in admin folder
        }else{
           echo "View Page not found";
        }
        
    }

    function userHome(){
        $name = "Upendra Tiwari";
        $users = ['upendra', 'nilam', 'shubham'];
        return view('home', ['name' => $name, 'users' => $users]);
    }
}
