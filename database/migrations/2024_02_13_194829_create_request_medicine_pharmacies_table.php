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
        Schema::create('request_medicine_pharmacies', function (Blueprint $table) {
            $table->id();
            $table->string('message');
            $table->foreignId('pharmacy_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('product_id')->constrained('company_productes')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('request_medicine_pharmacies');
    }
};
