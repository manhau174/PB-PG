<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecruitmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recruitments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 50);
            $table->string('address', 100)->nullable();
            $table->text('about')->nullable();
            $table->integer('user_id');
            $table->string('mobile',20)->nullable();
            $table->string('email', 50)->unique();

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
        Schema::dropIfExists('recruitments');
    }
}
