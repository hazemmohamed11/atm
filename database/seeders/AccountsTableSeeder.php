<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AccountsTableSeeder extends Seeder
{
    public function run()
    {

        DB::table('accounts')->insert([
            'user_id' => '1',
            'account_number' => '1234567890123456',
            'balance' => '10000',
            'type' => 'savings',
        ]);

      
    }
}




