<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class AddOrderRequest extends Request {

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
			'name' =>'required',
			'phone_number'=>'required|numeric|max:1000000000000000',
			'email'=>'required|email'
		];
	}

	public function messages(){
		return [
			'name.required' => 'Vui lòng nhập vào họ và tên ở bước 1',
			'phone_number.required'=>'Vui lòng nhập vào số điện thoại ở bước 1',
			'phone_number.numeric' =>'Số điện thoại phải là số',
			'phone_number.max'=>'Số điện thoại phải là một số điện thoại chính xác',
			'email.required'=>'Vui lòng nhập vào email',
			'email.email'=>'Email phải là một email chính xác'
		];
	}

}
