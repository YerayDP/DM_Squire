<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSpellsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spells', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('school');
            $table->string('level');
            $table->string('casting_time');
            $table->string('range');
            $table->string('components');
            $table->string('duration');
            $table->text('description');
            $table->string('spellDMG');
            $table->string('spellAHL');
            $table->string('spellList');
            $table->softDeletes();
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
        Schema::dropIfExists('spells');
    }
}
