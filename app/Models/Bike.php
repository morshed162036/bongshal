<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bike extends Model
{
    use HasFactory;
    protected $fillable = [
        'model',
        'company_id',
        'type',
        'front_tire_size',
        'rear_tire_size',
        'battery',
        'status',
    ];

    public function company()
    {
        return $this->belongsTo(Company::class, 'company_id');
    }
    public function color()
    {
        return $this->hasMany(BikeColor::class, 'bike_id');
    }
    public function grade()
    {
        return $this->hasMany(EngineoilGrade::class, 'bike_id');
    }
    public function products()
    {
        return $this->hasMany(Product::class, 'bike_id');
    }
}
