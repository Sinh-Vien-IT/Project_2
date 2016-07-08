<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model {

	protected $table= 'orders';

	protected $fillable=['id','custormer_name','custormer_address','phone_number','email','price','payment','status','place_recieve','time_delivery','time_receive','description_order'];

}
