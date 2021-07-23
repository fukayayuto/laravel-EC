<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemConditionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_conditions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('seller_id');
            $table->unsignedBigInteger('buyer_id');
            $table->unsignedBigInteger('secondary_category_id');
            $table->unsignedBigInteger('item_condition_id');

            // ここにカラムを追加していく

            $table->timestamps();

            $table->foreign('seller_id')->references('id')->on('users');
            $table->foreign('buyer_id')->references('id')->on('users');
            $table->foreign('secondary_category_id')->references('id')->on('secondary_categories');
            $table->foreign('item_condition_id')->references('id')->on('item_conditions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('item_conditions');
    }
}
