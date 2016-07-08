<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Order, App\Product, App\Product_Of_Order;
use DB, Auth;

class OrderController extends Controller {

	public function __construct(){
		$this->beforeFilter(function(){
            if (!Auth::user())
            	return redirect('auth/login');
            if (Auth::user()->role != 'manager'){
                return redirect()->back();
            }
    });
	}

	//Hiển thị danh sách các đơn hàng
	public function getList(){
		$orders = Order::orderBy('created_at','DESC')->paginate(5);
		$orders->setPath('../../admin/order/list');
		return view('admin/order/list',compact('orders'));
	}

	//Hiển thị chi tiết thông tin khách hàng
	public function getInforCustormer($id){
		$data = Order::find($id);
		return view('admin/order/inforcustormer',compact('data'));
	}

	//Cập nhật trạng thái đơn hàng và thời gian giao hàng
	//Chú ý: Chỉ được cập nhật đơn hàng có trạng thái chưa thanh toán
	//Khi cập nhật đơn hàng thành hủy đơn hàng thì phải trả lại số lượng sản phẩm vào từng sản phẩm
	public function getUpdate($id){
		$data = Order::find($id);
		if(!$data)
			return redirect()->back();
		if($data->status=='Hủy Đơn Hàng'){
			return redirect()->route('admin.order.getList')->with(['flash_level'=>'danger','flash_message'=>'Không thể cập nhật đơn hàng đã hủy']);
		}
		if($data->status=='Đã Thanh Toán'){
			return redirect()->route('admin.order.getList')->with(['flash_level'=>'danger','flash_message'=>'Không thể cập nhật đơn hàng đã thanh toán']);
		}
		return view('admin/order/update',compact('data'));
	}

	public function postUpdate(Request $request,$id){
		$data=Order::find($id);

		//Nếu chuyển trạng thái thành hủy đơn hàng thì trả lại sản phẩm vào kho 
		if($request->status=='Hủy Đơn Hàng'){
			$product_of_orders = Product_Of_Order::where('order_id',$id)->get();
			foreach($product_of_orders as $item){
				if($item->type=='product'){
					$product = Product::find($item->product_id);
					$product->number+=$item->number;
					$product->save();
				}else{
					$accessory = Accessory::find($item->product_id);
					$accessory->number+=$item->number;
					$accessory->save();
				}
			}
		} 
		if($data->status==$request->status) {
			return redirect()->route('admin.order.getList')->with(['flash_level'=>'danger','flash_message'=>'Không có sự thay đổi trạng thái đơn hàng.']);
		}
		$data->time_receive=date('Y-m-d H:i:s');
		$data->status = $request->status;
		$data->save();
		return redirect()->route('admin.order.getList')->with(['flash_level'=>'success','flash_message'=>'Cập nhật thành công trạng thái đơn hàng và thời gian nhận hàng.']);
	}

}
