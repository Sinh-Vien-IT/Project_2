<?php namespace App\Http\Controllers\Member;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Http\Requests\UpdateMemberRequest;
use App\User, App\Company;
use Input, Hash;
use App\Order, Auth;

class MemberUpdateController extends Controller {

	public function getUpdate($id){
		$user = User::find($id);
		if(!$user||Auth::user()->id!=$id){
			return redirect()->back();
		}
		$companies=Company::get();
		return view('users.members.update')->with(['user'=> $user,'companies'=>$companies]);
	}

	public function postUpdate(UpdateMemberRequest $request){
		$id = $request->id;
		$user = User::find($id);
		$users = User::get();
		if($user->email!=$request->email){
			for($i=0; $i<count($users); $i++){
				if($request->email==$users[$i]->email)
					return redirect('member/update/'.$id)->with(['flash_level'=>'danger', 'flash_message'=>'Email này đã được sử dụng, hãy nhập vào email khác!']);
			}
		}
		if(Input::hasFile('avatar')){

			$file_name = $request->file('avatar')->getClientOriginalName();
			$user->avatar= $file_name;
			$request->file('avatar')->move('resources/upload/avatar/',$file_name);
		} else {
			$user->avatar= $user->avatar;
		}
		$user->email = $request->email;
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
		$user->remember_token = $request->_token;
		$user->save();
		return redirect('member/update/'.$id)->with(['flash_level'=>'success', 'flash_message'=>'Đã cập nhật thành công']);
	}

	public function getList($id){
		$member = User::find($id);
		if(!$member){
			return redirect()->back();
		}
		$data = Order::where('email',$member->email)->orderBy('created_at','DESC')->get();
		return view('users/members/history',compact('id','data'));
	}
}
