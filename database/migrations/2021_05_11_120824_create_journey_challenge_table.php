<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJourneyChallengeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('journey_challenge',function (blueprint $table) {
            $table->uuid('journeychallengeid');
            $table->primary('journeychallengeid');
            $table->uuid('journeyid');
            $table->uuid('challengeid');
            $table->uuid('childchallenge')->nullable();
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
        Schema::dropIfExists('journey_challenge');
    }
}
