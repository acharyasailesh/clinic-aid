<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePPhotosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('p_photos', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('name',30);
            $table->string('extension',10);
            $table->string('path',100);
            $table->integer('size');
            $table->string('type',100);
            $table->integer('patient_id')->unsigned();
            $table->foreign('patient_id')->references('id')->on('patients');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('p_photos');
    }
}
