<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Articles;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Articles::factory()
            ->count(50)
            ->create();
    }
}
