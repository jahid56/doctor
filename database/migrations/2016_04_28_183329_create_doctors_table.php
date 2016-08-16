<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            // $table->integer('user_id');
            $table->integer('division_id');
            $table->integer('dcategory_id');
            $table->integer('district_id');
            $table->string('institute');
            $table->string('education');
            $table->string('specialty');
            $table->string('hospital');
            $table->integer('fee');
            $table->integer('phone');
            $table->string('time');
            $table->binary('pic');
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
        Schema::drop('doctors');
    }
}
