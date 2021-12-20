<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChallengesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('challenges', function (Blueprint $table) {
	        $table->uuid('challengeid');
            $table->primary('challengeid');
            $table->integer('order')->default(0);
            $table->string('title');
            $table->string('category');
            $table->longText('description');
            $table->longText('howto');
            $table->string('level');
            $table->string('from')->nullable();
            $table->integer('expawarded');
            $table->string('imagename')->nullable();
            $table->string('icon');
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
        Schema::dropIfExists('challenges');
    }
}
