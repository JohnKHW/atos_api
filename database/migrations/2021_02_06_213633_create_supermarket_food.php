<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSupermarketFood extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('supermarket_food', function (Blueprint $table) {
            $table->id();
            $table->foreignId('supermarket_id')->references('id')->on('supermarkets')->onDelete('cascade');
            $table->foreignId('food_id')->references('id')->on('food')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('supermarket_food');
    }
}
