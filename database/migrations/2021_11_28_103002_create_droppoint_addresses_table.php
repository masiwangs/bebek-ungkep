<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDroppointAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('droppoint_addresses', function (Blueprint $table) {
            $table->id();
            $table->integer('drop_point_id');
            $table->string('road');
            $table->string('village');
            $table->string('subdistrict');
            $table->string('city');
            $table->string('province');
            $table->string('postalcode');
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
        Schema::dropIfExists('droppoint_addresses');
    }
}
