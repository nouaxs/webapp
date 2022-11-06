<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pizzalove = new Post;
        $pizzalove->caption = "I love pizza";
        $pizzalove->user_id = 1;
        $pizzalove->save();
    }
}
