<?php

namespace App\Models;

use App\User;
use Eloquent;

class Receipt extends Eloquent
{
    protected $fillable = ['pr_id', 'year', 'month', 'due', 'total', 'balance', 'amt_paid', 'is_residential'];

    public function pr()
    {
        return $this->belongsTo(PaymentRecord::class, 'pr_id');
    }

}
