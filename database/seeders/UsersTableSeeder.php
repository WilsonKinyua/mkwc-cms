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
                'email'              => 'admin@mkwc.com',
                'password'           => bcrypt('1l143JvZctU&'),
                'remember_token'     => null,
                'approved'           => 1,
                'verified'           => 1,
                'verified_at'        => '2022-07-22 16:29:18',
                'verification_token' => '',
            ],
        ];

        User::insert($users);
    }
}
