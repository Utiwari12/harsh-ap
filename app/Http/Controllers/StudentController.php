<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
    function show(){
        return "Student List of CIPET";
    }
    function add(){
        return "Add Student in CIPET";
    }
    function delete(){
        return "Delete Student in CIPET";
    }
   
    function about($name){
        return "About the CIPET student: $name";
    }

    function getStudents(){
        $students = \App\Models\Student::all();
        return view('students', ['data' => $students]);
        //return $students;
       // return "List of Students or test function";
    }
}
