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
        $guy->username = "verycooldude";
        $guy->email = "cooldude@email.com";
        $guy->password = "lovepizza";
        $guy->save();
    }
}
