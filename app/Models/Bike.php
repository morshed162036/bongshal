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
<<<<<<< HEAD
        'front_tire_size',
        'rear_tire_size',
=======
        'front_tire_width',
        'front_tire_aspectratio',
        'front_tire_rim',
        'rear_tire_width',
        'rear_tire_aspectratio',
        'rear_tire_rim',
>>>>>>> 4c182987ded501b02deec36616d630990b82571f
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
