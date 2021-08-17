<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Exfamilyrecords extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exfamilyrecords',function(Blueprint $table){
            $table->increments('id');
            $table->string('record_no');
            $table->string('pat_name');
            $table->date('dob');
            $table->string('ctz_no');
            $table->date('approved_in');
            $table->string('mob_no');
            $table->string('rel');
            $table->string('rank');
            $table->string('ex_staff_name');
            $table->string('pension');
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
