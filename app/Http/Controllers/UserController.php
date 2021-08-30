<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class UserController extends Controller
{
    //






    //FOR API

    public function userlistsAPI()
    {
        // echo("hello");
        $users = User::latest()->get();
        return response()->json($users, 201);
    }
}
