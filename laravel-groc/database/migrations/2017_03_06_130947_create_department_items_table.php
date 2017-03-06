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
            $table->increments('department_items_id');
            $table->integer('department_id')->unsigned()->index();
            $table->integer('item_id')->unsigned()->index();

            $table->foreign('department_id')->references('department_id')->on('departments')->onDelete('cascade');
            $table->foreign('item_id')->references('item_id')->on('items')->onDelete('cascade');
        });
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
