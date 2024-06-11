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
        Schema::create('camp_packages', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->decimal('harga');
            $table->boolean('tenda');
            $table->boolean('matras');
            $table->boolean('sleeping_bag');
            $table->boolean('kayu_bakar');
            $table->boolean('alat_masak');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('camp_packages');
    }
};
