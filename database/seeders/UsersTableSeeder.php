<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'id'                 => 1,
                'name'               => 'Admin',
                'email'              => 'admin@admin.com',
                'password'           => bcrypt('password'),
                'remember_token'     => null,
                'verified'           => 1,
                'verified_at'        => '2023-05-31 11:55:38',
                'verification_token' => '',
            ],
            [
                'id'                 => 2,
                'name'               => 'user',
                'email'              => 'user@user.com',
                'password'           => bcrypt('password'),
                'remember_token'     => null,
                'verified'           => 1,
                'verified_at'        => '2023-05-31 11:55:38',
                'verification_token' => '',
            ],
        ];



        User::insert($users);
    }
}
