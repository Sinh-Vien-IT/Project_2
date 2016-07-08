<?php namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Contracts\Auth\PasswordBroker;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Http\Request;
use App\User, Hash, DB;

class PasswordController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Password Reset Controller
	|--------------------------------------------------------------------------
	|
	| This controller is responsible for handling password reset requests
	| and uses a simple trait to include this behavior. You're free to
	| explore this trait and override any methods you wish to tweak.
	|
	*/

	use ResetsPasswords;

	/**
	 * Create a new password controller instance.
	 *
	 * @param  \Illuminate\Contracts\Auth\Guard  $auth
	 * @param  \Illuminate\Contracts\Auth\PasswordBroker  $passwords
	 * @return void
	 */
	public function __construct(Guard $auth, PasswordBroker $passwords)
	{
		$this->auth = $auth;
		$this->passwords = $passwords;

		$this->middleware('guest');
	}

	protected $redirectPath='/';
	protected function getEmailSubject()
	{
		return isset($this->subject) ? $this->subject : 'Đặt Lại Mật Khẩu';
	}

	public function postEmail(Request $request)
	{
		$this->validate($request, ['email' => 'required|email']);

		$response = $this->passwords->sendResetLink($request->only('email'), function($m)
		{
			$m->from('tungnt.tvg95.hust@gmail.com','DienThoai321');
			$m->subject($this->getEmailSubject());
		});

		switch ($response)
		{
			case PasswordBroker::RESET_LINK_SENT:
				return redirect()->back()->with('status', trans($response));

			case PasswordBroker::INVALID_USER:
				return redirect()->back()->withErrors(['email' => trans($response)]);
		}
	}

	public function getReset($token = null)
	{
		if (is_null($token))
		{
			throw new NotFoundHttpException;
		}

		return view('auth.reset')->with('token', $token);
	}

	/**
	 * Reset the given user's password.
	 *
	 * @param  Request  $request
	 * @return Response
	 */
	public function postReset(Request $request)
	{
		$this->validate($request, 
			[
				'token' => 'required',
				'email' => 'required|email',
				'password' => 'required|confirmed'
			],
			[
				'email.required'=>'Vui lòng nhập vào email',
				'email.email' => 'Vui lòng nhập đúng định dạng email',
				'password.required'=>'Vui lòng nhập password',
				'password.confirmed'=>'Password và Confirm Password không trùng khớp'
			]
		);

		$data = User::where('email',$request->email)->first();
		if(empty($data)){
			return redirect()->back()->with(['flash_level'=>'danger','flash_message'=>'Không tồn tại người dùng với email này']);
		}
		$data->password = Hash::make($request->password);
		$data->save();

		DB::table('password_resets')->where('email',$request->email)->update([
			'token'=>$request->_token,
		]);

		return redirect('/');

	}		
}
