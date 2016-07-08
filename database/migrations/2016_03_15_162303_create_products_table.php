<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('products', function(Blueprint $table)
		{
			$table->increments('id');
			$table->String('product_name')->required();
			$table->String('color');
			$table->String('monitor_size');
			$table->String('ram');
			$table->String('rom');
			$table->String('chip');
			$table->String('os');
			$table->String('camera');
			$table->integer('weight');
			$table->String('battery');
			$table->integer('price');
			$table->String('image');
			$table->text('description');
			$table->integer('number');
			$table->String('key_word');
			$table->integer('company_id')->unsigned();
			$table->foreign('company_id')->references('id')->on('companies')->onDelete('cascade');
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
		Schema::drop('products');
	}

}
