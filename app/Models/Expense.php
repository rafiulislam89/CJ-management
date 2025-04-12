<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Expense extends Model
{
    use HasFactory;

    // Add 'purpose' to the fillable array to allow mass assignment
    protected $fillable = [
        'purpose',
        'amount',
        'month',
        'year',
        'date',
        'type',
    ];

    // Cast 'date' attribute to a Carbon instance for easier manipulation
    protected $casts = [
        'date' => 'date',
    ];

    // Automatically set 'month' and 'year' when the 'date' is updated or set
    public static function boot()
    {
        parent::boot();

        static::saving(function ($expense) {
            // Set the 'month' and 'year' based on the 'date'
            if ($expense->date) {
                $expense->month = Carbon::parse($expense->date)->month;
                $expense->year = Carbon::parse($expense->date)->year;
            }
        });
    }
}
