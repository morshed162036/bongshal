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
        Schema::create('adings', function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable(); 
            $table->string('video_url')->nullable(); 
            $table->string('link')->nullable(); 
            $table->enum('type', ['video', 'image'])->default('image');
            $table->enum('status', ['Active', 'Inactive'])->default('Active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('adings');
    }
};
