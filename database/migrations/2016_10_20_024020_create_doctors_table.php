<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

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
            $table->string('firstName');
            $table->string('middleName')->nullable();
            $table->string('lastName');
            $table->text('about')->nullable();
            $table->text('education')->nullable();
            $table->text('workDays')->nullable();;
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('skype')->nullable();
            $table->string('speciality')->nullable();;
            $table->string('contact')->nullable();;
            $table->string('email')->unique();
            $table->string('password');
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
