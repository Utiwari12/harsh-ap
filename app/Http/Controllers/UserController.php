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

    function userAbout(){
        return view('about');
    }

    function addUser(Request $request){
        // echo "Add User Page";
         //return $request;
        //  echo $request->input('name');
        //  echo "<br>";
        //  echo $request->input('email');
        //  echo "<br>";
        //  return $request->input('city');
        //return view('user-form');
        // echo "<pre>";
        // print_r($request->all());
        // echo "</pre>";
        echo $request->name;
        echo "<br>";
        echo $request->email;
        echo "<br>";
        echo $request->city;
        echo "<br>";
        echo $request->age;
        echo "<br>";
        echo $request->gender;
        echo "<br>";
        print_r($request->skill) ;
        echo "<br>";

    }
}
