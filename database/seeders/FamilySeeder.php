<?php

namespace Database\Seeders;

use App\Models\Family;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class FamilySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Family::create([
            'username' => 'grbrbbys',
            'display' => "The Gerber Clan",
            'surname' => 'Gerber',
            'password' => Hash::make('gerber'), // temporary for development
            'link' => null,
            'expiration' => null
        ]);

        Family::create([
            'username' => 'gtcox',
            'display' => "GT Cox Family",
            'surname' => 'Cox',
            'password' => Hash::make('cox'), // temporary for development
            'link' => null,
            'expiration' => null,
        ]);
    }
}
