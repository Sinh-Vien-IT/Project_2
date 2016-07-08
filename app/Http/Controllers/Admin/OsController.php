<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Auth, DB;
use App\Product, App\Os;

class OsController extends Controller {
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
		$data = Os::orderBy('name','ASC')->paginate(5);
		$data->setPath('../../admin/os/list');
		return view('admin/os/list',compact('data'));
	}

	public function getAdd(){
		return view('admin/os/add');
	}

	public function postAdd(Request $request){
		$this->validate($request,[
			'name'=>'required|unique:os,name'
			],[
			'name.required'=>'Vui lòng nhập vào hệ điều hành',
			'name.unique' =>'Hệ điều hàng đã tồn tại'
			]);
		$data = new Os;
		$data->name=$request->name;
		$data->description=$request->description;
		
		$data->save();
		return redirect()->route('admin.os.getAdd')->with(['flash_level'=>'success','flash_message'=>'Thêm hệ điều hành thành công']);
	}

	public function getUpdate($id){
		$data = Os::find($id);
		if(!$data)
			return redirect()->back();
		return view('admin/os/update',compact('data'));
	}

	public function postUpdate(Request $request,$id){
		$this->validate($request,[
			'name'=>'required'
			],[
			'name.required'=>'Vui lòng nhập tên hệ điều hành'
			]);
		$data = Os::find($id);
		$oss = Os::get();
		if($data->name!==$request->name) {
			foreach($oss as $temp) {
				if($temp->id == $id)
					continue;
				if($request->name==$temp->name){
					return redirect()->route('admin.os.getUpdate')->width(['flash_level'=>'danger','flash_message'=>'Tên hệ điều hành đã tồn tại!']);
				}
			}
		}
		$data->name=$request->name;
		$data->description=$request->description;
		$data->save();
		return redirect()->route('admin.os.getList')->with(['flash_level'=>'success','flash_message'=>'Cập nhật hệ điều hành thành công!']);
	}

	public function getDelete($id){
		$data = Os::find($id);
		if(!$data)
			return redirect()->back();
		$product = Product::where('os',$data->name)->first();
		if(isset($product)){
			return redirect()->back()->with(['flash_level'=>'danger','flash_message'=>'Không thể xóa hệ điều hành vì có nhiều sản phẩm của hệ điều hành này']);
		}
		if($data->delete()) {
			return redirect()->route('admin.os.getList')->with(['flash_level'=>'success','flash_message'=>'Đã xóa thành công hệ điều hành!']);
		} else {
			return redirect()->route('admin.os.getList')->with(['flash_level'=>'danger','flash_message'=>'Không thể xóa hệ điều hành']);
		}
		
	}

	public function postDelete(Request $request){
		$oss_id = $request->check;
		$count =0;
		for($i=0; $i<count($oss_id);$i++) {
			$data=Os::find($oss_id[$i]);
			$product = Product::where('os',$data->name)->first();
			if(isset($product))
				continue;
			if($data->delete())
				$count++;
		}
		if($count==0)
			return redirect()->route('admin.os.getList')->with(['flash_level'=>'danger','flash_message'=>'Không xóa hệ điều hành nào!']);
		else
			return redirect()->route('admin.os.getList')->with(['flash_level'=>'success','flash_message'=>'Đã xóa thành công '.$count.' hệ điều hành!']);
	}

}
