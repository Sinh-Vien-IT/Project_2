<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class UpdateAccessoryRequest extends Request {

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
			'name'=>'required',
			'image'=>'image',
			'price_new'=>'numeric'
		];
	}

	public function messages(){
		return [
			'name.required'=>'Vui lòng nhập vào tên phụ kiện',
			'image.image'=>'Hình ảnh phải có định dạng ảnh',
			'price.numeric'=>'Giá phụ kiện phải là số'
		];
	}
}
