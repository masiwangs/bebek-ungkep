<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShipmentPricingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shipment_pricings', function (Blueprint $table) {
            $table->id();
            $table->string('service');
            $table->string('type')->nullable();
            $table->string('origin');
            $table->string('destination');
            $table->string('initial_price');
            $table->string('additional_per_kg_price')->default(0);
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
        Schema::dropIfExists('shipment_pricings');
    }
}
