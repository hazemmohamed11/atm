<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;
    protected $fillable = ['id','user_id', 'account_number', 'balance', 'type'];
    protected $table = 'accounts';
    protected $dates = ['created_at', 'updated_at'];
    protected $validationRules = ['balance' => 'numeric'];

    public function user()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }
    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }
}
