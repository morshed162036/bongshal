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
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('sub_title')->nullable();
            $table->string('slug')->nullable();
            $table->text('Short_description')->nullable();
            $table->text('description')->nullable();
            $table->string('image')->nullable();
            $table->string('photo_caption')->nullable();
            $table->string('order')->nullable();
            $table->string('status')->nullable();
            $table->bigInteger('user_id')->nullable();
            $table->bigInteger('updated_by')->nullable();
            $table->bigInteger('category_id')->nullable();
            $table->string('views')->default(0);
            $table->string('meta_title')->nullable();
            $table->string('meta_description')->nullable();
            $table->string('meta_keywords')->nullable();
            $table->bigInteger('comments')->default(0);
            $table->bigInteger('likes')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
