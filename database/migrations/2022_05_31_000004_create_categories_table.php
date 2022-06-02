<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('archetype')->nullable();
            $table->string('hitdice');
            $table->string('armor_prof');
            $table->string('weapon_prof');
            $table->string('tools_prof')->nullable();
            $table->string('ST_prof');
            $table->text('skills_prof');
            $table->text('SE_prof');
            $table->text('traits')->nullable();
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
        Schema::dropIfExists('categories');
    }
}
