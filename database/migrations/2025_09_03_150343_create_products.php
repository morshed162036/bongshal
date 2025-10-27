<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->text('name')->nullable();
            $table->string('traditional_name')->nullable();
            $table->string('commercial_name')->nullable();
            $table->string('sku')->unique()->nullable();
            $table->Biginteger('catalogue_id')->nullable();
            $table->Biginteger('category_id')->nullable();
            $table->Biginteger('brand_id')->nullable();
            $table->string('image')->nullable();
            $table->string('size_chart')->nullable();
            $table->string('slug')->unique()->nullable();
            $table->string('series')->nullable();
            $table->string('parts_number')->nullable();
            $table->string('type')->nullable();
            $table->string('unit')->nullable();
            $table->string('unit_price')->nullable();
            $table->string('purchase_price')->nullable();
            $table->string('discount')->nullable();
            $table->string('discount_type')->nullable();
            $table->date('discount_start_date')->nullable();
            $table->date('discount_end_date')->nullable();

            $table->string('weight')->nullable();
            $table->string('min_purchase_qty')->nullable();
            $table->string('is_women&kids')->nullable();
            $table->string('is_oem')->nullable();
            $table->string('is_preorder')->nullable();
            $table->string('shipping_time')->nullable();
            $table->string('video')->nullable();
            $table->string('barcode')->nullable();
            $table->Biginteger('bike_id')->nullable();
            $table->longText('description')->nullable();
            $table->double('price', 20, 2)->default(0);
            $table->integer('stock')->default(0);
            $table->integer('alert_quantity')->nullable();
            $table->string('is_variant')->default('0');
            $table->string('is_specification')->default('0');
            $table->string('is_promotion')->default('0');
            $table->string('featured')->default('0');
            $table->string('flash_deal')->default('0');
            $table->string('today_deal')->default('0');
            $table->string('is_cash_on_delivery')->default('0');
            $table->string('pfd')->default('0');
            $table->string('status')->default('active');

            $table->string('meta_title')->nullable();
            $table->string('meta_image')->nullable();
            $table->longText('meta_description')->nullable();
            $table->longText('meta_keywords')->nullable();
<<<<<<< HEAD
=======
            $table->string('grade')->nullable();
            $table->string('engine_oil_type')->nullable();
            // $table->string('engine_oil_capacity')->nullable();
            $table->string('quantity')->nullable();
            $table->string('width')->nullable();
            $table->string('aspect_ratio')->nullable();
            $table->string('rim')->nullable();
            $table->longText('features')->nullable();

>>>>>>> 4c182987ded501b02deec36616d630990b82571f


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
