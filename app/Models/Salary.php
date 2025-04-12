<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Salary extends Model
{
    protected $fillable = ['user_id', 'receiver', 'purpose', 'amount', 'month', 'year', 'date', 'type'];


    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }


    public function receiverUser()
    {
        return $this->belongsTo(User::class, 'receiver');
    }
}
