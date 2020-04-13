<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        schema::create('pets',function ( Blueprint  $table){
            $table->id();
            $table->string('name');
            $table->string('location');
            $table->integer('c_id')->unsigned();
            $table->integer('i_id')->unsigned();
            $table->timestamps();
           
        });

        schema::table('pets',function(blueprint $table){
            $table->foreign('c_id')->references('id')->on('categorys');
            $table->foreign('i_id')->references('id')->on('images');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::dropIfExists('pets');
    }
}
