<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHoldingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('holdings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->double('money');
            $table->integer('maxStockType');
            $table->integer('analysisDataAmount');
            $table->string('timePeriod');
            $table->integer('exchangePeriod');
            $table->integer('currentStockValueIndex');
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
        Schema::dropIfExists('holdings');
    }
}
