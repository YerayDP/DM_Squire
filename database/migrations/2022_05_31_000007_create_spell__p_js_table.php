<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSpellPJsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spells_PJ', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('spells_id');
            $table->foreign('spells_id')->references('id')->on('spells')->onUpdate("cascade");
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
        Schema::dropIfExists('spells_PJ');
    }
}
