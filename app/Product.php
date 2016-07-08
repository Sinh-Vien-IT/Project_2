<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model {

	protected $table = 'products';
	protected $fillable = ['company_id','product_name','color','monitor_size','ram','rom','chip','os','camera','weight','battery','price','image','number','key_word'];

	public function company(){
		return $this->belongTo('App\Company');
	}
	public function pimage(){
		return $this->hasMany('App\Image');
	}
}
