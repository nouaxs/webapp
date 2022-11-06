<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comment;

class CommentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $opinion = new Comment;
        $opinion->content = "Nevermind, pasta is better tha pizza";
        $opinion->user_id = 1;
        $opinion->post_id = 1;
        $opinion->save();
    }
}
