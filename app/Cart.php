<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;
use Session;

class Cart extends Model {
	private $id;
	private $qty;
	private $type;
	function __construct(){
		$this->id = 0;
		$this->qty=0;
		$this->type='product';
	}
	public function add($id,$qty=0,$type='product'){
		$this->id=$id;
		$this->qty = $qty;
		$this->type = $type;
	}
	public function getId(){
		return $this->id;
	}
	public function getQty(){
		return $this->qty;
	}
	public function setQty($num){
		$this->qty = $num;
	}
	public function getType(){
		return $this->type;
	}
	public function setType($type){
		$this->type = $type;
	}
}
