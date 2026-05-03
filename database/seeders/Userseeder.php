<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class Userseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        User::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        $Userseeder =
            [
                [
                    "name" => "Mahmoud Reda",
                    "email" => "mahmoud5@gmail.com",
                    "password" => Hash::make("mahmoud"),
                    "phone" => "01145139238"
                ],
            ];
          User::insert($Userseeder);
    }
}
