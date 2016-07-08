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
					<th>Tìm thấy <b style="font-size:20px;">{!!count($products)!!}</b> sản phẩm</td>
				</tr>
			</thead>
		</table>
		{{-- Hiện thông báo thành công hoặc thất bại --}}
		@include('admin.alert')
		{{-- Hiện phân trang --}}
		<table>
			<thead>
				<tr>
					<th>
						<input type="checkbox" name = "checkall" onclick = "toggle(this)">
					</th>
					<th>Id</th>
					<th></th>
					<th></th>
					<th>Tên sản phẩm</th>
					<th>Mô tả</th>
					<th>Giá Hiện Tại (VNĐ) </th>
					<th>Hình ảnh</th>
					<th>Số lượng</th>
					<th>Loại</th>
				</tr>
			</thead>
			<tbody>
				<?php $id = 0?>
				@foreach($products as $product)
					<?php $id++ ?>
					<tr>
						<td class = "center_align">
							<input type="checkbox" name = "check[]" value = "{!!$product->id!!}">
						</td>
						<td class = "center_align">{!!$id!!}</td>
						<td class = "center_align"><a href="{!!url('admin/product/update')!!}/{!!$product->id!!}">Sửa</a></td>
						<td class = "center_align"><a onclick = "return confirm('Bạn có muốn xoá sản phẩm {!!$product->product_name!!} không?\n')" href="{!!url('admin/product/delete')!!}/{!!$product->id!!}">Xóa</a></td>
						<td>{!!$product->product_name!!}</td>
						<td><a href="{!!url('admin/product/content/'.$product->id)!!}">Xem chi tiết</a></td>
						<td>{!!number_format($product->price_new,0,',','.')!!}</td>
						<td class = "center_align"><img src="{!!url('resources/upload/product/'.$product->id.'/'.$product->image)!!}" alt="" height="150px"></td>
						<td class="center_align">{!!$product->number!!}</td>
						<td>Điện Thoại</td>
					</tr>
				@endforeach	
				@foreach($accessories as $item)
					<?php $id++ ?>
					<tr>
						<td class = "center_align">
							<input type="checkbox" name = "check[]" value = "{!!$item->id!!}">
						</td>
						<td class = "center_align">{!!$id!!}</td>
						<td class = "center_align"><a href="{!!url('admin/accessory/update')!!}/{!!$item->id!!}">Sửa</a></td>
						<td class = "center_align"><a onclick = "return confirm('Bạn có muốn xoá phụ kiện {!!$item->name!!} không?')" href="{!!url('admin/accessory/delete')!!}/{!!$item->id!!}">Xóa</a></td>
						<td>{!!$item->name!!}</td>
						<td><a href="{!!url('admin/accessory/content/'.$item->id)!!}">Xem chi tiết</a></td>
						<td>{!!number_format($item->price_new,0,',','.')!!}</td>
						<td class="center_align"><img src="{!!asset('resources/upload/accessory/'.$item->id.'/'.$item->image)!!}" alt="" height="150px"></td>
						<td>{!!$item->number!!}</td>
						<td>{!!$item->type!!}</td>
					</tr>
				@endforeach	
			</tbody>
		</table>
		<br>
	</form>
@stop