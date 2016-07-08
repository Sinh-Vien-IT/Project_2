<?php namespace App\Http\Controllers;
use App\User, App\Company, DB, Mail;
use App\Http\Requests;
use App\Http\Requests\AddOrderRequest;
use Illuminate\Http\Request;
use Auth, Input, App\Cart, Response, Session, StdClass;
use App\Product, App\Accessory,App\Order, App\News, App\Product_Of_Order;

class WelcomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	
	// Tạo một hàm khởi tạo để chỉ cho phép khách hoặc thành viên không là admin hay manager vào
	public function __construct(){
        $this->beforeFilter(function(){
            if (Auth::user())
	            if (Auth::user()->role != 'member'){
    	            return redirect()->back();
            }
        });       
    }
	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index(){
		return view('users/index');
	}
	// Xử lý việc khách hàng gửi mail góp ý
	function getContact(){
		return view('users/contact');
	}
	function postContact(Request $request){
		$this->validate($request,
			[
				'fullname' =>'required',
				'email'    =>'required|email',
				'mess'     =>'required'
			],
			[
				'email.required'    =>'Vui lòng nhâp email',
				'email.email'       =>'Email phải là chuẩn email',
				'fullname.required' =>'Vui lòng nhập họ tên',
				'mess.required'     =>'Vui lòng nhập vào nội dung'
			]
		);
		$data=[
			'hoten' => $request->fullname,
			'email' => $request->email,
			'mess'  => $request->mess
		];
		Mail::send('emails.reply',$data,function($msg){
			$msg->from('tungnt.tvg95.hust@gmail.com',Input::get('fullname'));
			$msg->to('tungnt.tvg95.hust@gmail.com')->subject('DienThoai321.Com Phản hồi của khách hàng');
		});
		echo "<script>
			alert('Cảm ơn bạn đã góp ý, chúng tôi sẽ phản hồi trong thời gian sớm nhất');
			window.location='";
		echo url('/');
		echo "';
		</script>";
	}
	//Hiển thị thông tin của sản phẩm
	function product($key){
		$data = Product::where('key_word',$key)->first();
		if(!$data)
			return redirect()->back();
		return view('users/product',compact('data'));
	}
	//Hiển thị thông tin của phụ kiện
	function accessory($type,$key){
		if($type=='the-nho')
			$type='Thẻ Nhớ';
		elseif($type=='dan-man-hinh')
			$type='Dán Màn Hình';
		elseif($type=='bao-da')
			$type='Bao Da';
		elseif($type=='tai-nghe')
			$type='Tai Nghe';
		elseif($type=='loa')
			$type='Loa';
		$data = Accessory::where('type',$type)->where('key_word',$key)->first();
		if(!$data)
			return redirect()->back();
		return view('users/accessory',compact('data'));
	}
	//Các hàm cho chức năng giỏ hàng và thanh toán
	//
	//Sử dụng thư viện có sẵn
	//
	// //Hàm xử lý việc nhấn vào mua hàng
	// function buy_product($id){
	// 	$data=Product::find($id);
	// 	if(!$data)
	// 		return redirect()->back();
	// 	if($data->number<=0)
	// 		return redirect()->back()->with('buy_not_success','<script type="text/javascript">alert("XIN LỖI KHÁCH HÀNG, HIỆN TẠI SẢN PHẨM ĐÃ BÁN HẾT. CHÚNG TÔI SẼ NHẬP HÀNG TRONG THỜI GIAN SỚM NHẤT")</script>');
	// 	Cart::add(array('id'=>$id,'name'=>$data->product_name,'qty'=>1,'price'=>$data->price_new,'options'=>array('img'=>$data->image, 'key'=>$data->key_word,'type'=>'product')));
	// 	return redirect()->route('shopping_cart');
	// }
	// function buy_accessory($id){
	// 	$data=Accessory::find($id);
	// 	if(!$data)
	// 		return redirect()->back();
	// 	if($data->number<=0)
	// 		return redirect()->back()->with('buy_not_success','<script type="text/javascript">alert("XIN LỖI KHÁCH HÀNG, HIỆN TẠI SẢN PHẨM ĐÃ BÁN HẾT. CHÚNG TÔI SẼ NHẬP HÀNG TRONG THỜI GIAN SỚM NHẤT")</script>');
	// 	Cart::add(array('id'=>$id,'name'=>$data->name,'qty'=>1,'price'=>$data->price_new,'options'=>array('img'=>$data->image, 'key'=>$data->key_word,'type'=>'accessory')));
	// 	return redirect()->route('shopping_cart');
	// }
	// //Hàm hiển thị giỏ hàng
	// function getList(){
	// 	$data = Cart::content();
	// 	$total = Cart::total();
	// 	return view('users/shoppingcart',compact('data','total'));
	// }
	// //Hàm xử lý việc xóa sản phẩm trong giỏ hàng
	// function delete($id){
	// 	Cart::remove($id);
	// 	return redirect()->route('shopping_cart');
	// }
	// //Hàm xử lý cập nhật giỏ hàng khi có yêu cầu gửi từ ajax
	// function update(Request $request,$id, $qty){
	// 	if($request->ajax()){
	// 		Cart::update($id,$qty);
	// 		return "ok";
	// 	}
	// }
	// //Xử lý việc thanh toán
	// //Chú ý: Khi thêm đơn hàng thanh toán thì phải cập nhật lại số lượng các sản phẩm trong đơn hàng
	// function getCheckout(){
	// 	$data = Cart::content();
	// 	if(count($data)==0){
	// 		return redirect()->route('shopping_cart')->with(['flash_level'=>'danger','flash_message'=>'Bạn chưa chọn sản phẩm nào vào trong giỏ hàng!']);
	// 	}
	// 	$total = Cart::total();
	// 	return view('users/checkout',compact('data','total'));
	// }
	// function postCheckout(AddOrderRequest $request){
	// 	$cart = Cart::content();
	// 	$str = '';

	// 	$order = new Order;
	// 	$order->custormer_name = $request->name;
	// 	$order->custormer_address=$request->address;
	// 	$order->phone_number = $request->phone_number;
	// 	$order->email = $request->email;
		
	// 	foreach($cart as $item){
	// 		$str .='<b>Tên sản phẩm:</b> '.$item->name.'<br/><b>Số lượng:</b> '.$item->qty.'<br/><b>Giá 1 sản phẩm:</b> '.number_format($item->price,0,',','.').' VNĐ<br/><br/>'; 
	// 	}
	// 	$order->description_order =$str;
	// 	$order->price = Cart::total()*(1+vat);
	// 	$order->payment = $request->payment;
	// 	$order->status = 'Chưa Thanh Toán';
	// 	$order->place_receive = $request->place_receive;
	// 	$order->time_delivery = $request->day_receive.' '.$request->time_receive;
	// 	$order->time_receive = 0;
	// 	$order->save();
	// 	foreach($cart as $item){
	// 		//Cập nhật số lượng sản phẩm còn lại trong kho
	// 		if($item->options->type=='product'){
	// 			$data = Product::find($item->id);
	// 			$data->number-=$item->qty;
	// 			$data->save();
	// 		}else{
	// 			$data = Accessory::find($item->id);
	// 			$data->number-=$item->qty;
	// 			$data->save();
	// 		}

	// 		//Thêm vào bảng product_of_order
	// 		$product_of_order = array([
	// 			'order_id'=>$order->id,
	// 			'product_id'=>$item->id,
	// 			'number'=>$item->qty,
	// 			'type'=>$item->options->type,
	// 			'created_at'=>date('Y-m-d H:i:s'),
	// 			'updated_at'=>date('Y-m-d H:i:s')
	// 		]);
	// 		DB::table('product_of_order')->insert($product_of_order);
	// 	}

		
	// 	Cart::destroy();

	// 	//Gửi mail cảm ơn
	// 	$data = [
	// 		'name'=>$request->name,
	// 		'gender'=>$request->gender,
	// 		'description'=>$str
	// 	];
	// 	Mail::send('emails.buy_success',$data,function($msg){
	// 		$msg->from('tungnt.tvg95.hust@gmail.com',Input::get('fullname'));
	// 		$msg->to(Input::get('email'),Input::get('name'))->subject('DienThoai321.Com CẢM ƠN QUÝ KHÁCH ĐÃ MUA HÀNG');
	// 	});
	// 	return redirect()->route('home')->with('buy_success','<script>alert("XIN CẢM ƠN QUÝ KHÁCH ĐÃ MUA HÀNG CỦA CÔNG TY CHÚNG TÔI!")</script>');
	// }
	// 
	// Tự thiết kế 
	// 
	// 
	public function arr_cart(){
		$products = Session::get('cart');
		$total = 0;
		$data = array();
		if(count($products)>0)
		foreach($products as $item){
			$type=$item->getType();
			$pr=new StdClass;
			if($type=='product'){
				$product = Product::find($item->getId());
				$pr->name = $product->product_name;
			}
			else{
				$product = Accessory::find($item->getId());
				$pr->name = $product->name;
			}
			
			$pr->id =$product->id;
			$pr->price = $product->price_new==0?$product->price:$product->price_new;
			$pr->qty = $item->getQty();
			$pr->img = $product->image;
			$pr->key = $product->key_word;
			$pr->type = $item->getType();
			$pr->rowid = $product->id;
			$data[] = $pr;
			$total+=$pr->price*$item->getQty();
		}
		return array($data, $total);
	}
		//Hàm sử lý nhấn mua hàng
	public function buy_product($type,$id){
		if(($type=='product'&&!Product::find($id))||($type=='accessory'&&!Accessory::find($id))){
			return redirect()->back();
		}else{
			if($type=='product'){
				$data = Product::find($id);
			}
			else{
				$data= Accessory::find($id);
			}

			$item = new Cart();
				$cart = [];
				$item->add($id, 1, $type);
				if(!Session::has('cart')||Session::get('cart')==null){
					$cart[] = $item;
					Session::put('cart',$cart);
				}else{
					$cart = Session::get('cart');
					$count=0;
					//Nếu sản phẩm đã cớ trong giỏ hàng thì thêm vào 1
					foreach($cart as $temp){
						if($temp->getId()==$id&&$temp->getType()==$type){
							$temp->setQty($temp->getQty()+1);
							$count++;
						}
					}
					//Nếu không thì thêm mới sản phẩm
					if($count==0){
						$cart[] = $item;
					}
					Session::put('cart',$cart);
				}
			return redirect()->route('shopping_cart');			
		}
	}
	//Hàm hiển thị giỏ hàng
	public function getList(){
		// Session::forget('cart');
		$arr_cart = $this->arr_cart();
		$data = $arr_cart[0];
		$total = $arr_cart[1];
		return view('users/shoppingcart',compact('data','total'));
	}
	//Hàm xử lý việc xóa sản phẩm trong giỏ hàng
	public function delete($type,$id){
		$cart = Session::get('cart');
		$count=0;
		foreach($cart as $item){
			if($item->getId()==$id&&$item->getType()==$type){
				unset($cart[$count]);
			}
			$count++;
		}
		$cart = array_values($cart);
		Session::put('cart',$cart);
		return redirect()->route('shopping_cart');
	}
	//Hàm xử lý cập nhật giỏ hàng khi có yêu cầu gửi từ ajax
	function update(Request $request,$id, $qty, $type){
		if($request->ajax()){
			$cart = Session::get('cart');
			foreach($cart as $item){
				if($item->getId()==$id && $item->getType()==$type){
					$item->setQty($qty);
				}
			}
			Session::put('cart',$cart);
			return "ok";
		}
	}
	//Hàm hủy giỏ hàng
	public function destroyCart(){
		Session::forget('cart');
		return redirect()->route('shopping_cart')->with(['flash_level'=>'success','flash_message'=>'Giỏ hàng đã được hủy!']);;
	}
	//Xử lý việc thanh toán
	public function getCheckout(){
		if(!Session::has('cart')||count(Session::get('cart'))==0){
			return redirect()->route('shopping_cart')->with(['flash_level'=>'danger','flash_message'=>'Bạn chưa chọn sản phẩm nào vào trong giỏ hàng!']);
		}
		$arr_cart = $this->arr_cart();
		$data = $arr_cart[0];
		$total = $arr_cart[1];
		return view('users/checkout',compact('data','total'));
	}
	
	public function postCheckout(AddOrderRequest $request){
		$arr_cart = $this->arr_cart();
		$data = $arr_cart[0];
		$total = $arr_cart[1];
		$str = '';

		$order = new Order;
		$order->custormer_name = $request->name;
		$order->custormer_address=$request->address;
		$order->phone_number = $request->phone_number;
		$order->email = $request->email;
		
		foreach($data as $item){
			$str .='<b>Tên sản phẩm:</b> '.$item->name.'<br/><b>Số lượng:</b> '.$item->qty.'<br/><b>Giá 1 sản phẩm:</b> '.number_format($item->price,0,',','.').' VNĐ<br/><br/>'; 
		}
		$order->description_order =$str;
		$order->price = $total*(1+vat);
		$order->payment = $request->payment;
		$order->status = 'Chưa Thanh Toán';
		$order->place_receive = $request->place_receive;
		$order->time_delivery = $request->day_receive.' '.$request->time_receive;
		$order->time_receive = 0;
		$order->save();
		foreach($data as $item){
			//Cập nhật số lượng sản phẩm còn lại trong kho
			$data = Product::find($item->id);
			if($data) {
				$data->number-=$item->qty;
				$data->save();
			}

			//Thêm vào bảng product_of_order
			$product_of_order = new Product_Of_Order;
			$product_of_order->order_id=$order->id;
			$product_of_order->product_id=$item->id;
			$product_of_order->number=$item->qty;
			$product_of_order->type=$item->type;
			$product_of_order->save();
		}

		
		Session::forget('cart');

		//Gửi mail cảm ơn
		$data = [
			'name'=>$request->name,
			'gender'=>$request->gender,
			'description'=>$str
		];
		Mail::send('emails.buy_success',$data,function($msg){
			$msg->from('tungnt.tvg95.hust@gmail.com','DienThoai321');
			$msg->to(Input::get('email'),Input::get('name'))->subject('DienThoai321.Com CẢM ƠN QUÝ KHÁCH ĐÃ MUA HÀNG');
		});
		return redirect()->route('home')->with('buy_success','<script>alert("XIN CẢM ƠN QUÝ KHÁCH ĐÃ MUA HÀNG CỦA CÔNG TY CHÚNG TÔI!")</script>');
	}


	//Hiện tin tức
	//Tất cả
	function getAllNews(){
		$congnghe= News::where('type','Công Nghệ')->orderBy('created_at','DESC')->skip(0)->take(4)->get();
		$giaitri= News::where('type','Giải Trí')->orderBy('created_at','DESC')->skip(0)->take(4)->get();
		$khuyenmai= News::where('type','Khuyến Mãi')->orderBy('created_at','DESC')->skip(0)->take(4)->get();
		return view('users/news/newsall',compact('congnghe','giaitri','khuyenmai'));
	}
	//Kiểu tin tức
	function getTypeNews($type){
		if($type=='cong-nghe')
			$type='Công Nghệ';
		elseif($type=='giai-tri')
			$type='Giải Trí';
		elseif($type=='khuyen-mai')
			$type='Khuyến Mãi';
		else
			return redirect()->back();
		$data = News::where('type',$type)->orderBy('created_at','DESC')->get();
		return view('users/news/newsoftype',compact('data','type'));
	}
	//Hiện chi tiết
	function getNews($type,$key){
		if($type=='cong-nghe')
			$type='Công Nghệ';
		elseif($type=='giai-tri')
			$type='Giải Trí';
		elseif($type=='khuyen-mai')
			$type='Khuyến Mãi';
		else
			return redirect()->back();
		$data = News::where('type',$type)->where('key_word',$key)->first();
		if(!$data)
			return redirect()->back();
		return view('users/news/content',compact('data'));
	}
	//Hiển thị trang các sản phẩm của hãng 
	function getProductOfCompany($id){
		$company = Company::find($id);
		if(!$company)
			return redirect()->back();
		$company_name= $company->company_name;
		$data = Product::where('company_id',$id)->orderBy('created_at','DESC')->get();
		return view('users/productofcompany',compact('data','company_name'));
	}
	//Hiển thị trang các sản phẩm bán chạy
	function getHot($type){
		if($type=='month') {
			$products_month = DB::table('product_of_order')->join('orders','product_of_order.order_id','=','orders.id')->join('products','product_of_order.product_id','=','products.id')->join('companies','companies.id','=','products.company_id')->where('orders.status','Đã Thanh Toán')->where('product_of_order.type','product')->where('time_receive','>',date('Y-m'))->where('time_receive','<',date('Y-m-d H:i:s'))->groupBy('products.id')->select(DB::raw('sum(product_of_order.number) as sum_number,products.product_name,products.id,products.image,products.company_id,products.key_word,products.price,products.price_new,companies.company_name'))->orderBy('sum_number','DESC')->paginate(15);
			$products_month->setPath('./month');
			return view('users.producthot',compact('products_month','type'));
		} elseif($type=='year'){
			$products_year = DB::table('product_of_order')->join('orders','product_of_order.order_id','=','orders.id')->join('products','product_of_order.product_id','=','products.id')->join('companies','companies.id','=','products.company_id')->where('orders.status','Đã Thanh Toán')->where('product_of_order.type','product')->where('time_receive','>',date('Y'))->where('time_receive','<',date('Y-m-d H:i:s'))->groupBy('products.id')->select(DB::raw('sum(product_of_order.number) as sum_number,products.product_name,products.id,products.image,products.company_id,products.key_word,products.price,products.price_new,companies.company_name'))->orderBy('sum_number','DESC')->paginate(15);
			$products_year->setPath('./year');
			return view('users.producthot',compact('products_year','type'));
		} elseif($type == 'all'){
			$products_all = DB::table('product_of_order')->join('orders','product_of_order.order_id','=','orders.id')->join('products','product_of_order.product_id','=','products.id')->join('companies','companies.id','=','products.company_id')->where('orders.status','Đã Thanh Toán')->where('product_of_order.type','product')->where('time_receive','<',date('Y-m-d H:i:s'))->groupBy('products.id')->select(DB::raw('sum(product_of_order.number) as sum_number,products.product_name,products.id,products.image,products.company_id,products.key_word,products.price,products.price_new,companies.company_name'))->orderBy('sum_number','DESC')->paginate(15);
			$products_all->setPath('./all');
			return view('users.producthot',compact('products_all','type'));
		}else {
			return redirect()->back();
		}
	}
	//Hiển thị trang sản phẩm mới
	function getNew(){
		$products = Product::orderBy('created_at','DESC')->paginate(15);
		$products->setPath('./new');
		return view('users.productnew',compact('products'));
	}
	//Hiển thị trang phụ kiện
	function getAccessory(){
		$thenho = Accessory::where('type','Thẻ Nhớ')->orderBy('created_at','DESC')->skip(0)->take(10)->get();
		$baoda = Accessory::where('type','Bao Da')->orderBy('created_at','DESC')->skip(0)->take(10)->get();
		$danmanhinh = Accessory::where('type','Dán Màn Hình')->orderBy('created_at','DESC')->skip(0)->take(10)->get();
		$loa = Accessory::where('type','Loa')->orderBy('created_at','DESC')->skip(0)->take(10)->get();
		$tainghe = Accessory::where('type','Tai Nghe')->orderBy('created_at','DESC')->skip(0)->take(10)->get();
		return view('users/productaccessory',compact('thenho','baoda','danmanhinh','loa','tainghe'));
	}
	//Hiển thị trang cho từng loại phụ kiền
	function getAllAccessory($type){
		if($type=='the-nho'){
			$accessories=Accessory::where('type','Thẻ Nhớ')->orderBy('created_at','DESC')->paginate(15);
			$accessories->setPath('./'.$type);
			return view('users/productallaccessory',compact('accessories','type'));
		}elseif($type=='bao-da'){
			$accessories=Accessory::where('type','Bao Da')->orderBy('created_at','DESC')->paginate(15);
			$accessories->setPath('./'.$type);
			return view('users/productallaccessory',compact('accessories','type'));
		}elseif($type=='dan-man-hinh'){
			$accessories=Accessory::where('type','Dán Màn Hình')->orderBy('created_at','DESC')->paginate(15);
			$accessories->setPath('./'.$type);
			return view('users/productallaccessory',compact('accessories','type'));
		}elseif($type=='loa'){
			$accessories=Accessory::where('type','Loa')->orderBy('created_at','DESC')->paginate(15);
			$accessories->setPath('./'.$type);
			return view('users/productallaccessory',compact('accessories','type'));
		}elseif($type=='tai-nghe'){
			$accessories=Accessory::where('type','Tai Nghe')->orderBy('created_at','DESC')->paginate(15);
			$accessories->setPath('./'.$type);
			return view('users/productallaccessory',compact('accessories','type'));
		}else{
			return redirect()->back();
		}
	}
	//Gửi từ ajax chức năng tìm kiếm(từ hàm search trong my_script.js)
	function getSearch(){
		$term = Input::get('term');
		$results = array();
		$products = Product::where('product_name', 'LIKE', '%'.$term.'%')
			->orderBy('created_at','DESC')
			->skip(0)->take(5)
			->get();
		$accessories = Accessory::where('name','LIKE','%'.$term.'%')
			->orderBy('created_at','DESC')
			->skip(0)->take(5)
			->get();
		if((count($products)+count($accessories))==0)
			$results[] = ['id'=>0,'value' => 'Không tìm thấy sản phẩm nào!!'];
		else {
			$count=0;
			foreach ($products as $query){
				$count++;
			    $results[] = [ 'id' => $count, 'value' => $query->product_name ];
			}
			foreach($accessories as $query){
				$count++;
				$results[] = [ 'id' => $count, 'value' => $query->name ];
			}
		}
		return Response::json($results);
	}
	//Lấy dữ liệu gửi lên từ form search và hiển thị ra thông tin sản phẩm tương ứng
	function postResult(Request $request){
		$key = $request->search;
		$products = Product::where('product_name','like','%'.$request->search.'%')->orderBy('created_at','DESC')->get();
		$accessories = Accessory::where('name','like','%'.$request->search.'%')->orderBy('created_at','DESC')->get();
		return view('users/resultsearch',compact('products','accessories','key'));
	}
	//Hàm sử lý khi chọn luôn 1 trong các kết quả gợi ý
	function getResult($key){
		$product= Product::where('product_name',$key)->first();
		if(empty($product)){
			$accessory = Accessory::where('name',$key)->first();
			if(empty($accessory))
				return redirect()->back();
			$type = changeTitle($accessory->type);
			$key_word=$accessory->key_word;
			return redirect()->away('../accessory/'.$type.'/'.$key_word);
		}
		return redirect()->away('../products/'.$product->key_word);
	}
	//Hiển thị trang sản phẩm khuyến mãi
	function getPromotion(){
		$products = Product::orderBy('created_at','DESC')->get();
		return view('users.promotion', compact('products'));
	}
}
