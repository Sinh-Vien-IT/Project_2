@extends('admin.index')

@section('css')
	<link rel="stylesheet" href="{!!url('public/css/list.css')!!}">
@endsection

@section('content')
	<form action = "{!!route('admin.product.postDelete')!!}" method = "POST" id = "listForm">
		<input type="hidden" name = "_token" value = "{!!csrf_token()!!}">
		<table>
			<thead>
				<tr>
					<th>Danh sách các sản phẩm điện thoại</td>
				</tr>
			</thead>
		</table>
		{{-- Hiện thông báo thành công hoặc thất bại --}}
		@include('admin.alert')
		{{-- Hiện phân trang --}}
		{!!$products->render()!!}
		<table>
			<thead>
				<tr>
					@if($edit)
					<th>
						<input type="checkbox" name = "checkall" onclick = "toggle(this)">
					</th>
					<th>Id</th>
					<th></th>
					<th></th>
					@else
					<th>Id</th>
					@endif
					<th>Tên sản phẩm</th>
					<th>Mô tả</th>
					<th>Giá Hiện Tại (VNĐ) </th>
					<th>Hình ảnh</th>
					<th>Số lượng</th>
				</tr>
			</thead>
			<tbody>
				<?php $id = 0?>
				@foreach($products as $product)
					<?php $id++ ?>
					<tr>
					@if($edit)
						<td class = "center_align">
							<input type="checkbox" name = "check[]" value = "{!!$product->id!!}">
						</td>
						<td class = "center_align">{!!$id!!}</td>
						<td class = "center_align"><a href="{!!url('admin/product/update')!!}/{!!$product->id!!}">Sửa</a></td>
						<td class = "center_align"><a onclick = "return confirm('Bạn có muốn xoá sản phẩm {!!$product->product_name!!} không?\n')" href="{!!url('admin/product/delete')!!}/{!!$product->id!!}">Xóa</a></td>
					@else
						<td class="center_align">{!!$id!!}</td>
					@endif
						<td>{!!$product->product_name!!}</td>
						<td><a href="{!!url('admin/product/content/'.$product->id)!!}">Xem chi tiết</a>
						</td>
						<td>{!!number_format($product->price_new,0,',','.')!!}</td>
						<td class = "center_align"><img src="{!!url('resources/upload/product/'.$product->id.'/'.$product->image)!!}" alt="" height="100px"></td>
						<td class="center_align">{!!$product->number!!}</td>
					</tr>
				@endforeach		
			</tbody>
		</table>
		<br>
		@if($edit)
		<input type="submit" name = "delete_choose" value = "Xóa chọn" class = "btn btn-success" onclick = "return confirm('Bạn có muốn xóa các sản phẩm được chọn?')">
		@endif
		<input type="button" name = "add_new" value = "Thêm mới" class = "btn btn-success" onclick = "window.location='./add'">
	</form>
@stop