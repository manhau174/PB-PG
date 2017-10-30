<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlbumPbPgsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('album_pb_pgs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pbpg_id')->unsigned();
            $table->foreign('pbpg_id')->references('id')->on('pb_pgs');
            $table->text('images');
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
        Schema::dropIfExists('album_pb_pgs');
    }
}
