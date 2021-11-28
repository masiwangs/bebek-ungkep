<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBasketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('baskets', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->boolean('is_checked_out')->default(0);
            $table->boolean('is_paid')->default(0);
            $table->boolean('is_sent')->default(0);
            $table->boolean('is_done')->default(0);
            $table->timestamp('checked_out_at')->nullable();
            $table->timestamp('paid_at')->nullable();
            $table->timestamp('sent_at')->nullable();
            $table->timestamp('done_at')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('baskets');
    }
}
