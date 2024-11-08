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
        Schema::create('users', function (Blueprint $table) {
            $table->id()->primary();
            $table->string('name')->unique();
            $table->string('full_name');
            $table->string('password');
            $table->string('mail')->unique();
            $table->string('profile_picture');
            $table->timestamp('start');
            $table->text('description');
            $table->text('contact');
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->enum('position', ['manager', 'room_service', 'reception'])->default('reception');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
