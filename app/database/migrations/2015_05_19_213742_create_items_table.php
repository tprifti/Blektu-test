<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->text('description');
            $table->decimal('price');
            $table->string('brand');


            $table->integer('condition_ID')->unsigned();
            $table->integer('category_ID')->unsigned();
            $table->integer('color_ID')->unsigned();
            $table->integer('size_ID')->unsigned();
            $table->integer('user_ID')->unsigned();

            $table->foreign('condition_ID')->references('id')->on('conditions')->onDelete('cascade');
            $table->foreign('category_ID')->references('id')->on('categories')->onDelete('cascade');
            $table->foreign('color_ID')->references('id')->on('colors')->onDelete('cascade');
            $table->foreign('user_ID')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('size_ID')->references('id')->on('sizes')->onDelete('cascade');

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
        Schema::drop('items');
    }

}
