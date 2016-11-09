<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

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
            $table->increments('id')->unsigned();;
            $table->integer('IdKey')->unsigned()->index();
            $table->string('firstName');
            $table->string('middleName');
            $table->string('lastName');
            $table->string('gender',10);
            $table->string('bloodGroup', 3)->default("0+");
            $table->date('DOB');
            $table->string('address');
            $table->string('contact', 10);
            $table->text('about')->nullable();
            $table->integer('doctor_id')->unsigned();
            $table->string('email',30)->unique();
            $table->date('followUp');
            $table->string('password');
            $table->timestamps();

        });

//        Schema::table('patients', function($table) {
//            $table->foreign('doctor_id')->references('id')->on('doctors');
//        });

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
