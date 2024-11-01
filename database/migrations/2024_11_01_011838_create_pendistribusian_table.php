<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePendistribusianTable extends Migration
{
    public function up()
    {
        Schema::create('pendistribusian', function (Blueprint $table) {
            $table->id();
            $table->string('tujuan_distribusi');
            $table->date('tanggal_distribusi');
            $table->decimal('jumlah_distribusi', 15, 2);
            $table->enum('status', ['direncanakan', 'dalam proses', 'selesai']);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pendistribusian');
    }
}
