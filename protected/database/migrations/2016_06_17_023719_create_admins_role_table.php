<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminsRoleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins_role', function (Blueprint $table) {
            $table->increments('admins_role_id');
            $table->string('role_name');
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
        Schema::drop('admins_role');
    }
}
