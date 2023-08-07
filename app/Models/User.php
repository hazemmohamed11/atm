<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'pin', 'card_number', 'email'];
      protected $table = 'users'; 
       protected $validationRules = [     'pin' => 'min:6',     'card_number' => 'min:14', ];

       public function account()
        {     return $this->hasOne(Account::class); }
}
