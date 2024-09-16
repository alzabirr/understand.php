<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class productController extends Controller
{




    //laravel  response


    // demo 1
    function demo1 (){
        return 1;

    }
    //


    // demo 2
    function demo2 (){

        return 2 ;
    }
    //

    // rafi
    function rafi (){
        return 3 ;

    }
    //


    // this is sum function
    // we can show this function on productController.php

    function  sum(){
        $num1 = 10;
        $num2 = 3;
        $total = $num1 + $num2;
        return $total;

    }


    function pic(){
        return response()->file("img.jpg");

    }
   //


//    laravel request method  start here
   function ostad (){
    return "1234";

   }


   function ostad1 (Request $request){
   return  $request -> input();
   }

}
