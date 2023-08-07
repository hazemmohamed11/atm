<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class accounts_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $account1 = new Account();
        $account1->account_number = '1234567890123456';
        $account1->balance = 10000;
        $account1->type = 'savings';
        $account1->save();
    
        $account2 = new Account();
        $account2->account_number = '9876543210987654';
        $account2->balance = 5000;
        $account2->type = 'checking';
        $account2->save();
    }
}
