@extends('admin.index')

@section('css')
	<link rel="stylesheet" href="{!!url('public/css/list.css')!!}">
@endsection

@section('content')
	<form action = "{!!route('admin.news.postDelete')!!}" method = "POST" id = "listForm">
		<input type="hidden" name = "_token" value = "{!!csrf_token()!!}">
		<table>
			<thead>
				<tr>
					<th>Tin tức công nghệ</td>
				</tr>
			</thead>
		</table>
		{{-- Hiện thông báo thành công hoặc thất bại --}}
		@include('admin.alert')
		{{-- Hiện phân trang --}}
		{!!$data->render()!!}
		<table>
			<thead>
				<tr>
					<th>
						<input type="checkbox" name = "checkall" onclick = "toggle(this)">
					</th>
					<th>STT</th>
					<th></th>
					<th></th>
					<th>Tiêu Đề </th>
					<th>Hình Ảnh</th>
					<th>Chi Tiết</th>
					<th>Loại</th>
					<th>Ngày Tạo Lập</th>
					<th>Lần Chỉnh Sửa Trước</th>
				</tr>
			</thead>
			<tbody>
				<?php $id = 0?>
				@foreach($data as $item)
					<?php $id++ ?>
					<tr>
						<td class = "center_align">
							<input type="checkbox" name = "check[]" value = "{!!$item->id!!}">
						</td>
						<td class = "center_align">{!!$id!!}</td>
						<td class = "center_align"><a href="{!!url('admin/news/update'.'/'.$item->id)!!}">Sửa</a></td>
						<td class = "center_align"><a onclick = "return confirm('Bạn có muốn xoá tin tức {!!$item->title!!} không?" href="{!!url('admin/news/delete'.'/'.$item->id)!!}">Xóa</a></td>
						<td>{!!$item->title!!}</td>
						<td class = "center_align"><img src="{!!url('resources/upload/news/'.$item->id.'/'.$item->image)!!}" alt="" height="45px" width="45px"></td>
						<td><a href="{!!url('admin/news/content/'.$item->id)!!}">Xem chi tiết</a></td>
						<td>{!!$item->type!!}</td>
						<td>{!! $item->created_at !!}</td>
                		<td>{!! $item->updated_at !!}</td>
					</tr>
				@endforeach		
			</tbody>
		</table>
		<br>
		<input type="submit" name = "delete_choose" value = "Xóa chọn" class = "btn btn-success" onclick = "return confirm('Bạn có muốn xóa các tin tức được chọn?')">
		
		<input type="button" name = "add_new" value = "Thêm mới" class = "btn btn-success" onclick = "window.location='./add'">
	</form>
@stop