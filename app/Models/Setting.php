<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;
    protected $fillable = [
    'site_name',
    'email',
    'phone',
    'address',
    'logo',
    'favicon',
    'sos_banner',
    'meta_description',
    'meta_keywords',
    'meta_title',
    'copyright',
    'social_facebook',
    'google_analytics_code',
    'facebook_pixel_code',
    'social_linkedin',
    'social_twitter',
    'social_instagram',
    'social_youtube',
    'short_about',
    'whatsapp',
];
}
