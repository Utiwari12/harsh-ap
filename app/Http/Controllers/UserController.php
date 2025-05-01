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
        $request->validate([
            'name' => 'required | min:3 | max:30',
            'email' => 'required|email',
            'city' => 'required |uppercase',
            // 'city' => 'required |max:20',
            'age' => 'required',
            'gender' => 'required',
            'skill' => 'required'
        ],[
            'name.required' => 'User Name cannot be empty',
            'name.min'=> 'User Name must be greater than 3 characters',
            'name.max'=> 'User Name must be less than 30 characters',
            'email.email' => 'Please Enter Yourvalid Email',
            'city.required' => 'Please Enter Your City',
            'age.required' => 'Please Enter Your Age',
            'gender.required' => 'Please Select Your Gender',
            'skill.required' => 'Please Select Your Skill'
        ]);
         return $request;
        
        //return view('user-form');
        //  echo "<pre>";
        // print_r($request->all());
        // echo "</pre>";
        // echo $request->name;
        // echo "<br>";
        // echo $request->email;
        // echo "<br>";
        // echo $request->city;
        // echo "<br>";
        // echo $request->age;
        // echo "<br>";
        // echo $request->gender;
        // echo "<br>";
        // print_r($request->skill) ;
        // echo "<br>";

    }
}
