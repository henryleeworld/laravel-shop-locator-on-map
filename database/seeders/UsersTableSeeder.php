<?php

namespace Database\Seeders;

use App\Models\User;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Factory::create();
        $users = [
            [
                'id'             => 1,
                'name'           => 'Admin',
                'email'          => 'admin@admin.com',
                'password'       => Hash::make('password')
                'remember_token' => null,
            ],
        ];

        User::insert($users);

        foreach(range(1,10) as $id)
        {
            User::create([
                'name' => $faker->unique()->name,
                'email' => "user$id@user$id.com",
                'password' => Hash::make('password'),
            ]);
        }
    }
}
