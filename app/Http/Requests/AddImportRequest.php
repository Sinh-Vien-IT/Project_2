<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class AddImportRequest extends Request {

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
			'code'=>'required|unique:import_products,code',
			'number'=>'required',
			'suplier' => 'required',
			'product_id'=>'required'
		];
	}

	public function messages(){
		return [
			'code.required' => 'Vui lòng nhập vào mã đơn hàng',
			'code.unique' => 'Mã đơn hàng đã tồn tại',
			'number.required' => 'Vui lòng nhập vào số lượng sản phẩm',
			'suplier.required' => 'Vui lòng nhâp vào nhà cung cấp',
			'product_id.required'=>'Vui lòng chọn sản phẩm'
		];
	}
}
