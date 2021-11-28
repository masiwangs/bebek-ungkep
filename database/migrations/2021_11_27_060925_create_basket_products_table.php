<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBasketProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('basket_products', function (Blueprint $table) {
            $table->id();
            $table->integer('basket_id');
            $table->string('product_image');
            $table->string('product_name');
            $table->string('product_description');
            $table->string('product_price');
            $table->string('product_qty');
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
        Schema::dropIfExists('basket_products');
    }
}
