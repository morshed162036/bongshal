<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'traditional_name',
        'commercial_name',
        'sku',
        'category_id',
        'brand_id',
        'image',
        'size_chart',
        'slug',
        'series',
        'parts_number',
        'type',
        'unit',
        'unit_price',
        'purchase_price',
        'discount',
        'discount_type',
        'discount_start_date',
        'discount_end_date',
        'weight',
        'min_purchase_qty',
        'is_women&kids',
        'is_oem',
        'is_preorder',
        'shipping_time',
        'video',
        'barcode',
        'bike_id',
        'description',
        'price',
        'stock',
        'alert_quantity',
        'is_variant',
        'is_specification',
        'is_promotion',
        'featured',
        'flash_deal',
        'today_deal',
        'is_cash_on_delivery',
        'pfd',
        'status',
        'meta_title',
        'meta_image',
<<<<<<< HEAD
        'meta_description'
=======
        'meta_description',
        'grade',
        'engine_oil_type',
        'engine_oil_capacity',
        'quantity',
        'width',
        'aspect_ratio',
        'rim',
        'features',
>>>>>>> 4c182987ded501b02deec36616d630990b82571f
    ];

    public function images()
    {
        return $this->hasMany(ProductImage::class);
    }
    public function attributes()
    {
<<<<<<< HEAD
        return $this->hasMany(ProductAttribute::class);
=======
        return $this->hasMany(ProductAttribute::class)->with('attribute', 'attributeValue');
>>>>>>> 4c182987ded501b02deec36616d630990b82571f
    }
    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function bike()
    {
        return $this->belongsTo(Bike::class);
    }
<<<<<<< HEAD
    
=======

>>>>>>> 4c182987ded501b02deec36616d630990b82571f
}
