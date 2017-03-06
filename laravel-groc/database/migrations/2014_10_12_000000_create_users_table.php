<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('user_id');
            $table->string('FirstName');
            $table->string('LastName');
            $table->string('email')->unique();
            $table->string('password',24);
            $table->boolean('isActive');
            $table->integer('demerates');
            $table->string('PhoneNumber'); // pattern match later
            $table->integer('created_by')->nullable();
            $table->integer('modified_by')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
