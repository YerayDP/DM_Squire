<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePJsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('PJ', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->integer('level')->default('1');
            $table->string('alignment');
            $table->boolean('inspiration')->default('0');
            $table->integer('STR')->default('0');
            $table->integer('DEX')->default('0');
            $table->integer('CON')->default('0');
            $table->integer('INTE')->default('0');
            $table->integer('WIS')->default('0');
            $table->integer('CHARI')->default('0');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onUpdate("cascade");
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('categories')->onUpdate("cascade");
            $table->unsignedBigInteger('race_id');
            $table->foreign('race_id')->references('id')->on('races')->onUpdate("cascade");
            $table->unsignedBigInteger('background_id');
            $table->foreign('background_id')->references('id')->on('backgrounds')->onUpdate("cascade");
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
        Schema::dropIfExists('PJ');
    }
}
