<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBackgroundsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('backgrounds', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('skills_prof')->nullable();
            $table->string('tools_prof')->nullable();
            $table->string('languajes')->nullable();;
            $table->text('SE_prof')->nullable();;
            $table->text('traits');
          
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
        Schema::dropIfExists('backgrounds');
    }
}
