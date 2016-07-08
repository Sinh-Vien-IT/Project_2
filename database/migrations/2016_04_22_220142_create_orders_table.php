<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('orders', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('custormer_name');
			$table->string('custormer_address');
			$table->string('phone_number');
			$table->string('email');
			$table->string('payment');
			$table->bigInteger('price');
			$table->string('status');
			$table->string('place_receive');
			$table->datetime('time_delivery');
			$table->datetime('time_receive');
			$table->text('description_order');
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
		Schema::drop('orders');
	}

}
