<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVisitCountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visit_counts', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('January')->default(0)->unsigned();
            $table->integer('February')->default(0)->unsigned();
            $table->integer('March')->default(0)->unsigned();
            $table->integer('April')->default(0)->unsigned();
            $table->integer('May')->default(0)->unsigned();
            $table->integer('June')->default(0)->unsigned();
            $table->integer('July')->default(0)->unsigned();
            $table->integer('August')->default(0)->unsigned();
            $table->integer('September')->default(0)->unsigned();
            $table->integer('October')->default(0)->unsigned();
            $table->integer('November')->default(0)->unsigned();
            $table->integer('December')->default(0)->unsigned();
            $table->integer('year_id')->unsigned();


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('visit_counts');
    }
}
