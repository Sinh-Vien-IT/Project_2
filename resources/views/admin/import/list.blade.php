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
					<th>Danh sách các đơn hàng nhập kho</td>
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
					<!-- <th>
						<input type="checkbox" name = "checkall" onclick = "toggle(this)">
					</th> -->
					<th>Id</th>
					<!-- Hủy tính năng sửa, xóa đơn nhập kho -->
					<!-- 
					<th></th>
					<th></th>
					 -->
					 <th>Mã Đơn Hàng</th>
					<th>Sản Phẩm</th>
					<th>Số lượng</th>
					<th>Giá tiền (VNĐ)</th>
					<th>Nhà cung cấp</th>
					<th>Người xác nhận</th>
					<th>Ngày tạo lập</th>
					<!-- <th>Lần chỉnh sửa trước</th> -->
				</tr>
			</thead>
			<tbody>
				<?php $id = 0?>
				@foreach($data as $item)
					<?php $id++ ?>
					<tr>
						<!-- <td class = "center_align">
							<input type="checkbox" name = "check[]" value = "{!!$item->id!!}">
						</td> -->
						<td class = "center_align">{!!$id!!}</td>
						<!-- <td class = "center_align"><a onclick = "return confirm('Lưu ý: Khi cập nhật lại đơn nhập hàng có thể sẽ LÀM THAY ĐỔI số lượng của các sản phẩm liên quan\nBạn vẫn muốn tiếp tục?')"href="{!!url('admin/import/update')!!}/{!!$item->id!!}">Sửa</a></td>
						<td class = "center_align"><a onclick = "return confirm('Lưu ý: Khi xóa đơn nhập hàng sẽ KHÔNG làm thay đổi số lượng sản phẩm mà bạn đã thêm\nBạn có muốn xoá đơn nhập hàng {!!$item->code!!} không?')" href="{!!url('admin/import/delete')!!}/{!!$item->id!!}">Xóa</a></td> -->
						<td>{!!$item->code!!}</td>
						<td>{!!$item->type=='product'?DB::table('products')->where('id',$item->product_id)->first()->product_name:DB::table('accessories')->where('id',$item->product_id)->first()->name!!}</td>
						<td>{!!$item->number!!}</td>
						<td>{!!number_format($item->price,0,',','.')!!}</td>
						<td>{!!$item->suplier!!}</td>
						<td>{!!DB::table('users')->where('id',$item->manager_id)->first()->fullname!!}</td>
						<td>{!!$item->created_at!!}</td>
						<!-- <td>{!!$item->updated_at!!}</td> -->
					</tr>
				@endforeach		
			</tbody>
		</table>
		<br>
		<!-- <input type="submit" name = "delete_choose" value = "Xóa chọn" class = "btn btn-success" onclick = "return confirm('Bạn có muốn xóa các đơn hàng được chọn?')"> -->
		<input type="button" name = "add_new" value = "Thêm đơn hàng điện thoại" class = "btn btn-success" onclick = "window.location='./add/product'">
		<input type="button" name = "add_new" value = "Thêm đơn hàng phụ kiện" class = "btn btn-success" onclick = "window.location='./add/accessory'">
	</form>
@stop