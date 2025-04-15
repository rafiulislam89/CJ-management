<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
        'company_name',
        'description',
        'joining_date',
        'end_date',
        'status',
        'user_id',
    ];

    // Optional: relationship with User
//    public function user()
//    {
//        return $this->belongsTo(User::class);
//    }
}