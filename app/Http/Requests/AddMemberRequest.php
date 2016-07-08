<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class AddMemberRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			'username' => 'required|max:255',
			'email' => 'required|email|max:255|unique:users',
			'password' => 'required|confirmed|min:6',
			'fullname'=>'required|max:255',
			'avatar' => 'image',
			'address' =>'required',
			'phone_number'=>'required|numeric|max:1000000000000000'
		];
	}
	public function messages(){
		return [
			'username.required'=>'Vui lòng nhập vào username',
			'username.max'=>'Username tối đa gồm 255 kí tự',
			'email.required'=>'Vui lòng nhập vào email',
			'email.email'=>'Email phải chứa @',
			'email.max' =>'Email tối đa gồm 255 kí tự',
			'email.unique'=>'Email đã được sử dụng cho một tài khoản khác',
			'password.required'=>'Vui lòng nhập vào password',
			'password.confirmed'=>'Xác nhận password không trùng khớp',
			'password.min'=>'Password có tối thiểu 6 kí tự',
			'fullname.required'=>'Vui lòng nhập vào fullname',
			'fullname.max'=>'Fullname tối đa gồm 255 kí tự',
			'avatar.image'=>'Avatar phải là hình ảnh',
			'address.required' => 'Vui lòng nhập vào Address',
			'phone_number.required' =>'Vui lòng nhập vào Phone Number',
			'phone_number.numeric' => 'Phone Number phải là số',
			'phone_number.max'=>'Phone Number có tối đa 15 chữ số'
		];
	}

}
