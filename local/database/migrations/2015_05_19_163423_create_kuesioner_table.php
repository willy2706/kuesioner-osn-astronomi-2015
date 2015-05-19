<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKuesionerTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::dropIfExists('kuesioner');
		Schema::create('kuesioner', function($table) {
			$table->increments('id');
			$table->string('username');
			$table->text('jawaban1');
			$table->text('jawaban2');
			$table->text('jawaban3');
			$table->text('jawaban4');
			$table->text('jawaban5');
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
		Schema::dropIfExists('kuesioner');
	}

}
