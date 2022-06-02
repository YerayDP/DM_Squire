<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemPJsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items_PJ', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('items_id');
            $table->foreign('items_id')->references('id')->on('items')->onUpdate("cascade");
            $table->unsignedBigInteger('PJ_id');
            $table->foreign('PJ_id')->references('id')->on('PJ')->onUpdate("cascade");
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
        Schema::dropIfExists('items_PJ');
    }
}
