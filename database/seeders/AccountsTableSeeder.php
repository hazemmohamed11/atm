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
            'account_number' => '1234567893123430',
            'balance' => '10000',
            'type' => 'savings',
        ]);
        DB::table('accounts')->insert([
            'user_id' => '1',
            'account_number' => '1234567890123413',
            'balance' => '20000',
            'type' => 'credit',
        ]);
        DB::table('accounts')->insert([
            'user_id' => '1',
            'account_number' => '1234567890123251',
            'balance' => '30000',
            'type' => 'debit',
        ]);
        DB::table('accounts')->insert([
            'user_id' => '2',
            'account_number' => '1234547890123251',
            'balance' => '50000',
            'type' => 'debit',
        ]);
        DB::table('accounts')->insert([
            'user_id' => '2',
            'account_number' => '5234547890123251',
            'balance' => '240000',
            'type' => 'credit',
        ]);

        DB::table('accounts')->insert([
            'user_id' => '2',
            'account_number' => '1534567890123430',
            'balance' => '190000',
            'type' => 'savings',
        ]);
    }
}




