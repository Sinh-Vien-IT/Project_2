<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Accessory;
use App\Http\Requests\AddAccessoryRequest;
use App\Http\Requests\UpdateAccessoryRequest;
use Auth, File;


class AccessoryController extends Controller {

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
		$accessories = Accessory::orderBy('created_at','DESC')->paginate(5);
		$accessories->setPath('../../admin/accessory/list');
		return view('admin/accessory/list',compact('accessories','edit'));
	}
	public function getAdd(){
		return view('admin/accessory/add');
	}

	public function postAdd(AddAccessoryRequest $request){
		$data = new Accessory;
		$file_name = changeTitle($request->file('image')->getClientOriginalName());
		$data->name = $request->name;
		$data->description = $request->description;
		$data->price = $request->price;
		$data->price_new = $request->price_new;
		$data->number  = 0;
		$data->type = $request->type;
		$data->image = $file_name;
		$data->key_word = changeTitle($request->name);
		$data->save();
		$request->file('image')->move('resources/upload/accessory/'.$data->id.'/',$file_name);
		return redirect()->back()->with(['flash_level'=>'success','flash_message'=>'Thêm phụ kiện thành công']);
	}

	public function getUpdate($id){
		$data = Accessory::find($id);
		if(!$data)
			return redirect()->route('admin.accessory.getList')->with(['flash_level'=>'danger','flash_message'=>'Phụ kiện không tồn tại']);
		return view('admin/accessory/update',compact('data','data'));
	}

	public function postUpdate($id,UpdateAccessoryRequest $request){
		$data = Accessory::find($id);
		$data->name = $request->name;
		$accessories = Accessory::get();
		foreach($accessories as $item){
			if($item->name==$request->name&&$item->id!=$id){
				return redirect()->back()->with(['flash_level'=>'danger','flash_message'=>'Tên phụ kiện đã tồn tại']); 
			}
		}
		if($data->price_new > $request->price_new)
			$data->price_new = $request->price_new;
		$data->description = $request->description;
		$data->type = $request->type;
		$data->save();
		if($request->file('image')){
			$file_name=changeTitle($request->file('image')->getClientOriginalName());
			File::delete('resources/upload/accessory/'.$data->id.'/'.$data->image);
			$data->image=$file_name;
			$request->file('image')->move('resources/upload/accessory/'.$data->id.'/',$file_name);
			$data->save();
		}
		return redirect()->route('admin.accessory.getList')->with(['flash_level'=>'success','flash_message'=>'Cập nhật phụ kiện thành công']);
	}

	public function getDelete($id){
		$data = Accessory::find($id);
		if(!$data){
			return redirect()->route('admin.accessory.getList')->with(['flash_level'=>'danger','flash_message'=>'Phụ kiện không tồn tại']);
		}

		if($data->delete()){
			File::delete('resources/upload/accessory/'.$data->id.'/'.$data->image);
			rmdir('resources/upload/accessory/'.$data->id);
		}
		return redirect()->route('admin.accessory.getList')->with(['flash_level'=>'success','flash_message'=>'Xóa thành công']);
	}

	public function postDelete(Request $request){
		$checks = $request->check;
		if(count($checks)==0) {
			return redirect()->route('admin.accessory.getList')->with(['flash_level'=>'danger','flash_message'=>'Không xóa phụ kiện nào']);
		}
		foreach($checks as $check) {
			$data = Accessory::find($check);			
			File::delete('resources/upload/accessory/'.$data->id.'/'.$data->image);
			rmdir('resources/upload/accessory/'.$data->id);
			$data->delete();
		}
		return redirect()->route('admin.accessory.getList')->with(['flash_level'=>'success','flash_message'=>'Xóa thành công']);
	}

	public function getContent($id){
		$data=Accessory::find($id);
		return view('admin/accessory/content',compact('data'));
	}
}
