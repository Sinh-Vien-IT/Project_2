<?php namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Contracts\Auth\Registrar;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\LoginRequest;
use App\User;
use Hash, Auth, Input,Mail,DB;

class AuthController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Registration & Login Controller
	|--------------------------------------------------------------------------
	|
	| This controller handles the registration of new users, as well as the
	| authentication of existing users. By default, this controller uses
	| a simple trait to add these behaviors. Why don't you explore it?
	|
	*/

	use AuthenticatesAndRegistersUsers;

	/**
	 * Create a new authentication controller instance.
	 *
	 * @param  \Illuminate\Contracts\Auth\Guard  $auth
	 * @param  \Illuminate\Contracts\Auth\Registrar  $registrar
	 * @return void
	 */
	public function __construct(Guard $auth, Registrar $registrar)
	{
		$this->auth = $auth;
		$this->registrar = $registrar;

		$this->middleware('guest', ['except' => 'getLogout']);
	}

	// Xử lý việc đăng ký tài khoản, xác thực tài khoản thông qua email
	public function getRegister(){
		return view('auth.register');
	}

	public function postRegister(RegisterRequest $request){
		$user = new User;
		if(Input::hasFile('avatar')){
			$file_name = $request->file('avatar')->getClientOriginalName();
		} else {
			$file_name = 'default.jpg';
		}		
		$user->avatar= $file_name;
		$user->username= $request->username;
		$user->email = $request->email;
		$user->password = Hash::make($request->password);
		$user->fullname = $request->fullname;
		$user->gender = $request->gender=='Male'?1:0;
		$user->role = 'member';
		$user->company = $request->company;
		$user->address = $request->address;
		$user->phone_number = $request->phone_number;
		$user->active=0;
		$user->remember_token = $request->_token;

		$data = [
			'hoten'=>$request->fullname,
			'token'=>$request->_token
		];
		Mail::send('emails.active',$data,function($msg){
			$msg->from('tungnt.tvg95@gmail.com','DienThoai321');
			$msg->to(Input::get('email'),Input::get('fullname'))->subject('Xác thực người dùng');
		});

		$user->save();
		if(Input::hasFile('avatar')){
			$request->file('avatar')->move('resources/upload/avatar/'.$user->id,$file_name);
		}
		$password_reset= array([
			'email'=>$request->email,
			'token'=>$request->_token,
			'created_at'=>date('Y-m-d H:i:s')
		]);
		DB::table('password_resets')->insert($password_reset);

		return redirect('auth/login')->with(['message'=>'ok']);
	}


	// Xử lý việc đăng nhập
	public function getLogin(){
		return view('auth.login');
	}

	public function postLogin(LoginRequest $request){
		$data = array(
			'email'=>$request->email,
			'password'=>$request->password,
			'active'=>'1',
		);
		if($this->auth->attempt($data,$request->has('remember'))){
			return redirect('admin');
		} else {
			return redirect('auth/login')->with(['flash_level'=>'danger','flash_message'=>'Tài khoản hoặc mật khẩu không đúng!']);
		}
	}


	// Xử lý việc người dùng truy cập vào link được gửi trong mail
	public function active($token){
		$data = User::where('remember_token',$token)->first();
		if(!empty($data->email)){
			$data->active=1;
			$data->save();
			return redirect('auth/login')->with(['flash_level'=>'success','flash_message'=>'Đăng ký thành công!']);
		}else{
			return redirect('auth/register')->with(['flash_level'=>'danger','flash_message'=>'Đăng ký thất bại!']);
		}
	}
}
