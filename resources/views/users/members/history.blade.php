@extends('users.master')
@section('css')
	<link rel="stylesheet" href="{!!url('public/css/list.css')!!}">
	<style type="text/css">
		#listForm th{background:#69D2E7;padding:11px 0px;}
		#listForm table, th, td{border: 1px solid #D0CFCF;}
	</style>
@endsection


@section('content')
<br>
<form id = "listForm">
		<input type="hidden" name = "_token" value = "{!!csrf_token()!!}">
		<table>
			<thead>
				<tr>
					<th>Lịch Sử Mua Hàng</th>
				</tr>
			</thead>
		</table>
		<table>
			<thead>
				<tr>
					<th>Id</th>
					<th>Thời Gian Dự Định</th>
					<th>Thời Gian Giao Hàng</th>
					<th>Trạng Thái Đơn Hàng</th>
					<th>Địa Điểm</th>
					<th>Đơn Hàng</th>
					<th>Giá (VNĐ)</th>
					
					{{-- <th>Ngày tạo lập</th>
					<th>Lần chỉnh sửa trước</th> --}}
				</tr>
			</thead>
			<tbody>
				<?php $id = 0;?>
				@foreach($data as $item)
					<?php $id++;?>
					<tr>
						<td>{!!$id!!}</td>
						<td>{!!$item->time_delivery!!}</td>
						<td>{!!$item->time_receive==0?'Chưa Nhận Hàng':$item->time_receive!!}</td>
						<td>{!!$item->status!!}</td>
						<td>{!!$item->place_receive!!}</td>
						<td>{!!$item->description_order!!}</td>
						<td>{!!number_format($item->price,0,',','.')!!}</td>
					</tr>
				@endforeach
			</tbody>
		</table>
		<br>
		<input type="button" name = "add_new" value = "Quay Lại Trang Chủ" class = "btn btn-primary" onclick = "window.location='{!!route('home')!!}'">
</form>
<br>
<hr>
<br>
@endsection