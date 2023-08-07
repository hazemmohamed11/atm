<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->integer('account_id');
            $table->id();
            $table->string('name');
            $table->string('pin', 6);
            $table->string('card_number', 14);
            $table->string('email');
            $table->timestamps();

            // Add foreign key to accounts table
            // $table->foreign('account_id')->references('id')->on('accounts');
        });
    }
    public function down()
    {
        Schema::dropIfExists('users');
    }
}


