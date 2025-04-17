<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{
    use HasFactory;
    protected $fillable = [
        'category', 'model', 'brand', 'serial_number', 'image', 'start_date', 'end_date', 'status', 'user_id',
    ];
}
