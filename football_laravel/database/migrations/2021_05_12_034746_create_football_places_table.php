<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFootballPlacesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('football_places', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('utilities');
            $table->string('phone');
            $table->string('website');
            $table->string('email');
            $table->boolean('allow_view')->default(false);
            $table->string('min_price');
            $table->string('max_price');
            $table->smallInteger('status')->default(0);
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
        Schema::dropIfExists('football_places');
    }
}
