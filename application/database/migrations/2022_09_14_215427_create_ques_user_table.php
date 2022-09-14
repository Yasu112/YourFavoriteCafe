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
        Schema::create('ques_user', function (Blueprint $table) {
            $table->unsignedBigInteger('ques_id');
            $table->foreign('ques_id')->references('ques_id')->on('question');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users_inf');
            $table->unsignedBigInteger('cafe_id');
            $table->foreign('cafe_id')->references('cafe_id')->on('forms');
            $table->unsignedBigInteger('review_id');
            $table->foreign('review_id')->references('id')->on('form_user');
            $table->string('answer');
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
        Schema::dropIfExists('ques_user');
    }
};
