<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDonatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!(Schema::hasTable('donates'))) {
            Schema::create('donates', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('total');
                $table->string('paymant_bill');
                $table->integer('status');
                $table->timestamps();
                $table->integer('user_id')->unsigned();
                $table->foreign('user_id')->references('id')->on('users');
                $table->integer('thread_id')->unsigned();
                $table->foreign('thread_id')->references('id')->on('threads');
                $table->integer('donate_id')->unsigned();
                $table->foreign('donate_id')->references('id')->on('donates');
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
