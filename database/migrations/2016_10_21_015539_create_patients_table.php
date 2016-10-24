<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('IdKey')->unsigned()->index();
            $table->string('firstName');
            $table->string('middleName');
            $table->string('lastName');
            $table->integer('gender')->unsigned();
            $table->string('bloodGroup', 3)->default("0+");
            $table->date('DOB');
            $table->string('address');
            $table->string('contact', 10);
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
        Schema::drop('patients');
    }
}
