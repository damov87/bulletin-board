<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
       User::query()->insert([
                'name' => 'Dmitriy',
                'last_name' => 'Damov',
                'email' => 'damov87@gmail.com',
                'password' => Hash::make('1q2w3e4r'),
            ]);
    }
}