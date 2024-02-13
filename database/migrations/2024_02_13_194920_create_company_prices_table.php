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
        Schema::create('company_prices', function (Blueprint $table) {
            $table->id();
            $table->string('message');
            $table->integer('price');
            $table->foreignId('company_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('pharmacy_requests_id')->constrained('pharmacy_requests')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('company_prices');
    }
};