@extends('admin.index')

@section('css')
	<link rel="stylesheet" href="{!!url('public/css/list.css')!!}">
	<style type = "text/css">
		.info_revenue{ border: 1px solid black; padding: 10px 60px; background: #4C4C4C; color: white;}
		.info_revenue span{color:red;}
	</style>
@endsection

@section('content')
	<form action = "" method = "POST" id = "listForm">
		<input type="hidden" name = "_token" value = "{!!csrf_token()!!}">
		<table>
			<thead>
				<tr>
					<th>Danh sách các đơn hàng đã bán trong thời gian từ {!!date('d/m/Y',strtotime($start))!!} tới {!!date('d/m/Y',strtotime($end))!!}</td>
				</tr>
			</thead>
		</table>
		{{-- Hiện thông báo thành công hoặc thất bại --}}
		@include('admin.alert')
		{{-- Hiện phân trang --}}
		<br>
		<table>
			<thead>
				<tr>
					
					<th>Id</th>
					<!-- <th>Mã Đơn Hàng</th> -->
					<th>Khách Hàng</th>
					<th>Giá Đơn Hàng (VNĐ)</th>
					<th>Hình Thức Thanh Toán</th>
					<th>Địa Chỉ Giao Hàng</th>
					<th>Thời Gian Giao Hàng</th>
					<th>Đơn Hàng</th>
					<!-- <th>Lần chỉnh sửa trước</th> -->
				</tr>
			</thead>
			<tbody>
				<?php $id = 0?>
				@foreach($data as $item)
				<?php $id++ ?>
				<tr>
					<td>{!!$id!!}</td>
					<!-- <td>DH{!!$id!!}</td> -->
					<td><a href="{!!url('admin/order/list/custormer/'.$item->id)!!}">{!!$item->custormer_name!!}</a></td>
					<td>{!!number_format($item->price,0,',','.')!!}</td>
					<td>{!!$item->payment=='card'?'Qua Thẻ':'Khi Giao Hàng'!!}</td>
					<td>{!!$item->place_receive!!}</td>
					<td>{!!$item->time_receive!!}</td>
					<td>{!!$item->description_order!!}</td>
				</tr>
				@endforeach
			</tbody>
		</table>
		<br>
		<div class="col-md-4 info_revenue pull-right">
			<label class="control-label">Tổng Doanh Thu: <span>{!!number_format($total,0,',','.')!!}</span> VNĐ</label>
		</div>
		<br>
		<input type="button" name = "add_new" value = "Quay Lại" class = "btn btn-success" onclick = "window.location='./list'">
	</form>
@stop