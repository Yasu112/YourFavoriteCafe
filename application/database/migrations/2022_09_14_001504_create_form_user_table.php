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
        Schema::create('form_user', function (Blueprint $table) {
            $table->id();//review_id
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users_inf');
            $table->unsignedBigInteger('form_id');
            $table->foreign('form_id')->references('form_id')->on('forms');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('form_user');
    }
};
