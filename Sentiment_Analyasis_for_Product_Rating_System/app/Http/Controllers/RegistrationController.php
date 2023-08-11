<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Login;
use \Illuminate\Http\Response;



class RegistrationController extends Controller
{
        
    function addData(Request $req){
        
        try{
            $login=new Login;
            $login->mail=$req->mail;
            $login->password=$req->password;
            $login->username=$req->username;
            $login->tel=$req->tel;
            //$contact->description=$req->description;
            $login->save();
            return redirect('add')->with('status',"Insert successfully");  
            //return redirect('display');

        }catch(Exception $e){
            return redirect('add')->with('failed',"operation failed");  
        }
        

    }

}
