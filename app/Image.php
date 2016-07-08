<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model {

	protected $table = 'images';
	protected $fillable = ['name','product_id'];

	public function product(){
		return $this->belongTo('App\Product');
	}
}
