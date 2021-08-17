<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Exservicerecords extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exservicerecords',function(Blueprint $table){
            $table->increments('id');
            $table->string('record_no');
            $table->string('rank');
            $table->string('pat_name');
            $table->string('pension');
            $table->string('ctz_no');
            $table->date('dob');
            $table->string('mob_no');
            $table->date('approved_in');
            $table->date('book_expiry');
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
