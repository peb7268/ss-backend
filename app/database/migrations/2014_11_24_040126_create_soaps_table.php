<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSoapsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('soap', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('name');
            $table->string('tagline');
            $table->string('collection');
            $table->string('description');
            $table->string('image');
            $table->string('thumbnail');
            $table->float('price');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('soap');
	}

}
