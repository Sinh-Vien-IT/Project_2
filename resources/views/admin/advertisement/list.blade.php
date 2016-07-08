@extends('admin.index')

@section('css')
	<link rel="stylesheet" href="{!!url('public/css/list.css')!!}">
@endsection

@section('content')
	<form action = "{!!route('admin.advertisement.postDelete')!!}" method = "POST" id = "listForm">
		<input type="hidden" name = "_token" value = "{!!csrf_token()!!}">
		<table>
			<thead>
				<tr>
					<th>Danh sách quảng cáo</td>
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
					<th>Id</th>
					<th></th>
					<th></th>
					<th>Tên công ty</th>
					<th>Nội dung quảng cáo</th>
					<th>Số điện thoại</th>
					<th>Email</th>
					<th>Website</th>
					<th>Giá tiền(VNĐ)</th>
					<th>Vị trí</th>
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
						<td class = "center_align"><a href="{!!url('admin/advertisement/update')!!}/{!!$item->id!!}">Sửa</a></td>
						<td class = "center_align"><a onclick = "return confirm('Bạn có muốn xoá quảng cáo của {!!$item->company_name!!} không?')" href="{!!url('admin/advertisement/delete')!!}/{!!$item->id!!}">Xóa</a></td>
						<td>{!!$item->company_name!!}</td>
						<td class = "center_align"><img src="{!!url('resources/upload/commercial/'.$item->id.'/'.$item->content)!!}" alt="" height="100px" width="200px"> </td>
						<td>{!!$item->phone_number!!}</td>
						<td>{!!$item->email!!}</td>
						<td><a href="{!!$item->website!!}" target="_blank">{!!$item->website!!}</a></td>
						<td>{!!number_format($item->cost,0,',','.')!!}</td>
						<td>{!!$item->ordinal!!}</td>
					</tr>
				@endforeach		
				
			</tbody>
		</table>
		<br>
		<input type="submit" name = "delete_choose" value = "Xóa chọn" class = "btn btn-success" onclick = "return confirm('Bạn có muốn xóa các quảng cáo được chọn?')">
		<input type="button" name = "add_new" value = "Thêm mới" class = "btn btn-success" onclick = "window.location='./add'">
	</form>
@stop