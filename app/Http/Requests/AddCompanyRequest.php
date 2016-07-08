<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class AddCompanyRequest extends Request {

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
			'company_name' =>'required|unique:companies,company_name',
			'logo' => 'required|image',
			'country' => 'required',
		];
	}

	public function messages(){
		return [
			'company_name.required' => 'Vui lòng nhập vào Company Name',
			'company_name.unique' =>'Công ty này đã tồn tại',
			'logo.required' => 'Vui lòng nhập chọn logo',
			'logo.image' => 'Logo phải là hình ảnh',
			'country.required' => 'Vui lòng nhập vào Country'

		];
	}

}
