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
					<th>Danh sách các sản phẩm đã bán trong thời gian từ {!!date('d/m/Y',strtotime($start))!!} tới {!!date('d/m/Y',strtotime($end))!!}</td>
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
					<th>Tên Sản Phẩm</th>
					@if($type=='product')
					<th>Hãng Sản Xuất</th>
					@endif
					<th>Số lượng bán</th>
				</tr>
			</thead>
			<tbody>
				<?php $id = 0?>
				@foreach($data as $item)
					<?php $id++; ?>
					<tr>
						<td class = "center_align">{!!$id!!}</td>
						@if($type=='product')
						<td>{!!$item->product_name!!}</td>
						<td>{!!$item->company_name!!}</td>
						@else
						<td>{!!$item->name!!}</td>
						@endif
						<td>{!!$item->sum_number!!}</td>
					</tr>
				@endforeach	
			</tbody>
		</table>
		<br>
		<input type="button" name = "add_new" value = "Quay Lại" class = "btn btn-success" onclick = "window.location='./hot'">
	</form>
@stop