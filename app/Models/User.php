<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'name', 'pin', 'card_number', 'email'];
    protected $table = 'users';
    protected $validationRules = ['pin' => 'min:6', 'card_number' => 'min:14',];
    protected $with = ['account'];

    public function account()
   {
       return $this->hasMany(Account::class);
   }
   public function transactions()
   {
       return $this->hasMany(Transaction::class);
   }
}
