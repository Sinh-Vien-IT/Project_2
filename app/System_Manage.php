<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class System_Manage extends Model {

	protected $table = 'system_manage';
	protected $fillable = ['type','image','content','display','ordinal'];

}