<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Advertisement extends Model {

	protected $table = 'advertisements';
	protected $fillable = ['company_name','content','phone_number','email','website','cost','ordinal'];

}