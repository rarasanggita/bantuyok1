<?php

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
        if(!(Schema::hasTable('users'))){
            Schema::create('users', function(Blueprint $table){
                $table->increments('id');
                $table->string('name');
                $table->string('email');
                $table->string('username')->unique();
                $table->string('address');
                $table->string('phone');
                $table->string('photo');
                $table->string('password');
                $table->integer('role_id')->unsigned();
                $table->foreign('role_id')->references('id')->on('roles');
                $table->rememberToken();
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
