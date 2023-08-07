<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CreateUsersTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'John Doe',
            'pin' => '123456',
            'card_number' => '12345678901234',
            'email' => 'johndoe@example.com',
            'account_id' => 1,
        ]);

        DB::table('users')->insert([
            'name' => 'Jane Doe',
            'pin' => '654321',
            'card_number' => '98765432109876',
            'email' => 'janedoe@example.com',
            'account_id' => 2,
        ]);
    }
}
