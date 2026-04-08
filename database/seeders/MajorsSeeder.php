<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use App\Models\Major;

class MajorsSeeder extends Seeder
{
    public function run(): void
    {

        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Major::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        $majors = [
            [
                'name' => 'Cardiology',
                'slug' => 'cardiology',
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQUlqBaU0l9azp_D3lgd3hEVkeVJrXZNep-9Q&s'
            ],
            [
                'name' => 'Ophthalmology',
                'slug' => 'Ophthalmology',
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQFfTjHS6Z3HpLoQob_DW9wAa9jx9N7XA17Yg&s'
            ],
            [
                'name' => 'Dentistry',
                'slug' => 'Dentistry',
                'image' => 'https://www.yourdentistryguide.com/wp-content/uploads/2017/11/tooth-cleaning-925x425.jpg'
            ],
            [
                'name' => 'Pediatrics',
                'slug' => 'Pediatrics',
                'image' => 'https://www.windsor.edu/wp-content/uploads/2023/09/considering.jpg'
            ],
            [
                'name' => 'Gynecology',
                'slug' => 'Gynecology',
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR8y6-g9L6s3XIhY03qdw-ynoKFT46vMugJrg&s'
            ],
            [
                'name' => 'Obstetrics',
                'slug' => 'Obstetrics',
                'image' => 'https://www.mayoclinic.org/-/media/kcms/gbs/medical-professionals/images/2024/01/04/18/07/baby-delivery-767x535.jpg'
            ],
            [
                'name' => 'Dermatology',
                'slug' => 'Dermatology',
                'image' => 'https://plymouthmeetingdermatology.com/wp-content/uploads/2022/01/plym_What-is-Cosmetic-Dermatology.jpg'
            ],

        ];
        Major::insert($majors);
    }
}
