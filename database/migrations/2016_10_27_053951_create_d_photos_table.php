<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDPhotosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('d_photos', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('name',30);
            $table->string('extension',10);
            $table->string('path',100);
            $table->integer('size');
            $table->string('type',100);
            $table->integer('doctor_id')->unsigned();
            $table->foreign('doctor_id')->references('id')->on('doctors');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('d_photos');
    }
}
