<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTypeServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('type_services', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('football_place_id');
            $table->timestamps();
//          foreign key
            $table->foreign('football_place_id')->references('id')->on('football_places');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('type_services');
    }
}
