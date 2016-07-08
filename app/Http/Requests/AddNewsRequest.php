<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class AddNewsRequest extends Request {

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
			'title'=>'required',
			'image'=>'required|image',
		];
	}

	public function messages(){
		return [
			'title.required'=>'Vui lòng nhập vào tiêu đề',
			'image.required'=>'Vui lòng nhập vào hình cho tin tức',
			'image.image' => 'File chọn không thỏa mãn',
		];
	}
}
