<?php

namespace Database\Seeders;

use App\Models\Patient;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PatientsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Patient::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        $patients = [
            [
                'name' => 'Ahmed Ali',
                'phone' => '01010000001',
                'email' => 'ahmed1@gmail.com',
                'date_of_birth' => '1995-05-10',
                'gender' => 'male',
                'blood_group' => 'A+',
                'emergency_contact' => '01090000001',
                'address' => 'Mansoura, Egypt',
                'medical_history' => 'Diabetes',
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Sara Mohamed',
                'phone' => '01010000002',
                'email' => 'sara2@gmail.com',
                'date_of_birth' => '1998-09-15',
                'gender' => 'female',
                'blood_group' => 'O+',
                'emergency_contact' => '01090000002',
                'address' => 'Cairo, Egypt',
                'medical_history' => 'Healthy',
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Omar Hassan',
                'phone' => '01010000003',
                'email' => 'omar3@gmail.com',
                'date_of_birth' => '1990-01-20',
                'gender' => 'male',
                'blood_group' => 'B+',
                'emergency_contact' => '01090000003',
                'address' => 'Alexandria',
                'medical_history' => 'Hypertension',
                'status' => 'inactive',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Youssef Ahmed',
                'phone' => '01010000004',
                'email' => 'youssef4@gmail.com',
                'date_of_birth' => '1993-03-11',
                'gender' => 'male',
                'blood_group' => 'AB+',
                'emergency_contact' => '01090000004',
                'address' => 'Tanta',
                'medical_history' => 'Asthma',
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Mona Ali',
                'phone' => '01010000005',
                'email' => 'mona5@gmail.com',
                'date_of_birth' => '1997-07-22',
                'gender' => 'female',
                'blood_group' => 'A-',
                'emergency_contact' => '01090000005',
                'address' => 'Mansoura',
                'medical_history' => 'Healthy',
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],



            [
                'name' => 'Khaled Mostafa',
                'phone' => '01010000006',
                'email' => 'khaled6@gmail.com',
                'date_of_birth' => '1992-02-10',
                'gender' => 'male',
                'blood_group' => 'O-',
                'emergency_contact' => '01090000006',
                'address' => 'Zagazig',
                'medical_history' => 'Heart issue',
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Nour Ahmed',
                'phone' => '01010000007',
                'email' => 'nour7@gmail.com',
                'date_of_birth' => '2000-11-01',
                'gender' => 'female',
                'blood_group' => 'B-',
                'emergency_contact' => '01090000007',
                'address' => 'Cairo',
                'medical_history' => 'Healthy',
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Hassan Ali',
                'phone' => '01010000008',
                'email' => 'hassan8@gmail.com',
                'date_of_birth' => '1988-06-14',
                'gender' => 'male',
                'blood_group' => 'A+',
                'emergency_contact' => '01090000008',
                'address' => 'Giza',
                'medical_history' => 'Diabetes',
                'status' => 'inactive',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Salma Mohamed',
                'phone' => '01010000009',
                'email' => 'salma9@gmail.com',
                'date_of_birth' => '1999-09-09',
                'gender' => 'female',
                'blood_group' => 'O+',
                'emergency_contact' => '01090000009',
                'address' => 'Mansoura',
                'medical_history' => 'Allergy',
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Mostafa Ramadan',
                'phone' => '01010000010',
                'email' => 'mostafa10@gmail.com',
                'date_of_birth' => '1991-12-25',
                'gender' => 'male',
                'blood_group' => 'B+',
                'emergency_contact' => '01090000010',
                'address' => 'Tanta',
                'medical_history' => 'Healthy',
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],



            [
                'name' => 'Ali Mohamed',
                'phone' => '01010000011',
                'email' => 'ali11@gmail.com',
                'date_of_birth' => '1994-04-04',
                'gender' => 'male',
                'blood_group' => 'A+',
                'emergency_contact' => '01090000011',
                'address' => 'Alexandria',
                'medical_history' => 'Healthy',
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Hana Ahmed',
                'phone' => '01010000012',
                'email' => 'hana12@gmail.com',
                'date_of_birth' => '2001-08-18',
                'gender' => 'female',
                'blood_group' => 'O-',
                'emergency_contact' => '01090000012',
                'address' => 'Cairo',
                'medical_history' => 'Asthma',
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],


            [
                'name' => 'Patient 13',
                'phone' => '01010000013',
                'email' => 'p13@gmail.com',
                'date_of_birth' => '1990-01-01',
                'gender' => 'male',
                'blood_group' => 'A+',
                'emergency_contact' => '01090000013',
                'address' => 'Cairo',
                'medical_history' => null,
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Patient 14',
                'phone' => '01010000014',
                'email' => 'p14@gmail.com',
                'date_of_birth' => '1992-01-01',
                'gender' => 'female',
                'blood_group' => 'B+',
                'emergency_contact' => '01090000014',
                'address' => 'Giza',
                'medical_history' => null,
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],


            [
                'name' => 'Patient 30',
                'phone' => '01010000030',
                'email' => 'p30@gmail.com',
                'date_of_birth' => '1995-01-01',
                'gender' => 'male',
                'blood_group' => 'O+',
                'emergency_contact' => '01090000030',
                'address' => 'Mansoura',
                'medical_history' => 'Healthy',
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];
         Patient::insert($patients);
    }
}
