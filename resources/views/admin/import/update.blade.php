@extends('admin.index')

@section('content')
	<div class="container-fluid">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading center_align">Cập Nhật Đơn Hàng Nhập Kho</div>
				<div class="panel-body">
					<!-- Hiển thị thông báo thành công hoặc thất bại, class message để cho thông báo ẩn hiện -->
					@include('admin.alert')
					@include('admin.error')

					<form class="form-horizontal" role="form" method="POST" action=""  enctype = "multipart/form-data">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

						<div class="form-group">
							<label class="col-md-3 control-label">Mã Đơn Hàng *</label>
							<div class="col-md-7">
								<input type="text" class="form-control" name="code" value="{{ old('code',isset($import->code)?$import->code:null)  }}" disabled>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-3 control-label">Sản Phẩm *</label>
							<div class="col-md-7">
								<select name="product_id" id="" class = "form-control">
									<option value="0">Hãy Chọn Sản Phẩm</option>
									@foreach($data as $item)
										<option value="{!!$item->id!!}" 
										{!!old('product_id',isset($import->product_id)?$import->product_id:null)==$item->id?'selected':null!!}
										>-- {!!$item->product_name!!}</option>
									@endforeach
								</select> 
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-3 control-label">Số lượng *</label>
							<div class="col-md-7">
								<input type="text" class="form-control" name="number" value="{{ old('number',isset($import->number)?$import->number:null) }}">
							</div>
						</div>
							
						<div class="form-group">
							<label class="col-md-3 control-label">Nhà cung cấp *</label>
							<div class="col-md-7">
								<input type="text" class="form-control" name="suplier" value="{{ old('suplier',isset($import->suplier)?$import->suplier:null) }}">
							</div>
						</div>
						
						<div class="form-group">
							<div class="col-md-7 col-md-offset-3">
								<button type="submit" class="btn btn-primary" onclick= "return confirm('Lưu ý: Cập nhật này có thể làm thay đổi số lượng các sản phẩm liên quan\nVẫn tiếp tục?')">
									Cập nhật
								</button>
								<input type="reset" value = "Nhập lại" class="btn btn-primary" id="reset_form">
								<button type="button" class="btn btn-primary" onclick = "window.location = '../list'">
									Quay lại
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
	
@stop