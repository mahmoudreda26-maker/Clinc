<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Admin::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        $AdminSeeder =
            [
                [
                    "name" => "Mahmoud Reda",
                    "email" => "mahmoudreda5@gmail.com",
                    "password" => Hash::make("mahmoud465"),
                    "image" => ""
                ],
                [
                    "name" => "Mohannd Reda",
                    "email" => "Mohanndreda5@gmail.com",
                    "password" => Hash::make("Mohannd465"),
                    "image" => ""
                ],
                [
                    "name" => "Anas Reda",
                    "email" => "Anasreda5@gmail.com",
                    "password" => Hash::make("Anas465"),
                    "image" => ""
                ],
                [
                    "name" => "Tamim Reda",
                    "email" => "Tamimreda5@gmail.com",
                    "password" =>Hash::make("Tamim465"),
                    "image" => ""
                ],
            ];
          Admin::insert($AdminSeeder);
    }
}
