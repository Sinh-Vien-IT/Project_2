<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatSystemManageTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('system_manage', function(Blueprint $table){
			$table->increments('id');
			$table->String('type');
			$table->String('image');
			$table->String('content');
			$table->tinyInteger('display');
			$table->integer('ordinal');
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
		Schema::drop('system_manage');
	}

}
