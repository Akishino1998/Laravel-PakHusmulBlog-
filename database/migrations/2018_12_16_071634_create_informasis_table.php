<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInformasisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('drakor', function (Blueprint $table) {
            $table->increments('id_drakor');
            $table->string('judul');
            $table->longText('sinopsis');
            $table->string('sutradara');
            $table->string('penulis');
            $table->string('episode');
            $table->string('waktu_tayang');
            $table->string('jadwal_tayang');
             $table->longText('foto');
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
        Schema::dropIfExists('informasis');
    }
}
