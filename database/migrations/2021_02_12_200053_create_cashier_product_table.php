<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCashierProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cashier_product', function (Blueprint $table) {
            $table->integer('amount')->defaultValue(0);
            $table->foreignId('cashier_id')->references('id')->on('cashiers')->constrainted();
            $table->foreignId('supermarket_food_id')->references('id')->on('supermarket_food')->constrainted();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cashier_product');
    }
}
