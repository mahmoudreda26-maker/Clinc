<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Doctor;
use App\Models\Major;
use Illuminate\Support\Facades\DB;

class DoctorsSeeder extends Seeder
{
    public function run(): void
    {


DB::statement('SET FOREIGN_KEY_CHECKS=0;');
Doctor::truncate();
DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        $doctors = [
            [
                'name' => 'Dr. Ahmed Ali',
                'email' => 'ahmed1@gmail.com',
                'phone' => '01000000001',
                'address' => 'Cairo',
                'major_id' => 1,
            ],
            [
                'name' => 'Dr. Sara Mohamed',
                'email' => 'sara2@gmail.com',
                'phone' => '01000000002',
                'address' => 'Mansoura',
                'major_id' => 2,
            ],
            [
                'name' => 'Dr. Mohamed Hassan',
                'email' => 'mohamed3@gmail.com',
                'phone' => '01000000003',
                'address' => 'Alexandria',
                'major_id' => 3,
            ],
            [
                'name' => 'Dr. Fatma Adel',
                'email' => 'fatma4@gmail.com',
                'phone' => '01000000004',
                'address' => 'Giza',
                'major_id' => 4,
            ],
            [
                'name' => 'Dr. Mahmoud Samy',
                'email' => 'mahmoud5@gmail.com',
                'phone' => '01000000005',
                'address' => 'Tanta',
                'major_id' => 5,
            ],
            [
                'name' => 'Dr. Nour Ibrahim',
                'email' => 'nour6@gmail.com',
                'phone' => '01000000006',
                'address' => 'Zagazig',
                'major_id' => 6,
            ],
            [
                'name' => 'Dr. Ali Youssef',
                'email' => 'ali7@gmail.com',
                'phone' => '01000000007',
                'address' => 'Asyut',
                'major_id' => 7,
            ]
        ];
        Doctor::insert($doctors);

    }
}
