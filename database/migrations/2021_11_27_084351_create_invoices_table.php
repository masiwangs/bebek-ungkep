<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->integer('basket_id');
            $table->string('shipment_postalcode');
            $table->string('shipment_province');
            $table->string('shipment_city');
            $table->string('shipment_subdistrict');
            $table->string('shipment_village');
            $table->string('shipment_road');
            $table->integer('product_bill');
            $table->integer('shipment_bill');
            $table->integer('discount')->nullable();
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
        Schema::dropIfExists('invoices');
    }
}
