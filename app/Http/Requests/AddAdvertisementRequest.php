<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class AddAdvertisementRequest extends Request {

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
			'company_name' =>'required|unique:advertisements,company_name',
			'content'=>'required|image',
			'phone_number'=>'required|numeric|max:1000000000000000',
			'email'=>'required|email|unique:advertisements,email',
			'website'=>'required|unique:advertisements,website',
			'cost'=>'required|numeric',
			'ordinal'=>'required|numeric'
		];
	}
	public function messages(){
		return [
			'company_name.required' => 'Vui lòng nhập vào tên công ty',
			'company_name.unique' => 'Tên công ty cần quảng cáo đã tồn tại',
			'content.required' =>'Vui lòng lựa chọn hình ảnh quảng cáo',
			'content.image' =>'Nội dung quảng cáo phải là hình ảnh',
			'phone_number.required' => 'Vui lòng nhập vào số điện thoại',
			'phone_number.numeric' =>'Số điện thoại phải là số',
			'phone_number.max'=>'Số điện thoại không vượt quá 11 kí tự số',
			'email.required' =>'Vui lòng nhập email',
			'email.email' =>'Email phải là một email',
			'email.unique' =>'Email đã tồn tại',
			'website.required' =>'Vui lòng nhập địa chỉ trang web',
			'website.unique' =>'Địa chỉ trang web đã tồn tại',
			'cost.required' =>'Vui lòng nhập vào giá tiền',
			'cost.numeric' =>'Giá tiền phải lá số',
			'ordinal.required' =>'Vui lòng nhập vào thứ tự sắp xếp',
			'ordinal.numeric' =>'Thứ tự phải là số'
		];
	}

}
