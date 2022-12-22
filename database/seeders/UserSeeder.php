<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            "name" => "Admin",
            "role" =>"admin",
            "phone" => "122345",
            "email"=>"admin@gmail.com",
            "address"=>"Dhaka",
            "password"=>bcrypt("12345"),
            "picture" => "admin.png"
        ]);
    }
}
