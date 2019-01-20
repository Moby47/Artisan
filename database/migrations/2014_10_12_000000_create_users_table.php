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
            $table->increments('id');
            $table->string('fname',30)->nullable();
            $table->string('lname',30)->nullable();
            $table->string('email',191)->unique();
            $table->string('phone',15)->nullable();
            $table->string('image',150)->nullable();
            $table->integer('sex')->nullable();
            $table->integer('age')->nullable();
            $table->integer('views')->default(0);
            $table->string('password');
            $table->string('hrs',30)->nullable();
            $table->string('service',30)->nullable();
            $table->rememberToken();
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
