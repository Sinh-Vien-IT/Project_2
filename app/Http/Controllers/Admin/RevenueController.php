<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Order;
use DB;

class RevenueController extends Controller {

	public function getList(){
		return view('admin/revenue/list');
	}

	public function postList(Request $request){
		$month_start = $request->month_start;
		$year_start = $request->year_start;
		$month_end = $request->month_end;
		$year_end = $request->year_end;
		$start = date('Y-m-d H:i:s',strtotime($year_start.'-'.$month_start));
		$end = date('Y-m-d H:i:s',strtotime($year_end.'-'.$month_end));
		if((strtotime($end)-strtotime($start))>0){
			$data = Order::where('status','Đã Thanh Toán')->where('time_receive','>=',"$start")->where('time_receive','<',"$end")->orderBy('time_receive','DESC')->get();
			$total=0;
			foreach($data as $item)
				$total+=$item->price;
			return view('admin.revenue.show_list',compact('data','total','start','end'));
		} else {
			return redirect()->route('admin.revenue.getList')->with(['flash_level'=>'danger','flash_message'=>'Thời gian kết thúc phải sau thời gian bắt đầu']);
		}
	}

	public function getHot($type){
		if($type!='product'&&$type!='accessory')
			return redirect()->back();
		return view('admin/revenue/hot',compact('type'));
	}

	public function postHot($type,Request $request){
		$month_start = $request->month_start;
		$year_start = $request->year_start;
		$month_end = $request->month_end;
		$year_end = $request->year_end;
		$start = date('Y-m-d H:i:s',strtotime($year_start.'-'.$month_start));
		$end = date('Y-m-d H:i:s',strtotime($year_end.'-'.$month_end));
		if((strtotime($end)>strtotime($start))){
			if($type=='product')
				$data = DB::table('product_of_order')->where('product_of_order.type','product')->join('orders','product_of_order.order_id','=','orders.id')->join('products','product_of_order.product_id','=','products.id')->join('companies','companies.id','=','products.company_id')->where('orders.status','Đã Thanh Toán')->where('orders.time_receive','>',"$start")->where('orders.time_receive','<',"$end")->groupBy('products.id')->select(DB::raw('sum(product_of_order.number) as sum_number,products.product_name,companies.company_name'))->orderBy('sum_number','DESC')->get();
			else
				$data = DB::table('product_of_order')->where('product_of_order.type','accessory')->join('orders','product_of_order.order_id','=','orders.id')->join('accessories','product_of_order.product_id','=','accessories.id')->where('orders.status','Đã Thanh Toán')->where('orders.time_receive','>',"$start")->where('orders.time_receive','<',"$end")->groupBy('accessories.id')->select(DB::raw('sum(product_of_order.number) as sum_number,accessories.name'))->orderBy('sum_number','DESC')->get();
			return view('admin.revenue.show_hot',compact('data','type','start','end'));
		} else {
			return redirect()->back()->with(['flash_level'=>'danger','flash_message'=>'Thời gian kết thúc phải sau thời gian bắt đầu']);
		}
	}
}
