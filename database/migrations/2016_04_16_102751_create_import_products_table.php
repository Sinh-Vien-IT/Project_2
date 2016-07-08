<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImportProductsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('import_products', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('code');
			$table->integer('product_id');
			$table->integer('number');
			$table->bigInteger('price');
			$table->string('suplier');
			$table->integer('manager_id');
			$table->string('type');
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
		Schema::drop('import_products');
	}

}
