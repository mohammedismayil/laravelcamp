<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Articles;
use App\Models\Users;

class SeedersController extends Controller
{

    public function createSeeder()
    {

        dd(request);

        $seeder = request('Seeder');
        if ($seeder = "articles") {
            Articles::factory()
                ->count(request('count'))
                ->create();
        } else if ($seeder = "users") {
            Users::factory()
                ->count(10)
                ->create();
        }

        return redirect('/newuser');
    }
}
