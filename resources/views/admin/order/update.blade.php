@extends('admin.index')

@section('content')
	<div class="container-fluid">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading center_align">Cập Nhật Đơn Hàng Xuất Kho</div>
				<div class="panel-body">
					<!-- Hiển thị thông báo thành công hoặc thất bại, class message để cho thông báo ẩn hiện -->
					@include('admin.alert')
					@include('admin.error')

					<form class="form-horizontal" role="form" method="POST" action=""  enctype = "multipart/form-data">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

						<div class="form-group">
							<label class="col-md-3 control-label">Tên Khách Hàng *</label>
							<div class="col-md-7">
								<input type="text" class="form-control" name="name" value="{{$data->custormer_name }}" disabled>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-3 control-label">Email *</label>
							<div class="col-md-7">
								<input type="text" class="form-control" name="email" value="{{$data->email }}" disabled>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-3 control-label">Số Điện Thoại *</label>
							<div class="col-md-7">
								<input type="text" class="form-control" name="phone_number" value="{{$data->phone_number }}" disabled>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-3 control-label">Địa Chỉ Khách Hàng *</label>
							<div class="col-md-7">
								<input type="text" class="form-control" name="custormer_address" value="{{$data->custormer_address }}" disabled>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-3 control-label">Hình Thức Thanh Toán *</label>
							<div class="col-md-7">
								<input type="text" class="form-control" name="payment" value="{{$data->payment=='card'?'Qua Thẻ':'Khi Giao Hàng' }}" disabled>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-3 control-label">Trạng Thái Đơn Hàng *</label>
							<div class="col-md-7">
								@if($data->status=='Chưa Thanh Toán') 
									<input type="radio" name="status" value = "Chưa Thanh Toán" style = "margin-top:10px" checked="checked"> Chưa Thanh Toán
									<input type="radio" name ="status" value = "Đã Thanh Toán"> Đã Thanh Toán
									<input type="radio" name ="status" value = "Hủy Đơn Hàng"> Hủy Đơn Hàng
								@elseif($data->status=='Đã Thanh Toán')
									<input type="radio" name="status" value = "Chưa Thanh Toán" style = "margin-top:10px"> Chưa Thanh Toán
									<input type="radio" name ="status" value = "Đã Thanh Toán"  checked="checked"> Đã Thanh Toán
									<input type="radio" name ="status" value = "Hủy Đơn Hàng"> Hủy Đơn Hàng
								@else
									<input type="radio" name="status" value = "Chưa Thanh Toán" style = "margin-top:10px"> Chưa Thanh Toán
									<input type="radio" name ="status" value = "Đã Thanh Toán"  > Đã Thanh Toán
									<input type="radio" name ="status" value = "Hủy Đơn Hàng" checked="checked"> Hủy Đơn Hàng
								@endif
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-7 col-md-offset-3">
								<button type="submit" class="btn btn-primary">
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