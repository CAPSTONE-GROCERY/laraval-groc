<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDepartmentItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('department_items', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('department_id')->unsigned()->index();
            $table->integer('product_id')->unsigned()->index();

            $table->foreign('department_id')->references('id')->on('departments')->onDelete('cascade');
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('department_items');
    }
}
