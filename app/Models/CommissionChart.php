<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommissionChart extends Model
{
    use HasFactory;


    protected $fillable = [
        'name',
        'description',
        'commission_rate',
        'down_threshold_amount',
        'up_threshold_amount',
        'is_active',
        'catalogue_id',
        'created_by',
        'updated_by',
    ];

    public function catalogue()
    {
        return $this->belongsTo(Catalogue::class);
    }

    public function createdBy()
    {
        return $this->belongsTo(User::class, 'created_by');
    }
    public function updatedBy()
    {
        return $this->belongsTo(User::class, 'updated_by');
    }

}
