<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //'title' => fake()->realText($maxNbChars = 50, $indexSize = 2),
            'caption' => fake()->realText($maxNbChars = 500, $indexSize = 2),
            'user_id' => fake()->randomElement(User::get('id')),
        ];
    }
}
