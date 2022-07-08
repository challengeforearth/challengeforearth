<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApiTokenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ApiToken', function (Blueprint $table) {
            $table->uuid('TokenId');
            $table->primary('TokenId');
            $table->string('Email');
            $table->string('Token');
            $table->string('Scope');
            $table->string('State');
            $table->string('Timestamp');
            $table->string('Expiration');
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
        Schema::dropIfExists('ApiToken');
    }
}
