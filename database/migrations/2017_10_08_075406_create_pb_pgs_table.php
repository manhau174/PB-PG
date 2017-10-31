<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePbPgsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pb_pgs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('full_name', 50);
            $table->dateTime('birthday')->nullable();
            $table->string('address',100)->nullable();
            $table->string('email',50)->unique();
            $table->string('mobile',20);
            $table->text('description');
            $table->string('profile_picture');
            $table->text('images')->nullable();
            $table->integer('height');
            $table->integer('weight');
            $table->integer('city_id');


            $table->integer('user_id');
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
        Schema::dropIfExists('pb_pgs');
    }
}
