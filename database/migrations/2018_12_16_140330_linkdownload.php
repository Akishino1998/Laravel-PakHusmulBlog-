<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Linkdownload extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('link_download', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_drakor');
            $table->foreign('id_drakor')->references('id_drakor')->on('drakor');
            $table->string('resolusi');
            $table->string('link_video');
            $table->string('link_subtitle');
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
