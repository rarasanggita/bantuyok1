<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!(Schema::hasTable('sub_comments'))){
            Schema::create('sub_comments', function(Blueprint $table){
                $table->increments('id');
                $table->string('sub_comment');
                $table->date('date');
                $table->timestamps();
                $table->integer('user_id')->unsigned();
                $table->foreign('user_id')->references('id')->on('users');
                $table->integer('comment_id')->unsigned();
                $table->foreign('comment_id')->references('id')->on('comments');});
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
