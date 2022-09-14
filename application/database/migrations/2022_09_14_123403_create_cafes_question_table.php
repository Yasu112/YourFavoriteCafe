<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cafes_question', function (Blueprint $table) {
            $table->unsignedBigInteger('cafe_id');
            $table->foreign('cafe_id')->references('id')->on('cafes_inf');
            $table->unsignedBigInteger('ques_id');
            $table->foreign('ques_id')->references('id')->on('questions');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cafes_question');
    }
};
