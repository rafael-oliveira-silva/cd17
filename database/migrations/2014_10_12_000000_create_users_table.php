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
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('whatsapp');
            $table->string('nickname');
            $table->integer('level');
            $table->string('beasts');
            $table->string('giant');
            $table->string('dragon');
            $table->string('necro');
            $table->string('iron');
            $table->string('crypt');
            $table->integer('toan');
            $table->integer('toah');
            $table->string('arena');
            $table->string('rta');
            $table->string('special_league');
            $table->TinyInteger('admin')->default('0');
            $table->string('password');
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
