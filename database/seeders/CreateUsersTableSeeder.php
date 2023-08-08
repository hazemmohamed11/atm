<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CreateUsersTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Hazem Mohamed',
            'pin' => '123456',
            'card_number' => '12345678901234',
            'email' => 'Hazem@example.com',
        ]);

        DB::table('users')->insert([
            'name' => 'SVGXX HAZEM',
            'pin' => '654321',
            'card_number' => '98765432109876',
            'email' => 'SVGXX@example.com',
        ]);
    }
}
