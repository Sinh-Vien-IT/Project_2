<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class UpdateMenuRequest extends Request {

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
			'ordinal'=>'required|numeric',
		];
	}

	public function messages(){
		return [
			'name.required' => 'Vui lòng nhập vào tên item',
			'ordinal.required' => 'Vui lòng nhập vào thứ tự',
			'ordinal.numeric' => 'Thứ tự phải là số'
		];
	}
}
