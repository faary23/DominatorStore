<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    

        User::create([
            "name" => "admin",
            "password" => "password",
            "roleId" => 1,
        ]);
    }
}
