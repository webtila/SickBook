<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Inservicerecords extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inservicerecords',function(Blueprint $table){
            $table->increments('id');
            $table->string('record_no');
            $table->string('rank');
            $table->string('pat_name');
            $table->integer('comp_code');
            $table->date('dob');
            $table->string('address');
            $table->string('mob_no');
            $table->string('unit');
            $table->date('approved_in');
            $table->timestamps();
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
