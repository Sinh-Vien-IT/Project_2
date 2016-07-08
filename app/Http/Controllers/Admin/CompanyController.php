<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Company;
use App\Http\Requests\AddCompanyRequest;
use App\Http\Requests\UpdateCompanyRequest;
use Input,Auth,File;
use App\Product;

class CompanyController extends Controller {
	public function __construct(){
        $this->beforeFilter(function(){
            if (!Auth::user())
            	return redirect('auth/login');
            if (Auth::user()->role != 'manager'){
                return redirect()->back();
            }
        });
       
    }
	public function getList(){
		$companies = Company::select('id','company_name','logo','country','created_at','updated_at')->paginate(5);
		$companies->setPath('/Project_2/admin/company/list');
		return view('admin/company/list',compact('companies'));
	}

	public function getAdd(){
		return view('admin/company/add');
	}

	public function postAdd(AddCompanyRequest $request){
		$company = new Company;
		$file_name = changeTitle($request->file('logo')->getClientOriginalName());
		$company->logo = $file_name;
		$company->company_name = $request->company_name;
		$company->country = $request->country;
		$company->save();
		$request->file('logo')->move('resources/upload/company/'.$company->id.'/', $file_name);
		return redirect()->route('admin.company.getAdd')->with(['flash_level'=>'success','flash_message'=>'Thêm hãng sản xuất thành công']);
	}

	public function getUpdate($id){
		$company = Company::find($id);
		if(!$company)
			return redirect()->back();
		return view('admin/company/update')->with('company',$company);
	}

	public function postUpdate(UpdateCompanyRequest $request, $id){
		$company = Company::find($id);
		$companies = Company::get();
		if($company->company_name!==$request->company_name) {
			foreach($companies as $temp) {
				if($temp->id == $id)
					continue;
				if($request->company_name==$temp->company_name){
					return redirect()->route('admin.company.getUpdate')->width(['flash_level'=>'danger','flash_message'=>'Tên hãng sản xuất đã tồn tại!']);
				}
			}
		}
		if(Input::hasFile('logo')) {
			$file_name = changeTitle($request->file('logo')->getClientOriginalName());
			File::delete('resources/upload/company/'.$company->id.'/'.$company->logo);
			$company->logo = $file_name;
		}
		$company->company_name=$request->company_name;
		$company->country = $request->country;
		$company->save();
		if(Input::hasFile('logo')) {
			$request->file('logo')->move('resources/upload/company/'.$company->id.'/',$file_name);
		}
		return redirect()->route('admin.company.getList')->with(['flash_level'=>'success','flash_message'=>'Cập nhật hãng sản xuất thành công!']);
	}

	public function getDelete($id){
		$company = Company::find($id);
		if(!$company)
			return redirect()->back();
		$data = Product::where('company_id',$id)->get();
		if(count($data)>0){
			return redirect()->back()->with(['flash_level'=>'danger','flash_message'=>'Không thể xóa hãng sản xuất vì có nhiều sản phẩm thuộc hãng sản xuất này']);
		}
		if($company&&$company->delete()) {
			File::delete('resources/upload/company/'.$company->id.'/'.$company->logo);
			rmdir('resources/upload/company/'.$company->id);
			return redirect()->route('admin.company.getList')->with(['flash_level'=>'success','flash_message'=>'Đã xóa thành công hãng sản xuất!']);
		} else {
			return redirect()->route('admin.company.getList')->with(['flash_level'=>'danger','flash_message'=>'Không thể xóa hãng sản xuất']);
		}
		
	}

	public function postDelete(Request $request){
		$companies_id = $request->check;
		$count =0;
		for($i=0; $i<count($companies_id);$i++) {
			$data = Company::find($companies_id[$i]);
			$product=Product::where('company_id',$companies_id[$i])->first();
			if(isset($product))
				continue;
			if($data->delete()){
				File::delete('resources/upload/company/'.$data->id.'/'.$data->logo);
				rmdir('resources/upload/company/'.$data->id);
				$count++;
			}
		}
		if($count==0)
			return redirect()->route('admin.company.getList')->with(['flash_level'=>'danger','flash_message'=>'Không xóa hãng sản xuất nào!']);
		else
			return redirect()->route('admin.company.getList')->with(['flash_level'=>'success','flash_message'=>'Đã xóa thành công '.$count.' hãng sản xuất!']);
	}

}
