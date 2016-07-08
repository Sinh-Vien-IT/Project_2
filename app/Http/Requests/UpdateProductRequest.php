<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class UpdateProductRequest extends Request {

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
			'company_id'   =>'required',
			'os'           =>'required',
			'product_name' => 'required',
			'monitor'      => 'numeric',
			'ram'          => 'numeric',
			'rom'          => 'numeric',
			'pin'          => 'numeric',
			'price_new'    => 'numeric',
			'image'        => 'image',
		];
	}
	public function messages(){
		return [
			'company_id.required'   =>'Vui lòng chọn hãng sản xuất',
			'os.required'           =>'Vui lòng chọn hệ điều hành',
			'product_name.required' => 'Vui lòng nhập vào tên sản phẩm',
			'monitor.numeric'       => 'Màn hình phải là số',
			'ram.numeric'           => 'Ram phải là số',
			'rom.numeric'           => 'Rom phải là số',
			'pin.numeric'           => 'Dung lượng pin phải là số',
			'price_new.numeric'         => 'Giá sản phẩm phải là số',
			'image.image'           => 'Hình ảnh sản phẩm phải dạng hình ảnh',
		];

	}

}
