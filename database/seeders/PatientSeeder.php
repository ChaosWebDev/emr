<?php

namespace Database\Seeders;

use App\Models\Patient;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PatientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $patients = [
            [
                'family_id' => 1,
                'name' => 'Jordan',
                'dob' => '1986-04-18',
                'sex' => 'Male',
                'gender' => null,
            ],
            [
                'family_id' => 1,
                'name' => 'Christine',
                'dob' => '1988-01-29',
                'sex' => 'Female',
                'gender' => null,
            ],
            [
                'family_id' => 1,
                'name' => 'Hayden',
                'dob' => '2009-08-04',
                'sex' => 'Male',
                'gender' => null,
            ],
            [
                'family_id' => 1,
                'name' => 'Hailey',
                'dob' => '2011-05-13',
                'sex' => 'Female',
                'gender' => null,
            ],
        ];

        foreach ($patients as $patient) {
            Patient::create($patient);
        }
    }
}
