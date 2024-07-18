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
        Schema::create('pembelian', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal');
            $table->string('nama_pembeli');
            $table->string('telefon');
            $table->unsignedBigInteger('buku_id');
            $table->integer('harga');
            $table->unsignedBigInteger('petugas_id');
            $table->enum('status_pembelian', ['Berhasil', 'Gagal']);
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
        Schema::dropIfExists('pembelian');
    }
};
