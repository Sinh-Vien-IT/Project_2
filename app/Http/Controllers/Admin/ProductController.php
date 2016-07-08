<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Company;
use App\Http\Requests\AddProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Product, App\Os;
use App\Image,File;
use DateTime;
use DB, Auth;

class ProductController extends Controller {

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
		$edit = true;
		$products = Product::paginate(5);
		$products->setPath('../../admin/product/list');
		return view('admin/product/list',compact('products','edit'));
	}
	public function getAdd(){
		$data=Company::get();
		$os = Os::get();
		return view('admin/product/add',compact('data','os'));
	}

	public function postAdd(AddProductRequest $request){
		$data = new Product;
		
		$data->company_id= $request->company_id;
		$data->product_name = $request->product_name;
		$data->key_word = changeTitle($request->product_name);
		$data->color=$request->color;
		$data->monitor_size=$request->monitor.'inch';
		$data->ram= $request->ram.'GB';
		$data->rom= $request->rom.'GB';
		$data->chip= $request->chip;
		$data->os= $request->os;
		$data->camera= $request->camera;
		$data->weight= $request->weight;
		$data->battery=	$request->pin.'mAh';
		$data->price= $request->price;
		$data->price_new = $request->price;
		$data->description= $request->description;
		$data->number=0;
		$data->save();
		$file_name=changeTitle($request->file('image')->getClientOriginalName());
		$data->image=$file_name;
		$request->file('image')->move('resources/upload/product/'.$data->id.'/',$file_name);
		$data->save();
		if($request->file('img_detail')){
			$img = $request->file('img_detail');
			foreach($img as $item) {
				if(!$item||($item&&$item->getMimeType()!="image/jpeg"&&$item->getMimeType()!="image/png"&&$item->getMimeType()!="image/bmp"&& $item->getMimeType()!="image/gifsvg"))
					continue;
				$image = new Image;
				$image->name=changeTitle($item->getClientOriginalName());
				$image->product_id=$data->id;
				$image->save();
				$item->move('resources/upload/product/'.$data->id.'/detail/',$image->name);
			}
		}
		return redirect()->back()->with(['flash_level'=>'success','flash_message'=>'Thêm sản phẩm thành công']);
	}

	public function getUpdate($id){
		$data=Company::get();
		$product = Product::find($id);
		$os = Os::get();
		if(!$product)
			return redirect()->route('admin.product.getList')->with(['flash_level'=>'danger','flash_message'=>'Sản phẩm không tồn tại']);
		return view('admin/product/update',compact('data','product','os'));
	}

	public function postUpdate($id,UpdateProductRequest $request){
		$data = Product::find($id);
		if(!$data)
			return redirect()->route('admin.product.getList')->with(['flash_level'=>'danger','flash_message'=>'Sản phẩm không tồn tại']);
		$data->company_id= $request->company_id;
		$data->product_name = $request->product_name;
		$products = Product::get();
		foreach($products as $product){
			if($product->product_name==$request->product_name&&$product->id!=$id){
				return redirect()->back()->with(['flash_level'=>'danger','flash_message'=>'Tên sản phẩm đã tồn tại']); 
			}
		}
		$data->key_word = changeTitle($request->product_name);
		$data->color=$request->color;
		$data->monitor_size=$request->monitor.'inch';
		$data->ram= $request->ram.'GB';
		$data->rom= $request->rom.'GB';
		$data->chip= $request->chip;
		$data->os= $request->os;
		$data->camera= $request->camera;
		$data->weight= $request->weight;
		$data->battery=	$request->pin.'mAh';
		if($data->price_new > $request->price_new)
			$data->price_new= $request->price_new;
		$data->description= $request->description;
		$data->save();
		if($request->file('image')){
			$file_name=changeTitle($request->file('image')->getClientOriginalName());
			File::delete('resources/upload/product/'.$data->id.'/'.$data->image);
			$data->image=$file_name;
			$request->file('image')->move('resources/upload/product/'.$data->id.'/',$file_name);
			$data->save();
		}
		
		if($request->file('img_detail')){
			$img = $request->file('img_detail');
			foreach($img as $item) {

				if(!$item||($item && $item->getMimeType()!="image/jpeg"&&$item->getMimeType()!="image/png"&&$item->getMimeType()!="image/bmp"&& $item->getMimeType()!="image/gifsvg"))
					continue;
				$image = new Image;
				$image->name=changeTitle($item->getClientOriginalName());
				if(count(Image::where('name',$image->name)->get())>0)
					Image::where('name',$image->name)->get()->delete();
				$image->product_id=$data->id;
				$image->save();
				$item->move('resources/upload/product/'.$data->id.'/detail/',$image->name);
			}
		}
		return redirect()->route('admin.product.getList')->with(['flash_level'=>'success','flash_message'=>'Cập nhật sản phẩm thành công']);
	}

	public function getDelete($id){
		$data = Product::find($id);
		if(!$data){
			return redirect()->route('admin.product.getList')->with(['flash_level'=>'danger','flash_message'=>'Sản phẩm không tồn tại']);
		}
		$images=Product::find($id)->pimage;
		if(count($images)>0){
			foreach($images as $image){
				File::delete('resources/upload/product/'.$data->id.'/detail/'.$image->name);
			}
			rmdir('resources/upload/product/'.$data->id.'/detail');
		}
		

		if($data->delete()){
			File::delete('resources/upload/product/'.$data->id.'/'.$data->image);
			rmdir('resources/upload/product/'.$data->id);
		}
		return redirect()->route('admin.product.getList')->with(['flash_level'=>'success','flash_message'=>'Xóa thành công']);
	}

	public function postDelete(Request $request){
		$checks = $request->check;
		if(count($checks)==0) {
			return redirect()->route('admin.product.getList')->with(['flash_level'=>'danger','flash_message'=>'Không xóa sản phẩm nào']);
		}
		foreach($checks as $check) {
			$data = Product::find($check);
			$images=Product::find($check)->pimage;
			if(count($images)>0){
				foreach($images as $image){
					File::delete('resources/upload/product/'.$data->id.'/detail/'.$image->name);
				}
				rmdir('resources/upload/product/'.$data->id.'/detail');
			}
			
			File::delete('resources/upload/product/'.$data->id.'/'.$data->image);
			rmdir('resources/upload/product/'.$data->id);
			$data->delete();
		}
		return redirect()->route('admin.product.getList')->with(['flash_level'=>'success','flash_message'=>'Xóa thành công']);
	}
	public function getContent($id){
		$data = Product::find($id);
		return view('admin/product/content', compact('data'));
	}

	//Biểu diễn các điện thoại mới bằng cách lấy hiệu thời gian hiện tại và thời gian thêm sản phẩm vào nếu nhỏ hơn 2592000 (1 tháng) thì hiển thị ra
	public function getNew(){
		$data = Product::orderBy('created_at','DESC')->get();
		$id_lon=-1;
		$date1=date('Y-m-d H:i:s');
		if(count($data)>0){
			foreach($data as $item){
				$date2=$item->created_at;
				if(abs(strtotime($date2)-strtotime($date1))>2592000){
					$id_lon = $item->id;
				}
			}
		}
		$edit = false;
		$products = Product::where('id','>',$id_lon)->orderBy('created_at','DESC')->paginate(5);
		$products->setPath('../../admin/product/list');
		return view('admin/product/list',compact('products','edit'));
	}

	public function delImage($id,Request $request){
		if($request->ajax()){
			$imageDetail = Image::find($id);
			if(!empty($imageDetail->name)){
				$img = 'resources/upload/product/'.$imageDetail->product_id.'/detail/'.$imageDetail->name;
				if(File::exists($img))
					File::delete($img);
				$imageDetail->delete();
				return 'OK';
			} else {
				return 'not';
			}
		}
	}
}
