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
           $table->foreign('c_id')->reference('id')->on('categorys');
            $table->foreign('i_id')->reference('id')->on('images');
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
