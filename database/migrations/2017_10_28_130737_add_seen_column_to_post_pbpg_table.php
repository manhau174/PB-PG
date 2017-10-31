<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSeenColumnToPostPbpgTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('post_pbpg', function (Blueprint $table) {
            //
            $table->boolean('seen');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('post_pbpg', function (Blueprint $table) {
            //
            $table->dropColumn('seen');
        });
    }
}
