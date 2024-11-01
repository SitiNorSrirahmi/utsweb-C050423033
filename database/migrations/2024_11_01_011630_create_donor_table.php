<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonorTable extends Migration
{
    public function up()
    {
        Schema::create('donor', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('email')->unique();
            $table->string('nomor_telepon');
            $table->text('alamat');
            $table->date('tanggal_bergabung');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('donor');
    }
}
