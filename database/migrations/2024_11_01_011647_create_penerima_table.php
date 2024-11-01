<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenerimaTable extends Migration
{
    public function up()
    {
        Schema::create('penerima', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->text('alamat');
            $table->string('kontak');
            $table->string('jenis_bantuan');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('penerima');
    }
}
