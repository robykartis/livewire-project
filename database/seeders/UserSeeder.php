<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'su',
            'email' => 'su@email.com',
            'password' => Hash::make('123'),
            'type' => 1,
        ]);
        User::create([
            'name' => 'Admin',
            'email' => 'admin@email.com',
            'password' => Hash::make('123'),
            'type' => 2,
        ]);
        User::create([
            'name' => 'User 1',
            'email' => 'user1@email.com',
            'password' => Hash::make('123'),
            'type' => 0,
        ]);
        User::create([
            'name' => 'User 2',
            'email' => 'user2@email.com',
            'password' => Hash::make('123'),
            'type' => 0,
        ]);
    }
}
