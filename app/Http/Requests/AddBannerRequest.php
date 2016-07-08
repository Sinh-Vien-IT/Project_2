<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class AddBannerRequest extends Request {

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
			'image'   => 'required|image|unique:system_manage',
			'content' => 'required',
			'ordinal' => 'required|numeric'
		];
	}

	public function messages(){
		return [
			'image.required'   => 'Vui lòng thêm vào hình ảnh',
			'image.image'      => 'File được chọn không phải là hình ảnh',
			'image.unique'     => 'File đã tồn tại',
			'content.required' => 'Vui lòng thêm vào số tiêu đề cho banner',
			'ordinal.required' => 'Vui lòng thêm vào số thứ tự',
			'ordinal.numeric'  => 'Số thứ tự phải là số'
		];
	}

}
