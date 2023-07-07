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
        Schema::create('pendataans', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('penanggung_jawab');
            $table->string('address');
            $table->string('phone_number');
            $table->string('product');
            $table->string('lokasi_lahan');
            $table->string('luas_lahan');
            $table->string('nilai_sewa');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pendataans');
    }
};
