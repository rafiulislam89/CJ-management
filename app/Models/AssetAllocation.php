<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssetAllocation extends Model
{
    use HasFactory;

    protected $fillable = [
        'client_id',
        'assets_id',
        'allocation_date',
        'expiry_date',
        'status'
    ];

    /**
     * Get the company associated with the asset allocation.
     */
    public function company()
    {
        return $this->belongsTo(Client::class, 'client_id');
    }

    /**
     * Get the inventory associated with the asset allocation.
     */
    public function inventory()
    {
        return $this->belongsTo(Asset::class, 'assets_id');
    }
}