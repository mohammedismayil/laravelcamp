<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class usersignupController extends Controller
{
    //


    function register(Request $request){
        dd($request->all());  //to check all the datas dumped from the form
        //if your want to get single element,someName in this case
        // echo("register tapped");
    }
}
