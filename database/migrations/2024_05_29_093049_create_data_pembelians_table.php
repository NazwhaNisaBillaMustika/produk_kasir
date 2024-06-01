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
        Schema::create('data_pembelians', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pembeli');
            $table->foreignId('id_menu')->constrained('menus')->onDelete('cascade');
            $table->foreignId('id_pegawai')->constrained('pegawais')->onDelete('cascade');
            $table->string('metode_pembayaran');
            $table->string('uang_tunai');
            $table->date('tanggal');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_pembelians');
    }
};
