<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id(); //Int unsigned increment
            $table->string('name'); //varchar 255 caracteres ('name',200) Text +255 caracteres
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable(); //fechas verificacion emails
            $table->string('password');
            $table->rememberToken();
            $table->timestamps(); //created at updated at
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
