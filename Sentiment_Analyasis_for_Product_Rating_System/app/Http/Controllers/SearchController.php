<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;
use \Illuminate\Http\Response;
use DB;



class SearchController extends Controller
{
    function search(Request $request){

        if(isset($_GET['payer_email'])){

            $search_text=$_GET['payer_email'];
            $payments=DB::table('payments')->where('payer_email','LIKE','%'.$search_text.'%')->get();
            return view('search',['payments'=>$payments]);

        }else{
            return view('search');

        }
       
     
    }
}
