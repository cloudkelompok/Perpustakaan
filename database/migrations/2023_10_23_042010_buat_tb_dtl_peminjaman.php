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
        Schema::create('tb_dtl_peminjaman', function (Blueprint $table) {
            $table->id('id_dtl_peminjaman');
            $table->integer('id_peminjaman');
            $table->integer('id_buku');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_dtl_peminjaman');
    }
};