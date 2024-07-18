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
        Schema::create('peminjaman', function (Blueprint $table) {
            $table->id();
            $table->string('nama_peminjam');
            $table->date('mulai');
            $table->date('selesai');
            $table->string('ktm');
            $table->unsignedBigInteger('genre_id');
            $table->unsignedBigInteger('buku_id');
            $table->unsignedBigInteger('petugas_id');
            $table->enum('status_peminjam', ['Berhasil', 'Pending', 'Gagal']);
            $table->foreign('genre_id')->references('id')->on('genre')->onDelete('cascade');
            $table->foreign('buku_id')->references('id')->on('buku')->onDelete('cascade');
            $table->foreign('petugas_id')->references('id')->on('petugas')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peminjaman');
    }
};
