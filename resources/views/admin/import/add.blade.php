@extends('admin.index')

@section('content')
	<div class="container-fluid">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading center_align">Thêm Đơn Hàng Nhập Kho</div>
				<div class="panel-body">
					<!-- Hiển thị thông báo thành công hoặc thất bại, class message để cho thông báo ẩn hiện -->
					@include('admin.alert')
					@include('admin.error')

					<form class="form-horizontal" role="form" method="POST" action=""  enctype = "multipart/form-data">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

						<div class="form-group">
							<label class="col-md-3 control-label">Mã Đơn Hàng *</label>
							<div class="col-md-7">
								<input type="text" class="form-control" name="code" value="{{ old('code') }}">
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-3 control-label">Sản Phẩm *</label>
						<div class="col-md-7">
								<select name="product_id" id="selectbox">
									<option value="">Hãy Chọn Sản Phẩm</option>
									@if($type=='product')
										@foreach($data as $item)
											<option value="{!!$item->id!!}" 
											{!!old('product_id')==$item->id?'selected':null!!}
											>-- {!!$item->product_name!!}</option>
										@endforeach
									@else
										@foreach($data as $item)
											<option value="{!!$item->id!!}" 
											{!!old('product_id')==$item->id?'selected':null!!}
											>-- {!!$item->name!!}</option>
										@endforeach
									@endif
								</select> 
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-3 control-label">Số lượng *</label>
							<div class="col-md-7">
								<input type="text" class="form-control" name="number" value="{{ old('number') }}">
							</div>
						</div>
							
						<div class="form-group">
							<label class="col-md-3 control-label">Nhà cung cấp *</label>
							<div class="col-md-7">
								<input type="text" class="form-control" name="suplier" value="{{ old('suplier') }}">
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-3">
								<button type="submit" class="btn btn-primary" onclick = "return confirm('Lưu ý: Khi thêm đơn hàng nhập kho thì sẽ KHÔNG thể chỉnh sửa hay xóa đơn hàng.\nThêm đơn hàng nhập kho? ')">
									Thêm Đơn Hàng Nhập Kho
								</button>
								<button type = "button" class = "btn btn-primary" onclick = "window.location='{!!route('admin.import.getList')!!}'">
									Quay Lại
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