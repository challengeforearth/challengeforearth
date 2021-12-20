<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJourneysTable extends Migration
{
    /**
     * Run the migrations
     *
     * @return void
     */
    public function up()
    {
        Schema::create('journeys',function (Blueprint $table) {
            $table->uuid('journeyid');
            $table->primary('journeyid');
            $table->integer('order')->default(0);
            $table->string('title');
            $table->longText('description');
            $table->string('level');
            $table->string('from')->nullable();
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
        Schema::dropIfExists('journeys');
    }
}
