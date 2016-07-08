<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Import_Product extends Model {

	protected $table = "import_products";
	protected $fillable = ['id','code','product_id','number','price','suplier','manager_id','type'];
}
