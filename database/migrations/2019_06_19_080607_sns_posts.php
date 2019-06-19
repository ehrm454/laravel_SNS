<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SnsPosts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		 Schema::create('sns_posts', function (Blueprint $table) {
			$table->increments('idx');
			$table->integer('user_cd');
			$table->string('title');
			$table->string('content');
			$table->integer('post_date');
			$table->integer('delete_date')->nullable();
			$table->integer('state')->default(1);
			$table->integer('image_cd')->nullable();
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
