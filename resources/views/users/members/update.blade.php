@extends('users.master')

@section('content')
<style type="text/css">
	.panel-default>.panel-heading{background:#69D2E7;}
</style>
<br>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading center_align">Cập nhật thông tin</div>
				<div class="panel-body">
					<!-- Hiển thị thông báo thành công hoặc thất bại -->
					@if(Session::has('flash_message'))
						<div class = "alert alert-{!!Session::get('flash_level')!!} message">
							{!!Session::get('flash_message')!!}
						</div>
					@endif
					<!-- Hiện thông báo khi gặp lỗi về việc nhập dữ liệu đầu vào -->
					@if (count($errors) > 0)
						<div class="alert alert-danger message">
							<strong>Lỗi!</strong> Xảy ra một vài vấn đề với dữ liệu nhập vào<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif

					<form class="form-horizontal" role="form" method="POST" action="{{ route('user.member.postUpdate') }}" id = "updateForm" enctype = "multipart/form-data">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<input type="hidden" name="id" value = "{!!$user->id!!}">
						<div class="form-group">
							<label class="col-md-4 control-label">Username *</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="username" value="{{$user->username}}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">E-Mail *</label>
							<div class="col-md-6">
								<input type="email" class="form-control" name="email" value="{{$user->email}}" disabled>
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Mật Khẩu Mới </label>
							<div class="col-md-6">
								<input type="password" class="form-control" name="password">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Xác Nhận Mật Khẩu </label>
							<div class="col-md-6">
								<input type="password" class="form-control" name="password_confirmation">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Họ Và Tên *</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="fullname" value="{{$user->fullname}}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Giới Tính *</label>
							<div class="col-md-4" style = "">
								@if($user->gender==1) 
									<input type="radio" name="gender" value = "Male" style = "margin-top:10px" checked="checked"> Nam
									<input type="radio" name ="gender" value = "Female"> Nữ
								@else
									<input type="radio" name="gender" value = "Male" style = "margin-top:10px"> Nam
									<input type="radio" name ="gender" value = "Female"  checked="checked"> Nữ
								@endif
							</div>
						</div>
						
						<div class="form-group">
							<label class="col-md-4 control-label">Avatar Hiện Tại</label>
							<div class="col-md-6">
								<img src="{!!asset('resources/upload/avatar/'.$user->id.'/'.$user->avatar)!!}" alt="" style="height:100px;width:100px" class="form-control" >
							</div>
						</div>
								
						<div class="form-group">
							<label class="col-md-4 control-label">Avatar</label>
							<div class="col-md-4">
								<input type="file" name="avatar"  style="margin-top: 5px; border: 1px solid #CCCCCC; width: 290px; border-radius: 5px;" value = "{{old('avatar')}}"> 
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Công Ty</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="company" value="{{ $user->company }}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Địa Chỉ *</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="address" value="{{ $user->address }}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Số Điện Thoại *</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="phone_number" value="{{ $user->phone_number }}">
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-8 col-md-offset-4">
								<button type="submit" class="btn btn-primary">
									Cập nhật
								</button>
								<input type="reset" value = "Nhập lại" class="btn btn-primary" id="reset_form">
								<button type="button" class="btn btn-primary" onclick = "window.location = '../../member'">
									Quay lại
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<br><br>
@stop