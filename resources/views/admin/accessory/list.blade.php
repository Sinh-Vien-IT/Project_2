@extends('admin.index')

@section('css')
	<link rel="stylesheet" href="{!!url('public/css/list.css')!!}">
@endsection

@section('content')
	<form action = "{!!route('admin.accessory.postDelete')!!}" method = "POST" id = "listForm">
		<input type="hidden" name = "_token" value = "{!!csrf_token()!!}">
		<table>
			<thead>
				<tr>
					<th>Danh sách các phụ kiện</td>
				</tr>
			</thead>
		</table>
		{{-- Hiện thông báo thành công hoặc thất bại --}}
		@include('admin.alert')
		{{-- Hiện phân trang --}}
		{!!$accessories->render()!!}
		<table>
			<thead>
				<tr>
					<th>
						<input type="checkbox" name = "checkall" onclick = "toggle(this)">
					</th>
					<th>Id</th>
					<th></th>
					<th></th>
					<th>Tên Phụ Kiện</th>
					<th>Hình Ảnh</th>
					<th>Giá Hiện Tại (VNĐ)</th>
					<th>Số Lượng</th>
					<th>Loại</th>
					<th>Chi Tiết</th>
					<th>Ngày tạo lập</th>
					<th>Lần chỉnh sửa trước</th>
				</tr>
			</thead>
			<tbody>
				<?php $id = 0?>
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
						<td class="center_align"><img src="{!!asset('resources/upload/accessory/'.$item->id.'/'.$item->image)!!}" alt="" height="150px"></td>
						<td>{!!number_format($item->price_new,0,',','.')!!}</td>
						<td>{!!$item->number!!}</td>
						<td>{!!$item->type!!}</td>
						<td><a href="{!!url('admin/accessory/content/'.$item->id)!!}">Xem chi tiết</a></td>
						<td>{!!$item->created_at!!}</td>
						<td>{!!$item->updated_at!!}</td>
					</tr>
				@endforeach		
			</tbody>
		</table>
		<br>
		<input type="submit" name = "delete_choose" value = "Xóa chọn" class = "btn btn-success" onclick = "return confirm('Bạn có muốn xóa các phụ kiện được chọn?')">
		<input type="button" name = "add_new" value = "Thêm mới" class = "btn btn-success" onclick = "window.location='./add'">
	</form>
@stop