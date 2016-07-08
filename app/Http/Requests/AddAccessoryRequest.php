<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class AddAccessoryRequest extends Request {

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
			'name'=>'required|unique:accessories,name',
			'image'=>'required|image',
			'price'=>'required'
		];
	}

	public function messages(){
		return [
			'name.required'=>'Vui lòng nhập vào tên phụ kiện',
			'name.unique' =>'Phụ kiện đã tồn tại',
			'image.required'=>'Vui lòng chọn file ảnh cho phụ kiện',
			'image.image'=>'Hình ảnh phải có định dạng ảnh',
			'price.required'=>'Vui lòng nhập vào giá phụ kiện'
		];
	}
}
