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
        Schema::create('keluhan', function (Blueprint $table) {
            $table->id();
            $table->text('nama_keluhan');
            $table->integer('ongkos');
            $table->foreignId('id_komputer')->nullable()->constrained('komputer')->onDelete('set null');
            $table->foreignId('id_customer')->nullable()->constrained('customer')->onDelete('set null');
            $table->foreignId('id_pegawai')->nullable()->constrained('pegawai')->onDelete('set null');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('keluhan');
    }
};
