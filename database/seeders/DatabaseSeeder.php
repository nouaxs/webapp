<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Post;
use App\Models\Comment;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserTableSeeder::class);
        $this->call(PostTableSeeder::class);
        $this->call(CommentTableSeeder::class);

        $user1 = User::factory()
            ->has(Post::factory()->count(2))
            ->create();

        $post1 = Post::factory()
            ->has(Comment::factory()->count(6))
            ->create();

        $posts = Post::factory()
            ->count(5)
            ->for($user1)
            ->create();
    }
}
