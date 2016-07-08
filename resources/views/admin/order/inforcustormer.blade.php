@extends('admin.index')

@section('content')
	<div class="container-fluid">
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			<div class="panel panel-default">
				<div class="panel-heading center_align">Thông Tin Khách Hàng</div>
				<div class="panel-body">
					<!-- Hiển thị thông báo thành công hoặc thất bại, class message để cho thông báo ẩn hiện -->
					@include('admin.alert')
					@include('admin.error')
					<label class = "control-label">Họ Và Tên: {!!$data->custormer_name!!}</label><br>
					<label class = "control-label">Số Điện Thoại: {!!$data->phone_number!!}</label><br>
					<label class = "control-label">Email: {!!$data->email!!}</label><br>
					<label class = "control-label">Địa Chỉ: {!!$data->custormer_address!!}</label><br><br>
					<button class="offset-col-md-2 btn btn-success center_align" onclick = "window.location = '{!!route("admin.order.getList")!!}'">Quay Lại</button>
				</div>
			</div>
		</div>
	</div>
</div>
	
@stop