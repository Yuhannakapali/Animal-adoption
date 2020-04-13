<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->integer('p_id')->unsigned();
            $table->integer('u_id')->unsigned();
            $table->integer('c_id')->unsigned();
            $table->integer('status');
            $table->timestamps();
           
        });

        schema::table('posts',function($table){
            $table->foreign('p_id')->references('id')->on('pets');
            $table->foreign('c_id')->references('id')->on('categorys');
            $table->foreign('u_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
