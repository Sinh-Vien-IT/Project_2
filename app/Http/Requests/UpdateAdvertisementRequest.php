<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class UpdateAdvertisementRequest extends Request {

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
			'company_name' =>'required',
			'content'=>'image',
			'phone_number'=>'required|numeric|max:1000000000000000',
			'email'=>'required|email',
			'website'=>'required',
			'cost'=>'required|numeric',
			'ordinal'=>'required|numeric'
		];
	}
	public function messages(){
		return [
			'company_name.required' => 'Vui lòng nhập vào tên công ty',
			'content.image' =>'Nội dung quảng cáo phải là hình ảnh',
			'phone_number.required' => 'Vui lòng nhập vào số điện thoại',
			'phone_number.numeric' =>'Số điện thoại phải là số',
			'phone_number.max'=>'Số điện thoại không vượt quá 11 kí tự số',
			'email.required' =>'Vui lòng nhập email',
			'email.email' =>'Email phải là một email',
			'website.required' =>'Vui lòng nhập địa chỉ trang web',
			'cost.required' =>'Vui lòng nhập vào giá tiền',
			'cost.numeric' =>'Giá tiền phải lá số',
			'ordinal.required' =>'Vui lòng nhập vào thứ tự sắp xếp',
			'ordinal.numeric' =>'Thứ tự phải là số'
		];
	}
}
