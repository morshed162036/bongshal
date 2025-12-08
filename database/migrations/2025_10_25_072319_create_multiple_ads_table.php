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
        Schema::create('multiple_ads', function (Blueprint $table) {
            $table->id();
            $table->enum('type', [
            'single_main_banner',   
            'single_side_banner',    
            'double_banner',         
            'triple_banner',        
    ])->default('single_main_banner');
    $table->string('title')->nullable();
    $table->string('subtitle')->nullable();
    $table->string('url')->nullable(); 
    $table->string('image_1')->nullable(); 
    $table->string('image_2')->nullable(); 
    $table->string('image_3')->nullable(); 
    $table->enum('status', ['active', 'inactive'])->default('inactive');
    $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('multiple_ads');
    }
};
