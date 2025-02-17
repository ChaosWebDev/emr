<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'Jordan Gerber',
                'username' => 'jpgerber',
                'email' => 'jordangerber@gmail.com',
                'password' => Hash::make('jordan'), // temporary for development
                'family_id' => 1,
                'family_role' => 'admin'
            ],
            [
                'name' => 'Hayden Gerber',
                'username' => 'hjgerber',
                'email' => 'hayjgerber@gmail.com',
                'password' => Hash::make('hayden'), // temporary for development
                'family_id' => 1,
                'family_role' => 'user'
            ],
            [
                'name' => 'Gary Cox',
                'username' => 'gcox',
                'email' => 'gtcox83@gmail.com',
                'password' => Hash::make('gary'), // temporary for development
                'family_id' => 2,
                'family_role' => 'admin'
            ],
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
