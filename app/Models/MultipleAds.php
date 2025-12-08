<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MultipleAds extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'multiple_ads';

    /**
     * The attributes that are mass assignable.
     *
     * IMPORTANT: 'type' has been added here to resolve the mass assignment error.
     * All fields being set via $ad->fill() in the controller must be listed here.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'type',        // Added to fix the error
        'title',
        'subtitle',
        'url',
        'image_1',
        'image_2',
        'image_3',
        'status',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'type' => 'string',
        'status' => 'string',
    ];
}
