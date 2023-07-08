<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fitness', function (Blueprint $table) {
            $table->increments('id');
            $table->unique('id');
            $table->string('nama_suplemen');
            $table->integer('harga');
            $table->integer('isi');
            $table->integer('protein');
            $table->integer('kandungan_gizi');
            $table->integer('kalori');
            $table->string('image');
            $table->string('info');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fitness');
    }
};
