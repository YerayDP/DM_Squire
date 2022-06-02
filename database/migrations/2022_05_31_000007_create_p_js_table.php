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
            $table->integer('level');
            $table->string('alignment');
            $table->boolean('inspiration');
            $table->integer('STR');
            $table->integer('DEX');
            $table->integer('CON');
            $table->integer('INTE');
            $table->integer('WIS');
            $table->integer('CHARI');
            $table->integer('AC');
            $table->string('proficency');
            $table->string('spells_slots')->nullable();
            $table->string('spells_known')->nullable();
            $table->string('spells_ready')->nullable();
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
