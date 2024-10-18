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
        Schema::create('room_amenities', function (Blueprint $table) {
            $table->id()->primary();
            $table->unsignedBigInteger('amenity_id');
            $table->unsignedBigInteger('room_id');
            $table->timestamps();

            $table->foreign('amenity_id')->references('id')->on('amenities')->onDelete('cascade');
            $table->foreign('room_id')->references('id')->on('rooms')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
