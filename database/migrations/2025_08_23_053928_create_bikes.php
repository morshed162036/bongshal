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
        Schema::create('bikes', function (Blueprint $table) {
            $table->id();
            $table->string('model')->nullable();
            $table->bigInteger('company_id')->nullable();
            $table->string('type')->nullable();
            $table->string('front_tire_width')->nullable();
            $table->string('front_tire_aspectratio')->nullable();
            $table->string('front_tire_rim')->nullable();
            $table->string('rear_tire_width')->nullable();
            $table->string('rear_tire_aspectratio')->nullable();
            $table->string('rear_tire_rim')->nullable();
            $table->string('battery')->nullable();
            $table->string('status')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bikes');
    }
};
