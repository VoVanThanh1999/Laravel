<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatchDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('match_details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('A_number_of_empty_seats');
            $table->integer('A_number_of_seats_purchased');
            $table->float('A_price');
            $table->integer('B_number_of_empty_seats');
            $table->integer('B_number_of_seats_purchased');
            $table->float('B_price');
            $table->integer('id_match');
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
        Schema::dropIfExists('match_details');
    }
}
