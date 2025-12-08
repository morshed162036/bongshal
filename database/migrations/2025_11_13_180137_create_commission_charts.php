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
        Schema::create('commission_charts', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->text('description')->nullable();
            $table->decimal('commission_rate', 5, 2)->nullable(); // e.g., 12.34%
            $table->decimal('down_threshold_amount', 10, 2)->nullable(); // e.g., 1000.00
            $table->decimal('up_threshold_amount', 10, 2)->nullable(); // e.g., 5000.00
            $table->boolean('is_active')->default(true);
            $table->BigInteger('catalogue_id')->nullable()->nullable();
            $table->BigInteger('created_by')->nullable()->nullable();
            $table->BigInteger('updated_by')->nullable()->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('commission_charts');
    }
};
