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
            $table->increments('id');
            $table->string('email')->unique();
            $table->string('username')->unique();
            $table->string('firstname');
            $table->string('lastname');
            $table->string('password', 60);
            $table->string('address1')->default('Shqiperi Tirane Rruga ***** Pallati **** Aartamenti *** ');
            $table->string('address2')->nullable();
            $table->string('phone')->nullable();
            $table->timestamps();
            $table->rememberToken();
            $table->boolean('all_data')->default(false);
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
