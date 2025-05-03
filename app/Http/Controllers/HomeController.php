<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    function show(){
        //return view('home');
       // return redirect()->to('home');
       //return redirect()->route('hm',['name' => 'Upendra Tiwari']);
       return "Student List";
    }

    function add(){
        return "Add new Student";
    }
}
