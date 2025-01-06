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
        Schema::create('homes', function (Blueprint $table) {
            $table->id();
            $table->text('name');
            $table->text('judul');
            $table->text('deskripsi');
            $table->text('link_youtube');
            $table->text('foto_iklan');
            $table->text('pelanggan');
            $table->text('terjual');
            $table->text('ulasan');
            $table->text('merk');
            $table->text('koleksi');
            $table->text('layanan');
            $table->text('iklan');
            $table->text('deskripsi_iklan');
            $table->text('about_us');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('home_pages');
    }
};
