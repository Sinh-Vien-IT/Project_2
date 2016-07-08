<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Product_Of_Order extends Model {

	protected $table = 'product_of_order';
	protected $fillable = ['order_id','product_id','number','type'];

}