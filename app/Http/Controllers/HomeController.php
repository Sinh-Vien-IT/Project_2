<?php namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use App\Product, App\Accessory;
use Input, Response;
class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct(){
		// Hàm khởi tạo để không cho khách, member vào trang admin
        $this->beforeFilter(function(){
            if (!Auth::user())
            	return redirect('auth/login');
            if (Auth::user()->role == 'member'){
                return redirect('/');
            }
        });   
    }
	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		return redirect()->route('admin.member.getList');
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
		return view('admin/resultsearch',compact('products','accessories','key'));
	}
	//Hàm sử lý khi chọn luôn 1 trong các kết quả gợi ý
	function getResult($key){
		$product= Product::where('product_name',$key)->first();
		if(empty($product)){
			$accessory = Accessory::where('name',$key)->first();
			if(empty($accessory))
				return redirect()->back();
			$id = $accessory->id;
			return redirect()->away('../accessory/content/'.$id);
		}
		return redirect()->away('../product/content/'.$product->id);
	}
}
