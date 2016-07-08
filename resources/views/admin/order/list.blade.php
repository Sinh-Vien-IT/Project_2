@extends('admin.index')

@section('css')
	<link rel="stylesheet" href="{!!url('public/css/list.css')!!}">
@endsection

@section('content')
	<form action = "" method = "POST" id = "listForm">
		<input type="hidden" name = "_token" value = "{!!csrf_token()!!}">
		<table>
			<thead>
				<tr>
					<th>Danh sách các đơn hàng xuất kho</td>
				</tr>
			</thead>
		</table>
		{{-- Hiện thông báo thành công hoặc thất bại --}}
		@include('admin.alert')
		<!-- Hiện phân trang -->
		{!!$orders->render()!!}
		<table>
			<thead>
				<tr>
					
					<th>Id</th>
					<th></th>
					<!-- <th>Mã Đơn Hàng</th> -->
					<th>Khách Hàng</th>
					<th>Giá Đơn Hàng (VNĐ)</th>
					<th>Hình Thức Thanh Toán</th>
					<th>Địa Chỉ Giao Hàng</th>
					<th>Dự Kiến Giao Hàng</th>
					<th>Thời Gian Giao Hàng</th>
					<th>Trạng Thái</th>
					<th>Đơn Hàng</th>
					<!-- <th>Lần chỉnh sửa trước</th> -->
				</tr>
			</thead>
			<tbody>
				<?php $id = 0?>
				@foreach($orders as $item)
				<?php $id++ ?>
				<tr>
					<td>{!!$id!!}</td>
					<td class = "center_align"><a href="{!!url('admin/order/update'.'/'.$item->id)!!}">Sửa</a></td>
					<!-- <td>DH{!!$id!!}</td> -->
					<td><a href="{!!url('admin/order/list/custormer/'.$item->id)!!}">{!!$item->custormer_name!!}</a></td>
					<td>{!!number_format($item->price,0,',','.')!!}</td>
					<td>{!!$item->payment=='card'?'Qua Thẻ':'Khi Giao Hàng'!!}</td>
					<td>{!!$item->place_receive!!}</td>
					<td>{!!$item->time_delivery!!}</td>
					<td>{!!$item->time_receive==0?'Chưa Hoàn Thành':$item->time_receive!!}</td>
					<td>{!!$item->status!!}</td>
					<td>{!!$item->description_order!!}</td>
				</tr>
				@endforeach
			</tbody>
		</table>
		<br>
	</form>
@stop