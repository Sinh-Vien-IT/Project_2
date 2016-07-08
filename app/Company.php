<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model {

	protected $table = 'companies';
	protected $fillable = ['company_name','logo','contry'];

	public function product(){
		return $this->hasMany('App\Product');
	}
}
