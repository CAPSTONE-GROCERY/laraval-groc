<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('quantity');
            $table->double('price');
            $table->boolean('isAvailable');
            $table->string('description');
            $table->integer('department_id')->unsigned()->index();

            $table->foreign('department_id') -> references('id')->on('department_items');


        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('products');
    }
}
