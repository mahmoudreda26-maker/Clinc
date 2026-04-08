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
        'name' => 'Dr. Ahmed Hassan',
        'email' => 'ahmed.hassan@gmail.com',
        'phone' => '01012345678',
        'address' => 'Cairo',
        'major_id' => 1,
    ],
    [
        'name' => 'Dr. Sara Ali',
        'email' => 'sara.ali@gmail.com',
        'phone' => '01123456789',
        'address' => 'Mansoura',
        'major_id' => 2,
    ],
    [
        'name' => 'Dr. Mohamed Nour',
        'email' => 'mohamed.nour@gmail.com',
        'phone' => '01234567890',
        'address' => 'Alexandria',
        'major_id' => 3,
    ],
    [
        'name' => 'Dr. Fatma Samy',
        'email' => 'fatma.samy@gmail.com',
        'phone' => '01098765432',
        'address' => 'Giza',
        'major_id' => 4,
    ],
    [
        'name' => 'Dr. Mahmoud Adel',
        'email' => 'mahmoud.adel@gmail.com',
        'phone' => '01187654321',
        'address' => 'Tanta',
        'major_id' => 5,
    ],
    [
        'name' => 'Dr. Nour Ibrahim',
        'email' => 'nour.ibrahim@gmail.com',
        'phone' => '01276543210',
        'address' => 'Zagazig',
        'major_id' => 6,
    ],
    [
        'name' => 'Dr. Ali Youssef',
        'email' => 'ali.youssef@gmail.com',
        'phone' => '01065432109',
        'address' => 'Asyut',
        'major_id' => 7,
    ],
    [
        'name' => 'Dr. Rana Hassan',
        'email' => 'rana.hassan@gmail.com',
        'phone' => '01154321098',
        'address' => 'Cairo',
        'major_id' => 1,
    ],
    [
        'name' => 'Dr. Khaled Ali',
        'email' => 'khaled.ali@gmail.com',
        'phone' => '01243210987',
        'address' => 'Mansoura',
        'major_id' => 2,
    ],
    [
        'name' => 'Dr. Salma Nour',
        'email' => 'salma.nour@gmail.com',
        'phone' => '01032109876',
        'address' => 'Alexandria',
        'major_id' => 3,
    ],
    [
        'name' => 'Dr. Omar Samy',
        'email' => 'omar.samy@gmail.com',
        'phone' => '01121098765',
        'address' => 'Giza',
        'major_id' => 4,
    ],
    [
        'name' => 'Dr. Aya Adel',
        'email' => 'aya.adel@gmail.com',
        'phone' => '01210987654',
        'address' => 'Tanta',
        'major_id' => 5,
    ],
    [
        'name' => 'Dr. Hossam Ibrahim',
        'email' => 'hossam.ibrahim@gmail.com',
        'phone' => '01099887766',
        'address' => 'Zagazig',
        'major_id' => 6,
    ],
    [
        'name' => 'Dr. Dina Youssef',
        'email' => 'dina.youssef@gmail.com',
        'phone' => '01188776655',
        'address' => 'Asyut',
        'major_id' => 7,
    ],
    [
        'name' => 'Dr. Tarek Hassan',
        'email' => 'tarek.hassan@gmail.com',
        'phone' => '01277665544',
        'address' => 'Cairo',
        'major_id' => 1,
    ],
    [
        'name' => 'Dr. Menna Ali',
        'email' => 'menna.ali@gmail.com',
        'phone' => '01066554433',
        'address' => 'Mansoura',
        'major_id' => 2,
    ],
    [
        'name' => 'Dr. Yasser Nour',
        'email' => 'yasser.nour@gmail.com',
        'phone' => '01155443322',
        'address' => 'Alexandria',
        'major_id' => 3,
    ],
    [
        'name' => 'Dr. Reem Samy',
        'email' => 'reem.samy@gmail.com',
        'phone' => '01244332211',
        'address' => 'Giza',
        'major_id' => 4,
    ],
    [
        'name' => 'Dr. Mostafa Adel',
        'email' => 'mostafa.adel@gmail.com',
        'phone' => '01033221100',
        'address' => 'Tanta',
        'major_id' => 5,
    ],
    [
        'name' => 'Dr. Habiba Ibrahim',
        'email' => 'habiba.ibrahim@gmail.com',
        'phone' => '01122110099',
        'address' => 'Zagazig',
        'major_id' => 6,
    ],
    [
        'name' => 'Dr. Karim Fathy',
        'email' => 'karim.fathy@gmail.com',
        'phone' => '01211009988',
        'address' => 'Asyut',
        'major_id' => 7,
    ],
    [
        'name' => 'Dr. Mariam Hassan',
        'email' => 'mariam.hassan@gmail.com',
        'phone' => '01090998877',
        'address' => 'Cairo',
        'major_id' => 1,
    ],
    [
        'name' => 'Dr. Wael Ali',
        'email' => 'wael.ali@gmail.com',
        'phone' => '01180887766',
        'address' => 'Mansoura',
        'major_id' => 2,
    ],
    [
        'name' => 'Dr. Nada Nour',
        'email' => 'nada.nour@gmail.com',
        'phone' => '01270776655',
        'address' => 'Alexandria',
        'major_id' => 3,
    ],
    [
        'name' => 'Dr. Islam Samy',
        'email' => 'islam.samy@gmail.com',
        'phone' => '01060665544',
        'address' => 'Giza',
        'major_id' => 4,
    ],
    [
        'name' => 'Dr. Heba Adel',
        'email' => 'heba.adel@gmail.com',
        'phone' => '01150554433',
        'address' => 'Tanta',
        'major_id' => 5,
    ],
    [
        'name' => 'Dr. Sherif Ibrahim',
        'email' => 'sherif.ibrahim@gmail.com',
        'phone' => '01240443322',
        'address' => 'Zagazig',
        'major_id' => 6,
    ],
    [
        'name' => 'Dr. Eman Youssef',
        'email' => 'eman.youssef@gmail.com',
        'phone' => '01030332211',
        'address' => 'Asyut',
        'major_id' => 7,
    ],
    [
        'name' => 'Dr. Amr Hassan',
        'email' => 'amr.hassan@gmail.com',
        'phone' => '01120221100',
        'address' => 'Cairo',
        'major_id' => 1,
    ],
    [
        'name' => 'Dr. Basma Ali',
        'email' => 'basma.ali@gmail.com',
        'phone' => '01210110099',
        'address' => 'Mansoura',
        'major_id' => 2,
    ],
];
        Doctor::insert($doctors);

    }
}
