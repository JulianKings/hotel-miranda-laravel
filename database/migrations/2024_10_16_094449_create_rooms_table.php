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
        Schema::create('rooms', function (Blueprint $table) {
            $table->id()->primary();
            $table->enum('type', ['Single Bed', 'Double Bed', 'Double Superior', 'Suite']);
            $table->string('floor', length: 40);
            $table->integer('number');
            $table->string('images', length:255);
            $table->integer('price');
            $table->integer('offer');
            $table->enum('status', ['booked', 'maintenance', 'available']);
            $table->string('description', length:5000);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rooms');
    }
};
