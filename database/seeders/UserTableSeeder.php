<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $guy = new User;
        $guy->name = "Philip";
        $guy->username = "cooldude";
        $guy->email = "cooldude@email.com";
        $guy->password = "lovepizza";
        $guy->save();

        $users = User::factory()->count(10)->create();
    }
}
