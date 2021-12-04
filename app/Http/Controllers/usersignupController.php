<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user_lists;
class usersignupController extends Controller
{
    //

    public function store(Request $request)
    {
      $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
        ]);
    
        $imageName = time().'.'.$request->image->extension();
     
        $request->image->move(public_path('images'), $imageName);
  
        // / store image in database from here /
    
        return redirect()->back()->with('success','Image uploaded successfully.')->with('image',$imageName);
    }
    public function register(Request $request){
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
        $user = new user_lists();
        $user->firstname = request('firstname');
        $user->lastname = request('lastname');
        $user->gender = request('gender');
        $user->dob = request('dob');
        $user->email = request('email');
        $user->password = request('password') ;
        $user->check_me = request('check_me') == "on" ? true :  false;
        $user->save();
        return redirect('/users');
    }
     function userlists(){
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
