<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccountsTable extends Migration
{
    public function up()
    {
        Schema::create('accounts', function (Blueprint $table) 
        {
                     $table->id();  
                     $table->unsignedBigInteger('user_id');
                     $table->string('account_number', 16)->unique();     
                     $table->double('balance', 8, 2)->default(0);    
                     $table->string('type', 20);  
                     $table->timestamps();     
                     $table->foreign('user_id')->references('id')->on('users');   
                          });
    }

    public function down()
    {
        Schema::dropIfExists('accounts');
    }
}
