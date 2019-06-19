<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SnsFiles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sns_files', function (Blueprint $table) {
			$table->increments('idx');
			$table->string('physical_name');
			$table->string('virtual_name');
			$table->string('directory')->default('img/');
			$table->integer('state');
			$table->integer('upload_user');
			$table->integer('upload_date');
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
