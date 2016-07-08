<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Import_Product;
use Auth;
use App\Product, App\Accessory;

use App\Http\Requests\AddImportRequest;
use App\Http\Requests\UpdateImportRequest;

class ImportController extends Controller {

	public function __construct(){
		$this->beforeFilter(function(){
            if (!Auth::user())
            	return redirect('auth/login');
            if (Auth::user()->role != 'manager'){
                return redirect()->back();
            }
    });
	}

	public function getList(){
		$data = Import_Product::orderBy('created_at','DESC')->paginate(5);
		$data->setPath('../../admin/import/list');
		return view('admin/import/list',compact('data'));
	}

	public function getAdd($type){
		if($type=='product'){
			$data=Product::orderBy('product_name','ASC')->get();
		}elseif($type=='accessory'){
			$data = Accessory::orderBy('name','ASC')->get();
		}else{
			return redirect()->back();
		}
		return view('admin/import/add',compact('data','type'));
	}

	public function postAdd($type,AddImportRequest $request){
		$data = new Import_Product;
		if($type=='product')
			$product = Product::find($request->product_id);
		else
			$product = Accessory::find($request->product_id);
		$data->code = $request->code;
		$data->product_id = $request->product_id;
		$data->number = $request->number;
		$data->price = $product->price*$request->number;
		$data->suplier = $request->suplier;
		$data->manager_id = Auth::user()->id;
		$data->type=$type;
		$data->save();
		$product->number+=$request->number;
		$product->save();
		return redirect()->route('admin.import.getAdd')->with(['flash_level'=>'success','flash_message'=>'Thêm đơn nhập hàng thành công']);
	}
//Hủy tính năng này
	// public function getUpdate($id) {
	// 	$import=Import_Product::find($id);
	// 	$data= Product::orderBy('product_name','ASC')->get();
	// 	return view('admin/import/update',compact('import','data'));
	// }

//Đã hủy tính năng này
	// public function postUpdate(UpdateImportRequest $request, $id) {
	// 	$data = Import_Product::find($id);
	// 	if(!$data){
	// 		return redirect()->route('admin.import.getList')->with(['flash_level'=>'danger','flash_message'=>'Không tồn tại đơn nhập kho']);
	// 	}
	// 	$last_product= Product::find($data->product_id);
	// 	$new_product= Product::find($request->product_id);

	// 	if($data->product_id!=$request->product_id){
	// 		if($last_product->number<$data->number){
	// 			return redirect()->route('admin.import.getList')->with(['flash_level'=>'danger','flash_message'=>'Không thể cập nhật lại đơn hàng']);
	// 		}
	// 		$last_product->number-=$data->number;
	// 		$last_product->save();
	// 		$new_product->number+=$request->number;
	// 		$new_product->save();
	// 		$data->product_id = $request->product_id;
	// 	} else {
	// 		$last_product->number+=$request->number-$data->number;
	// 		if($last_product->number<0)
	// 			return redirect()->route('admin.import.getList')->with(['flash_level'=>'danger','flash_message'=>'Không thể cập nhật lại đơn hàng']);
	// 		$last_product->save();
	// 	}

	// 	$data->number=$request->number;
	// 	$data->price=$request->number*Product::find($request->product_id)->price;
	// 	$data->suplier=$request->suplier;
	// 	$data->manager_id = Auth::user()->id;
	// 	$data->save();
	// 	return redirect()->route('admin.import.getList')->with(['flash_level'=>'success','flash_message'=>'Cập nhật đơn nhập hàng thành công']);
	// }

//Hủy tính năng này
	// public function getDelete($id) {

	// }
//Hủy tính năng này
	// public function postDelete() {

	// }


}
