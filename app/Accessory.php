<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Accessory extends Model {

	protected $table='accessories';
	protected $fillable = ['name','image','description','key_word','type','price','price_new','number'];

}
