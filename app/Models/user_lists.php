<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user_lists extends Model
{
    use HasFactory;

    protected $fillable = [
        'firsname',
        'lastname',
        'email',
        'gender',
        'dob',
        'password',
        'check_me',
    ];

}
