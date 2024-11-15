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
        Schema::create('tb_peminjaman', function (Blueprint $table) {
            $table->id('id_peminjaman');
            $table->bigInteger('id_user');
            $table->bigInteger('id_buku');
            $table->bigInteger('jumlah_pinjam');
            $table->date('tgl_pinjam');
            $table->date('tgl_kembali')->nullable();
            $table->string('status_peminjaman', '20')->default('Pinjam');
            $table->string('denda', '255')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_peminjaman');
    }
};
