<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateThreadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!(Schema::hasTable('threads'))){
            Schema::create('threads', function(Blueprint $table){
                $table->increments('id');
                $table->string('title');
                $table->string('school_name');
                $table->string('address');
                $table->string('phone');
                $table->string('description');
                $table->string('photo');
                $table->date('date');
                $table->timestamps();
                $table->integer('user_id')->unsigned();
                $table->foreign('user_id')->references('id')->on('users');
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
