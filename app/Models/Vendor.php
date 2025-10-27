<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'phone',
        'wechat',
        'address',
        'website',
        'status',
        'purchase_amount',
        'get_amount',
        'current_due',
        'user_id',
        'created_by',
        'updated_by',
        'approved_by',
        'image',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // public function purchases()
    // {
    //     return $this->hasMany(Purchase::class);
    // }

    // public function payments()
    // {
    //     return $this->hasMany(Payment::class);
    // }

    public function createdBy()
    {
        return $this->belongsTo(User::class, 'created_by');
    }
    public function updatedBy()
    {
        return $this->belongsTo(User::class, 'updated_by');
    }

    public function approvedBy()
    {
        return $this->belongsTo(User::class, 'approved_by');
    }

}
