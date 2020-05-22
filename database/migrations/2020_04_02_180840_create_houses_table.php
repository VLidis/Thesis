<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHousesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
        Schema::create('houses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('description')->nullable();
            $table->float('longitude',10,6)->nullable();
            $table->float('latitude',10,6)->nullable();
            $table->integer('bedrooms')->nullable();
            $table->integer('size')->nullable();
            $table->integer('floor')->nullable();
            $table->integer('heat')->nullable();
            $table->integer('year')->nullable();
            $table->boolean('newBuild')->nullable();
            $table->double('price',16,3)->nullable();
            $table->boolean('singleFloor')->nullable();
            $table->boolean('hasElevator')->nullable();
            $table->timestamps();

            $table->integer('busD')->nullable();
            $table->integer('cityCenterD')->nullable();
            $table->integer('gymD')->nullable();
            $table->integer('metroD')->nullable();
            $table->integer('parkD')->nullable();
            $table->integer('pharmacyD')->nullable();
            $table->integer('schoolD')->nullable();
            $table->integer('supermarketD')->nullable();


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('houses');
    }
}
