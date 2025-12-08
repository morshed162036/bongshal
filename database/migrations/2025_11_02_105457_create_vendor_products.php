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
        Schema::create('vendor_products', function (Blueprint $table) {
            $table->id();
            $table->BigInteger('vendor_id')->nullable();
            $table->BigInteger('product_id')->nullable();
            $table->BigInteger('created_by')->nullable();
            $table->BigInteger('update_by')->nullable();
            $table->BigInteger('approve_by')->nullable();
            $table->string('status')->default('Pending')->nullable();
            $table->string('stock_status')->default('In Stock')->nullable();
            $table->integer('quantity')->default(0)->nullable();
            $table->decimal('price', 10, 2)->nullable();
            $table->decimal('discount_price', 10, 2)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vendor_products');
    }
};
