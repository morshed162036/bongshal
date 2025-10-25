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
        Schema::create('engineoil_grades', function (Blueprint $table) {
            $table->id();
            $table->string('grade')->nullable();
            $table->string('volume')->nullable();
            $table->bigInteger('bike_id')->nullable();
            $table->string('status')->nullable();
            $table->string('image')->nullable();
            $table->text('description')->nullable();
            $table->bigInteger('created_by')->nullable();
            $table->bigInteger('updated_by')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('engineoil_grades');
    }
};
