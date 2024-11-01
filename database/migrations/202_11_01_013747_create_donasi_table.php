<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonasiTable extends Migration
{
    public function up()
    {
        Schema::create('donasi', function (Blueprint $table) {
            $table->id(); // ID unik untuk setiap donasi
            $table->foreignId('donor_id')->constrained('donor')->onDelete('cascade'); // Hubungan ke tabel donor
            $table->decimal('jumlah', 15, 2); // Jumlah donasi
            $table->date('tanggal_donasi'); // Tanggal donasi
            $table->string('metode_pembayaran'); // Metode pembayaran
            $table->enum('status', ['pending', 'diterima', 'dibatalkan']); // Status donasi
            $table->timestamps(); // Waktu dibuat dan diupdate
        });
    }

    public function down()
    {
        Schema::dropIfExists('donasi'); // Menghapus tabel jika migration dirollback
    }
}
