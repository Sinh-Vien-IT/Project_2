<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdvertisementsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('advertisements',function(Blueprint $table){
			$table->increments('id');
			$table->string('company_name');
			$table->string('content');
			$table->string('phone_number');
			$table->string('email');
			$table->string('website');
			$table->bigInteger('cost');
			$table->tinyInteger('ordinal');
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
		Schema::drop('advertisements');
	}

}
