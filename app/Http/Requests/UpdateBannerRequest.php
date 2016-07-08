<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class UpdateBannerRequest extends Request {

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
			'image' => 'image',
			'content'=>'required',
			'ordinal'=> 'required|numeric'
		];
	}

	public function messages(){
		return [
			'image.image' => 'File phải là hình ảnh',
			'content.required' => 'Vui lòng nhập vào tiêu đề',
			'ordinal.required' => 'Vui lòng nhập vào thứ tự',
			'ordinal.numeric' => 'Thứ tự phải là số'
		];
	}
}
