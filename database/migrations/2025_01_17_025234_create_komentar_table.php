<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('komentars', function (Blueprint $table) {
            $table->id();
            $table->string('username');
            $table->string('rating');
            $table->text('Komentar');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('komentars');
    }
};
