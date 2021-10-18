<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class UserController extends Controller
{
    //


    // registering the User

    public function register(Request $request)
    {
        // dd($request->all());  //to check all the datas dumped from the form
        //if your want to get single element,someName in this case
        // echo("register tapped");
        $validatedData = $request->validate([
            'password' => 'required|min:5',
            'email' => 'required|email|unique:users'
        ], [
            'name.required' => 'Name is required',
            'password.required' => 'Password is required'
        ]);
        $user = new User();
        $user->firstname = request('firstname');
        $user->lastname = request('lastname');
        $user->email = request('email');
        $user->password = request('password');
        $user->phone_number = request('phone_number');
        $user->country_code = request('country_code');

        dd($request->all());
        $user->save();
        return redirect('/newuser');
    }



    //FOR API

    public function userlistsAPI()
    {
        // echo("hello");
        $users = User::latest()->get();
        return response()->json($users, 201);
    }
}
