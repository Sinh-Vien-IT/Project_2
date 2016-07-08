@extends('admin.index')

@section('css')
	<link rel="stylesheet" href="{!!url('public/css/list.css')!!}">
@endsection

@section('content')
	<form action = "{!!route('admin.member.postDelete')!!}" method = "POST" id = "listForm">
		<input type="hidden" name = "_token" value = "{!!csrf_token()!!}">
		<table>
			<thead>
				<tr>
					<th>Danh sách các thành viên</td>
				</tr>
			</thead>
		</table>
		{{-- Hiện thông báo thành công hoặc thất bại --}}
		@include('admin.alert')
		{{-- Hiện phân trang --}}
		@if(Auth::user()->role=='admin')
		{!!$users->render()!!}
		<table>
			<thead>
				<tr>
					<th>
						<input type="checkbox" name = "checkall" onclick = "toggle(this)">
					</th>
					<th>Id</th>
					<th></th>
					<th></th>
					<th>Username</th>
					<th>Email</th>
					<th>Fullname</th>
					<th>Gender</th>
					<th>Avatar</th>
					<th>Company</th>
					<th>Address</th>
					<th>Phone Number</th>
					<th>Role</th>
					<th>Trạng thái</th>
					{{-- <th>Ngày tạo lập</th>
					<th>Lần chỉnh sửa trước</th> --}}
				</tr>
			</thead>
			<tbody>
				<?php $id = 0?>
				@foreach($users as $user)
					<?php $id++ ?>
					<tr>
						<td class = "center_align">
							<input type="checkbox" name = "check[]" value = "{!!$user->id!!}">
						</td>
						<td class = "center_align">{!!$id!!}</td>
						<td class = "center_align"><a href="{!!url('admin/member/update')!!}/{!!$user->id!!}">Sửa</a></td>
						<td class = "center_align"><a onclick = "return confirm('Lưu ý: Nếu xóa tài khoản thành viên tài khoản đó sẽ vĩnh viễn bị mất, nếu xóa tài khoản manager thì chỉ là xóa tạm thời\nBạn có muốn xoá tài khoản của {!!$user->username!!} không?')" href="{!!url('admin/member/delete')!!}/{!!$user->id!!}">Xóa</a></td>
						<td>{!!$user->username!!}</td>
						<td>{!!$user->email!!}</td>
						<td>{!!$user->fullname!!}</td>
						<td>{!!$user->gender==1?'Nam':'Nữ'!!}</td>
						<td class = "center_align"><img src="{!!File::exists('resources/upload/avatar/'.$user->id.'/'.$user->avatar)?url('resources/upload/avatar/'.$user->id.'/'.$user->avatar):url('resources/upload/avatar/default.jpg')!!}" alt="" height="45px" width="45px"></td>
						<td>{!!empty($user->company)?'Không có':$user->company!!}</td>
						<td>{!!$user->address!!}</td>
						<td>{!!$user->phone_number!!}</td>
						<td>{!!$user->role!!}</td>
						<td>
							@if($user->active==0)
								Không hoạt động
							@else
								Hoạt động
							@endif	
						</td>
						<!-- <td>{!!$user->created_at!!}</td>
						<td>{!!$user->updated_at!!}</td> -->
					</tr>
				@endforeach		
			</tbody>
		</table>
		<br>
		<input type="submit" name = "delete_choose" value = "Xóa chọn" class = "btn btn-success" onclick = "return confirm('Bạn có muốn xóa các thành viên được chọn?')">
		<input type="button" name = "add_new" value = "Thêm mới" class = "btn btn-success" onclick = "window.location='./add'">
		@else
		{!!$user_members->render()!!}
			<table>
				<thead>
					<tr>
						<th>Id</th>
						<th>Username</th>
						<th>Email</th>
						<th>Họ tên</th>
						<th>Giới tính</th>
						<th>Avatar</th>
						<th>Công ty</th>
						<th>Địa chỉ</th>
						<th>Số điện thoại</th>
						<th>Trạng thái</th>
						<th>Lịch sử giao dịch</th>
						{{-- <th>Ngày tạo lập</th>
						<th>Lần chỉnh sửa trước</th> --}}
					</tr>
				</thead>
				<tbody>
					<?php $id = 0?>
					@foreach($user_members as $user)
						<?php $id++ ?>
						<tr>
							<td class = "center_align">{!!$id!!}</td>
							<td>{!!$user->username!!}</td>
							<td>{!!$user->email!!}</td>
							<td>{!!$user->fullname!!}</td>
							<td>{!!$user->gender==1?'Nam':'Nữ'!!}</td>
							<td class = "center_align"><img src="{!!url('resources/upload/avatar/'.$user->id)!!}/{!!$user->avatar!!}" alt="" height="45px" width="45px"></td>
							<td>{!!empty($user->company)?'Không có':$user->company!!}</td>
							<td>{!!$user->address!!}</td>
							<td>{!!$user->phone_number!!}</td>
							<td>
							@if($user->active==0)
								Không hoạt động
							@else
								Hoạt động
							@endif	
						</td>
							<td class="center_align"><a href="{!!url('admin/member/history/'.$user->id)!!}">Xem</a></td>
						</tr>
					@endforeach		
				</tbody>
			</table>

		@endif
	</form>
@stop