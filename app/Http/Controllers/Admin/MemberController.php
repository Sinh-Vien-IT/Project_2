<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Session;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests\AddMemberRequest;
use App\Http\Requests\UpdateMemberRequest;
use Hash, Input,Auth, File;
use App\Order;

class MemberController extends Controller {
	// Hàm khởi tạo để không cho phép khách hay member vào
	// Nếu là khách thì sẽ cho ra trang đăng nhập
	// Nếu là member thì quay trở lại
	public function __construct(){
        $this->beforeFilter(function(){
            if (!Auth::user())
            	return redirect('auth/login');
            if (Auth::user()->role == 'member'){
                return redirect()->back();
            }
        });
       
    }

    // Xử lý việc thêm thành viên
	public function getAdd(){
		if(Auth::user()->role=='manager')
			return redirect()->back();
		return view('admin.member.add');
	}

	public function postAdd(AddMemberRequest $request){
		$user = new User;
		if(Input::hasFile('avatar')){
			$file_name = changeTitle($request->file('avatar')->getClientOriginalName());
		} else {
			$file_name = 'default.jpg';
		}	
		$user->avatar= $file_name;
		$user->username= $request->username;
		$user->email = $request->email;
		$user->password = Hash::make($request->password);
		$user->fullname = $request->fullname;
		$user->gender = $request->gender=='Male'?1:0;
		if($request->role){
			$user->role =$request->role;
		}else{
			$user->role = 'member';
		}
		$user->company = $request->company;
		$user->address = $request->address;
		$user->phone_number = $request->phone_number;
		$user->remember_token = $request->_token;
		$user->save();
		if(Input::hasFile('avatar')){
			$request->file('avatar')->move('resources/upload/avatar/'.$user->id.'/',$file_name);
		}
		return redirect()->back()->with(['flash_level'=>'success', 'flash_message'=>'Đã thêm thành công']);
	}

	// Xử lý việc cập nhật thành viên
	public function getUpdate($id){
		$user = User::find($id);
		if(Auth::user()->role=='manager'||!$user)
			return redirect()->back();
		return view('admin.member.update')->with('user', $user);
	}

	public function postUpdate(UpdateMemberRequest $request,$id){
		$user = User::find($id);
		$users = User::get();
		if($user->email!=$request->email){
			for($i=0; $i<count($users); $i++){
				if($request->email==$users[$i]->email)
					return redirect('admin/member/update/'.$id)->with(['flash_level'=>'danger', 'flash_message'=>'Email này đã được sử dụng, hãy nhập vào email khác!']);
			}
		}
		if(Input::hasFile('avatar')){
			$file_name = changeTitle($request->file('avatar')->getClientOriginalName());
			File::delete('resources/upload/avatar/'.$user->id.'/'.$user->avatar);
			$user->avatar= $file_name;
		}
		$user->username = $request->username;
		if($request->password==''){
			$user->password = $user->password;
		} else{
			$user->password = Hash::make($request->password);
		}
		$user->fullname = $request->fullname;
		$user->gender = $request->gender=='Male'?1:0;
		$user->company = $request->company;
		$user->address = $request->address;
		$user->phone_number = $request->phone_number;
		if($request->role){
			$user->role =$request->role;
		}
		if($request->active){
			$user->active = $request->active=='active'?1:0;
		}
		$user->remember_token = $request->_token;
		$user->save();
		if(Input::hasFile('avatar')){
			$request->file('avatar')->move('resources/upload/avatar/'.$user->id.'/',$file_name);
		}
		return redirect()->route('admin.member.getList')->with(['flash_level'=>'success', 'flash_message'=>'Đã cập nhật thành công']);
	}

	// Xử lý việc xóa 1 hay nhiều thành viên
	// Chú ý: Không thể tự xóa mình
	public function getDelete($id){
		$user = User::find($id);
		if(Auth::user()->role=='manager')
			return redirect()->back();
		if(!$user)
			return redirect()->route('admin.member.getList')->with(['flash_level'=>'danger', 'flash_message'=>'Không tìm thấy thành viên!']); 
		if($user->role == 'admin'){
			return redirect()->route('admin.member.getList')->with(['flash_level'=>'danger', 'flash_message'=>'Không thể xóa!']);
		}
		if($user->role=='manager'){
			$user->active=0;
			$user->save();
			return redirect()->route('admin.member.getList')->with(['flash_level'=>'success', 'flash_message'=>'Đã xóa tạm thời thành công 1 manager']);
		}
		if($user->delete()) {
			if(File::exists('resources/upload/avatar/'.$user->id.'/'.$user->avatar)){
				File::delete('resources/upload/avatar/'.$user->id.'/'.$user->avatar);
				rmdir('resources/upload/avatar/'.$user->id);
			}
			return redirect()->route('admin.member.getList')->with(['flash_level'=>'success', 'flash_message'=>'Đã xóa thành công 1 thành viên']);
		}
		else
			return redirect()->route('admin.member.getList')->with(['flash_level'=>'danger', 'flash_message'=>'Không thể xóa thành viên']);
	}
	public function postDelete(Request $request){
		$data = $request->check;
		$countM=0;
		$count=0;
		for($i=0; $i<count($data); $i++) {
			$user = User::find($data[$i]);
			if($user->role=='manager'){
				$user->active =0;
				$user->save();
				$countM++;
				continue;
			}
			if($user->delete()) {
				if(File::exists('resources/upload/avatar/'.$user->id.'/'.$user->avatar)){
					File::delete('resources/upload/avatar/'.$user->id.'/'.$user->avatar);
					rmdir('resources/upload/avatar/'.$user->id);
				}
				$count ++;
			}
		}
		if($count != 0)
			return redirect()->route('admin.member.getList')->with(['flash_level'=>'success', 'flash_message'=>'Đã xóa thành công '.$count.' thành viên và xóa tạm thời thành công '.$countM.' manager!']);
		else
			return redirect()->route('admin.member.getList')->with(['flash_level'=>'danger', 'flash_message'=>'Không xóa thành viên nào!']);
	}

	//Lấy danh sách và phân 5 thành viên 1 trang
	public function getList(){
		$users = User::paginate(5);
		$user_members = User::where('role','member')->paginate(5);
		$users->setPath('../../admin/member/list');
		$user_members->setPath('../../admin/member/list');
		return view('admin/member/list', compact('users','user_members'));
	}

	//Xem lịch sử giao dịch của thành viên
	public function getHistory($id){
		$member = User::find($id);
		if(!$member)
			return redirect()->back();
		$data = Order::where('email',$member->email)->get();
		return view('admin/member/history',compact('id','data'));
	}
}
