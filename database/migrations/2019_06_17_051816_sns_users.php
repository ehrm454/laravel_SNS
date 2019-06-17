<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SnsUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('sns_users', function (Blueprint $table) {
          $table->increments('idx');
          $table->string('login_id');
          $table->string('login_pw');
          $table->string('nick_name');
          $table->integer('state')->default(1);
          $table->integer('level')->default(1);
          $table->integer('exp')->default(1);
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('sns_users');
    }
}
