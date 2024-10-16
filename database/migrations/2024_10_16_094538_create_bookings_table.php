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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id()->primary();
            $table->unsignedBigInteger('client_id');
            $table->timestamp('date', precision: 0);
            $table->enum('status', ['checking_out', 'checking_in', 'in_progress']);
            $table->unsignedBigInteger('room_id');
            $table->timestamp('check_in', precision: 0);
            $table->timestamp('check_out', precision: 0);
            $table->string('notes', length: 5000);
            $table->timestamps();

            $table->foreign('client_id')->references('id')->on('clients');
            $table->foreign('room_id')->references('id')->on('rooms');

            /*
                `id` int NOT NULL AUTO_INCREMENT,
                `customer_name` varchar(100) NOT NULL,
                `customer_dni` varchar(100) NOT NULL,
                `date` varchar(100) NOT NULL,
                `status` enum('checking_out','checking_in','in_progress') NOT NULL,
                `room_id` int NOT NULL,
                `check_in` varchar(100) NOT NULL,
                `check_out` varchar(100) NOT NULL,
                `notes` varchar(5000) NOT NULL,
                PRIMARY KEY (`id`),
                KEY `room_id` (`room_id`),
                CONSTRAINT `bookings_ibfk_1` FOREIGN KEY (`room_id`) REFERENCES `rooms` (`id`) ON DELETE CASCADE
            */
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
