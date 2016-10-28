<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMedicalHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medical_histories', function (Blueprint $table) {
            $table->increments('id')->unsigned();

            $table->integer('doctorId');
            $table->boolean('followUp');//follow up or first visit
            $table->date('visitationDate');
            $table->text('complain');
            $table->text('existingCondition');
            $table->string('doctorComment');
            $table->string('diagnosis');
            $table->string('doctorAdvice');
            $table->text('precription');
            $table->date('followUpDate');
            $table->string('referTo');
            $table->integer('patient_id');



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
        Schema::drop('medical_histories');
    }
}
