<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Exams', function (Blueprint $table) {
            $table ->increments('id');
            $table ->string('name')->unique();
            $table ->tinyInteger('quantity');
            $table ->integer('time');
            $table ->integer('user_id')->default(0);
            // $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table ->integer('topic_id')->default(0);
            // $table->foreign('topic_id')->references('id')->on('topics')->onDelete('cascade');
            $table ->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Exams');
    }
}
