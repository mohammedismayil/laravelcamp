<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Users;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Users::factory()
            ->count(10)
            ->create();
    }
}
