<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user_lists;
class usersignupController extends Controller
{
    //


    public function register(Request $request){
        // dd($request->all());  //to check all the datas dumped from the form
        //if your want to get single element,someName in this case
        // echo("register tapped");

        $user = new user_lists();
        $user->email = request('email');
        $user->password = request('password') ;
        $user->check_me = request('check_me') == "on" ? true :  false;
        $user->save();
        return redirect('/users');
    }
    public function userlists(){
        // echo("hello");
        $users = user_lists::latest()->get();
        return view('user_lists.userlist',['users'=>$users]);
    }
    public function returncsrf(){
        // echo("hello");
       return csrf_token();
    }
    //FOR API

    public function userlistsAPI(){
        // echo("hello");
        $users = user_lists::latest()->get();
        return response()->json($users, 201);
    }

}
