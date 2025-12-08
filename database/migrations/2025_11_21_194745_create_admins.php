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
        Schema::create('admins', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('phone')->nullable();
            $table->string('image')->nullable();
            $table->text('address')->nullable();
            // $table->string('role')->default('admin');
            // $table->string('is_active')->default('active');
            // $table->string('text_password')->nullable();
            $table->biginteger('user_id')->nullable();
            $table->biginteger('created_by')->nullable();
            $table->biginteger('updated_by')->nullable();
            $table->softDeletes();
            $table->timestamp('email_verified_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admins');
    }
};
