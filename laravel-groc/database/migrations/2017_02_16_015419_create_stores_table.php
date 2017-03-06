<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendors', function (Blueprint $table) {
            $table->increments('vendor_id');
            $table->string('name');
            $table->string('address');
            $table->string('PhoneNumber');
            $table->boolean('isActive');
            $table->integer('created_by')->nullable();
            $table->integer('modified_by')->nullable();
        });

        // TODO: foreign keys
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('stores');
    }
}
