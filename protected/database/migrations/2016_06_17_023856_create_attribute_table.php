<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAttributeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attribute', function (Blueprint $table) {
            $table->increments('attribute_id');
            $table->integer('category_id')->default('0');
            $table->integer('attribute_group_id')->default('0');
            $table->string('attribute_key', 40);
            $table->string('attribute_name', 40);
            $table->text('attribute_value');
            $table->tinyInteger('published')->default('0');
            $table->tinyInteger('delete_flg')->default('0');
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
        Schema::drop('attribute');
    }
}
