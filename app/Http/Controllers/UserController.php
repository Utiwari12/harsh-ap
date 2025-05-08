<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
//for fetching data impoert Model
use App\Models\User;
//To connect with database
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\View;

class UserController extends Controller
{
    function getUser(){
       // $response = Http::get('https://jsonplaceholder.typicode.com/users');
       // return $response->json();
       //stored in $response variables
      // $response = $response->json();
      // return view('user', ['data'=>$response]);
        
       // return "User function Page";
        //return view('user');
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

    //To connect with database
    function users(){
        //return "Users function Page";
        //return DB::select("select * from users");
       // $users = DB::select("select * from users");
        //return View('users', ['users' => $users]);
        //return view('users');
    }
  //DB Query Builder
    // function queries(){
    //     //return "Queries function Page";
    //      $result = DB::table('users')->get();
    //     // return $result;

    //     // data received using query builder
    //     return View('users', ['users' => $result]);

    //     //data received particular query from database
    //     // $result = DB::table('users')->where('id', '>', 2)->get();
        
    //     // return View('users', ['users' => $result]);

    //     //insert data in database
    //     //  DB::table('users')->insert([
    //     //     ['name' => 'Sohan Tiwari', 'email' => 'sohan1@gmail.com', 'password' => '123456', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
    //     //     ['name' => 'Raghu Tiwari', 'email' => 'raghu1@gmail.com', 'password' => '123456', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
    //     //      ['name' => 'Shubham Tiwari', 'email' => 'shubham1@gmail.com', 'password' => '123456', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
    //     //  ]);
    //     //  $result = DB::table('users')->get();
    //     //  return View('users', ['users' => $result]);

    //     //update data in database
    // //    $result = DB::table('users')->where('name', 'sakshi' )->update([
    // //         'password' => '123456'
           
    // //      ]);
        
    // //      if($result){
    // //         echo "Data Updated";
    // //      }else{
    // //         echo "Data Not Updated";
    // //      }

    //      //delete data in database
    //     //  $result = DB::table('users')->where('name', 'Mohan' )->delete();
    //     //  if($result){
    //     //     echo "Data Deleted";
    //     //  }else{
    //     //     echo "Data Not Deleted";
    //     //  }

    // }

    // Eloquent Model Query Builder
    // function queries(){
        
    //     //return 'Queries function Page';
    //     //received all data from database
    //     $response = User::all();
    //     //return $response;  //To receive the data in json format
    //     return View('users', ['users' => $response]); // to receive the date in tabular format of display on UI

    //     //received particular data from database
    //     //$response = User::where('id', '<=', 2)->get();
    //     //return $response;
    //     //return View('users', ['users' => $response]);

    //     //insert data in database
    // //     $response = User::create([
    // //         'name' => 'H Mohan Tiwari',
    // //         'email' => 'mohan141@gmail.com',
    // //         'password' => '1234567',
    // //         'created_at' => date('Y-m-d H:i:s'),
    // //         'updated_at' => date('Y-m-d H:i:s')
    // //     ]);
    // //    // return $response;
    // //     if($response){
    // //         echo "Data Inserted";
    // //     }else{
    // //         echo "Data Not Inserted";
    // //     }

    //     //update data in database
    //     // $response = User::where('id', 7)->update([
    //     //     'name' => 'S Sohan Tiwari',
    //     //     'email' => 'sohan123@gmail.com',
    //     //     'password' => '123456',
    //     //     'created_at' => date('Y-m-d H:i:s'),
    //     //     'updated_at' => date('Y-m-d H:i:s')
    //     // ]);
    //     // return $response;
    //     // if($response){
    //     //     echo "Data Updated";
    //     // }else{
    //     //     echo "Data Not Updated";
    //     // }

    //     //delete data in database
    //     // $response = User::where('id', 25)->delete();
    //     // return $response;
    //     // if($response){
    //     //     echo "Data Deleted";
    //     // }else{
    //     //     echo "Data Not Deleted";
    //     // }
    // }

    function get(Request $request){
        return 'get function Page';
        //return request()->all();
       // return $request;
    }

    function post(Request $request){
        //return 'post function Page';
        return request()->all();
       // return $request;
    }

    function put(Request $request){
        //return 'put function Page';
        return request()->all();
       // return $request;
    }

    function delete(Request $request){
        //return 'delete function Page';
        return request()->all();
       // return $request;
    }

    function any(Request $request){
        //return 'any function Page';
        return request()->all();
       // return $request;
    }

    //matching route group1
    function group1(Request $request){
        //return 'match function Page';
        return request()->all();
       // return $request;
    }

    //matching route group2
    // function group2(Request $request){
    //     //return 'group2 function Page';
    //     //return request()->all();
    //     return $request;
    // }
}
