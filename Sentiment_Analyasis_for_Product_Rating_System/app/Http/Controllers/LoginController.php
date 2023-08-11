<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Login;
use \Illuminate\Http\Response;
use DB;

class LoginController extends Controller
{
    function login(Request $req){
        $mail= $req ->input('mail');
        $password= $req ->input('password');
       
        $checkLogin=DB::table('login')->where(['mail'=>$mail,'password'=>$password])->get();
        if(count($checkLogin) > 0){
 
            // echo "Login Sucessfully";
             return redirect('items');
        }else{
             echo "Login Faild";
             return redirect('form')->with('failed',"Invalied username or password");  
 
 
        }
 
 
     }
}
