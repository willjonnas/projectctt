<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name'=>'User',
                'email'=>'user@user.com',
                'role'=> 0,
                'password'=> bcrypt('123456'),
            ],
            [
                'name'=>'User2',
                'email'=>'user2@user.com',
                'role'=> 0,
                'password'=> bcrypt('123456'),
            ],

            [
                'name'=>'Admin',
                'email'=>'admin@admin.com',
                'role'=> 2,
                'password'=> bcrypt('123456'),
            ],

        ];

        foreach ($users as $key => $user)
        {
            User::create($user);
        }
    }
}
