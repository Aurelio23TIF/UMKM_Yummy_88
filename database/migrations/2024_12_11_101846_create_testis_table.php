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
        Schema::create('testis', function (Blueprint $table) {
            $table->id(); // Kolom ID (Primary Key)
            $table->string('nama_customer'); // Nama customer
            $table->text('pesan'); // Pesan dari customer
            $table->string('gambar')->nullable(); // Path atau nama file gambar (nullable)
            $table->timestamps(); // Kolom created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('testis');
    }
};
