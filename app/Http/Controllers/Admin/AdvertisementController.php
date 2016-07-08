<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests\AddAdvertisementRequest;
use App\Http\Requests\UpdateAdvertisementRequest;
use Input, File;
use Auth;
use App\Advertisement;

class AdvertisementController extends Controller {
	public function __construct(){
		$this->beforeFilter(function(){
            if (!Auth::user())
            	return redirect('auth/login');
            if (Auth::user()->role != 'admin'){
                return redirect()->back();
            }
        });
	}

	public function getAdd(){
		return view('admin/advertisement/add');
	}

	public function postAdd(AddAdvertisementRequest $request){
		$file_name = changeTitle($request->file('content')->getClientOriginalName());
		$data= new Advertisement;
		$data->company_name=$request->company_name;
		$data->content=$file_name;
		$data->phone_number=$request->phone_number;
		$data->email=$request->email;
		$data->website=$request->website;
		$data->cost=$request->cost;
		$data->ordinal=$request->ordinal;
		// $data = array([
		// 	'company_name'=>$request->company_name,
		// 	'content' => $file_name,
		// 	'phone_number'=>$request->phone_number,
		// 	'email' =>$request->email,
		// 	'website'=>$request->website,
		// 	'cost'=>$request->cost,
		// 	'ordinal'=>$request->ordinal,
		// 	'created_at' => date('Y-m-d H:i:s'),
		// 	'updated_at' => date('Y-m-d H:i:s')
		// ]);
		if($data->save()){
			$data = Advertisement::where('company_name',$request->company_name)->first();
			$request->file('content')->move('resources/upload/commercial/'.$data->id.'/',$file_name);
			return redirect()->route('admin.advertisement.getAdd')->with(['flash_level'=>'success','flash_message'=>'Thêm quảng cáo thành công']);
		}else{
			return redirect()->route('admin.advertisement.getAdd')->with(['flash_level'=>'danger','flash_message'=>'Thêm quảng cáo không thành công']);
		}
	}

	public function getUpdate($id){
		$data = Advertisement::find($id);
		if(!$data)
			return redirect()->back();
		return view('admin/advertisement/update',compact('data'));

	}

	public function postUpdate(UpdateAdvertisementRequest $request, $id){
		$data = Advertisement::find($id);
		if(!$data) {
			return redirect()->route('admin.advertisements.getList')->with(['flash_level'=>'danger','flash_message'=>'Không tồn tại quảng cáo']);
		}

		if($data->company_name!=$request->company_name && Advertisement::where('company_name',$request->company_name)->first()){
			return redirect()->back()->with(['flash_level'=>'danger','flash_message'=>'Công ty đã đặt quảng cáo']);
		}
		if($data->phone_number!=$request->phone_number && Advertisement::where('phone_number',$request->phone_number)->first()){
			return redirect()->back()->with(['flash_level'=>'danger','flash_message'=>'Số điện thoại đã tồn tại']);
		}
		if($data->email!=$request->email && Advertisement::where('email',$request->email)->first()){
			return redirect()->back()->with(['flash_level'=>'danger','flash_message'=>'Email đã tồn tại']);
		}
		if($data->website!=$request->website && Advertisement::where('website',$request->website)->first()){
			return redirect()->back()->with(['flash_level'=>'danger','flash_message'=>'Website đã tồn tại']);
		}
		$file_name = $data->content;
		if(Input::hasFile('content')) {
			$file_name = changeTitle($request->file('content')->getClientOriginalName());
			File::delete('resources/upload/commercial/'.$data->id.'/'.$data->content);
		}
		
		$data->company_name=$request->company_name;
		$data->content = $file_name;
		$data->phone_number=$request->phone_number;
		$data->email =$request->email;
		$data->website=$request->website;
		$data->cost=$request->cost;
		$data->ordinal=$request->ordinal;
		if($data->save()) {
			if(Input::hasFile('content')) {
				$request->file('content')->move('resources/upload/commercial/'.$data->id.'/',$file_name);
			}
			return redirect()->route('admin.advertisement.getList')->with(['flash_level'=>'success','flash_message'=>'Cập nhật quảng cáo thành công!']);
		} else {
			return redirect()->route('admin.advertisement.getList')->with(['flash_level'=>'danger','flash_message'=>'Cập nhật quảng cáo thất bại!']);
		}
	}

	public function getDelete($id){
		$data = Advertisement::find($id);
		$data_content = $data->content;
		if($data) {
			if($data->delete()){
				File::delete('resources/upload/commercial/'.$id.'/'.$data_content);
				rmdir('resources/upload/commercial/'.$id);
				return redirect()->route('admin.advertisement.getList')->with(['flash_level'=>'success','flash_message'=>'Xóa quảng cáo thành công']);
			}
		} else {
			return redirect()->route('admin.advertisement.getList')->with(['flash_level'=>'danger','flash_message'=>'Không tồn tại quảng cáo']);
		}
	}

	public function postDelete(Request $request){
		$data = $request->check;
		if(count($data)==0){
			return redirect()->route('admin.advertisement.getList')->with(['flash_level'=>'danger','flash_message'=>'Không xóa quảng cáo nào']);
		}
		$count=0;
		foreach($data as $item){
			$choose = Advertisement::find($item);
			$choose_content = $choose->content;
			if($choose){
				if($choose->delete()){
					File::delete('resources/upload/commercial/'.$item.'/'.$choose_content);
					rmdir('resources/upload/commercial/'.$item);
					$count++;
				}
			}
		}
		if($count==0){
			return redirect()->route('admin.advertisement.getList')->with(['flash_level'=>'danger','flash_message'=>'Không xóa quảng cáo nào']);
		}
		return redirect()->route('admin.advertisement.getList')->with(['flash_level'=>'success','flash_message'=>'Đã xóa '.$count.' quảng cáo']);
	}

	public function getList(){
		$data = Advertisement::paginate(5);
		$data->setPath('../../admin/advertisement/list');
		return view('admin/advertisement/list',compact('data'));
	}

}
