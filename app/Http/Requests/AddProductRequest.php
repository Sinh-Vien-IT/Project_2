<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class AddProductRequest extends Request {

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
			'product_name' =>'required|unique:products,product_name',
			'monitor'      => 'numeric',
			'ram'          => 'numeric',
			'rom'          =>'numeric',
			'pin'          => 'numeric',
			'price'        =>'required|numeric',
			'weight'		=>'numeric',
			'image'        =>'required|image',
			];
	}
	public function messages(){
		return [
			'company_id.required'   =>'Vui lòng chọn hãng sản xuất',
			'os.required'           =>'Vui lòng chọn hệ điều hành',
			'product_name.required' => 'Vui lòng nhập vào tên sản phẩm',
			'product_name.unique'   => 'Sản phẩm đã tồn tại',
			'monitor.numeric'       => 'Màn hình phải là số',
			'ram.numeric'           => 'Ram phải là số',
			'rom.numeric'           => 'Rom phải là số',
			'weight.numeric'        => 'Trọng lượng phải là số',
			'pin.numeric'           => 'Dung lượng pin phải là số',
			'price.required'        => 'Vui lòng nhập vào giá sản phẩm',
			'price.numeric'         => 'Giá sản phẩm phải là số',
			'image.required'        => 'Vui lòng chọn hình ảnh sản phẩm',
			'image.image'           => 'Hình ảnh sản phẩm phải dạng hình ảnh',
		];

	}

}
