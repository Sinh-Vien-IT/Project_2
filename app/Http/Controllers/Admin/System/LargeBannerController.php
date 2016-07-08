<?php namespace App\Http\Controllers\Admin\System;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use DB, Input,Auth;
use App\Http\Requests\AddBannerRequest;
use App\Http\Requests\UpdateBannerRequest;
use File;
use App\System_Manage;

class LargeBannerController extends Controller {

	public function __construct(){
        $this->beforeFilter(function(){
            if (!Auth::user())
            	return redirect('auth/login');
            if (Auth::user()->role != 'admin'){
                return redirect()->back();
            }
        });
    }

	public function getList(){
		$lBanners = System_Manage::where('type','Large Banner')->paginate(5);
		$lBanners->setPath('../../system/lBanner/list');
		return view('admin/system/largeBanner/list')->with('lBanners', $lBanners);
	}
	public function getAdd(){
		return view('admin/system/largeBanner/add');
	}

	public function postAdd(AddBannerRequest $request){
		$file_name = changeTitle($request->file('image')->getClientOriginalName());
		$banner = new System_Manage;
		$banner->image = $file_name;
		$banner->type = 'Large Banner';
		$banner->content = $request->content;
		$banner->display = $request->display? 1:0;
		$banner->ordinal = $request->ordinal;
		if($banner->save()) {
			$banner = System_Manage::orderBy('created_at', 'DESC')->first();
			$request->file('image')->move('resources/upload/banner/'.$banner->id.'/',$file_name);
			return redirect()->route('admin.system.lBanner.getAdd')->with(['flash_level'=>'success','flash_message'=>'Thêm banner thành công!']);
		} else {
			return redirect()->route('admin.system.lBanner.getAdd')->with(['flash_level'=>'danger','flash_message'=>'Thêm banner thất bại!']);
		}
	}

	public function getUpdate($id){
		$banner = System_Manage::find($id);
		if(!$banner)
			return redirect()->back();
		return view('admin/system/largeBanner/update')->with('banner',$banner);
	}

	public function postUpdate(UpdateBannerRequest $request){
		$id = $request->id;
		$banner = System_Manage::find($id);
		$file_name = $banner->image;
		if(Input::hasFile('image')) {
			File::delete('resources/upload/banner/'.$id.'/'.$banner->image);
			$file_name = changeTitle($request->file('image')->getClientOriginalName());
		}
		
		$banner->image = $file_name;
		$banner->content = $request->content;
		$banner->display = ($request->display=='1')? 1:0;
		$banner->ordinal = $request->ordinal;
		if($banner->save())	{
			if(Input::hasFile('image')) {
				$request->file('image')->move('resources/upload/banner/'.$banner->id.'/',$file_name);
			}
			return redirect()->route('admin.system.lBanner.getList')->with(['flash_level'=>'success','flash_message'=>'Cập nhật banner thành công!']);
		} else {
			return redirect()->route('admin.system.lBanner.getList')->with(['flash_level'=>'danger','flash_message'=>'Cập nhật banner thất bại!']);
		}
	}

	public function getDelete($id){
		$data = System_Manage::find($id);
		if(!$data)
			return redirect()->back();
		$img_name=$data->image;
		if($data->delete()) {
			File::delete('resources/upload/banner/'.$id.'/'.$img_name);
			rmdir('resources/upload/banner/'.$id);
			return redirect()->route('admin.system.lBanner.getList')->with(['flash_level'=>'success','flash_message'=>'Đã xóa banner thành công!']);
		}else {
			return redirect()->route('admin.system.lBanner.getList')->with(['flash_level'=>'danger','flash_message'=>'Xóa banner thất bại!']);
		}
	}

	public function postDelete(Request $request){
		$banner_ids = $request->check;
		$count=0;
		if(count($banner_ids)==0) {
			return redirect()->route('admin.system.lBanner.getList')->with(['flash_level'=>'danger','flash_message'=>'Không xóa banner nào!']);
		}
		foreach($banner_ids as $banner_id) {
			$data = System_Manage::find($banner_id);
			$img_name = $data->image;
			if($data->delete()){
				File::delete('resources/upload/banner/'.$banner_id.'/'.$img_name);
				rmdir('resources/upload/banner/'.$banner_id);
				$count++;
			}
		}
		if($count==0)
			return redirect()->route('admin.system.lBanner.getList')->with(['flash_level'=>'danger','flash_message'=>'Không xóa banner nào!']);
		else 
			return redirect()->route('admin.system.lBanner.getList')->with(['flash_level'=>'success','flash_message'=>'Đã xóa '.$count.' banner!']);

	}
}
