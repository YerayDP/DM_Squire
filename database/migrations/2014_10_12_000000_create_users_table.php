<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('firstname');
            $table->string('secondname');
            $table->string('email')->unique();
            $table->string('phone')->unique();
            $table->string('location');
            $table->string('password');
            $table->timestamp('email_verified_at')->nullable();
            $table->tinyInteger('email_confirmed')->default(0);
            $table->string('code')->nullable(); // confirmation_code
            $table->tinyInteger('actived')->default(0);
            $table->string('type')->default('u');
            $table->tinyInteger('deleted')->default(0);
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
