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
        Schema::create('contacts', function (Blueprint $table) {
            $table->id()->primary();
            $table->string('customer_name', length: 100);
            $table->string('customer_mail', length: 100);
            $table->string('customer_phone', length: 30);
            $table->timestamp('date', precision: 0);
            $table->enum('status', ['active', 'archived']);
            $table->string('subject', length: 500);
            $table->string('comment', length: 5000);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contacts');
    }
};
