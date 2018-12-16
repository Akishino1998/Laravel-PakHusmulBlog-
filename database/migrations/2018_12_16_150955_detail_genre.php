<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DetailGenre extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_genre', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_genre');
            $table->foreign('id_genre')->references('id_genre')->on('genres');
            $table->unsignedInteger('id_drakor');
            $table->foreign('id_drakor')->references('id_drakor')->on('drakor');
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
        //
    }
}
