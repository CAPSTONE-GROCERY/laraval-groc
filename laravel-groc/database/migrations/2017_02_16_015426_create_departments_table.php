<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDepartmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            Schema::create('departments', function (Blueprint $table) {
                $table->increments('id');
                $table->string('name');
               //not sure: $table->string('supervisor');
                $table->integer('created_by')->nullable();
                $table->integer('modified_by')->nullable();
            });

        // TODO: Foreign keys
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('vendors');
    }
}
