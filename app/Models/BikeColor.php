<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BikeColor extends Model
{
    use HasFactory;
    protected $fillable = [
        'bike_id',
        'color_name',
        'image',
    ];
    public function bike()
    {
        return $this->belongsTo(Bike::class, 'bike_id');
    }
    
}
