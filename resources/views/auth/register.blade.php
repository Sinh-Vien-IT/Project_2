@extends('app')

@section('content')

<div class="container-fluid">
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<div class="panel panel-default">
				<div class="panel-heading">Đăng Ký</div>
				<div class="panel-body">
					@include('admin/error')

					<form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/register') }}" enctype = "multipart/form-data">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

						<div class="form-group">
							<label class="col-md-4 control-label">Username *</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="username" value="{{ old('username') }}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">E-Mail *</label>
							<div class="col-md-6">
								<input type="email" class="form-control" name="email" value="{{ old('email') }}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Mật Khẩu *</label>
							<div class="col-md-6">
								<input type="password" class="form-control" name="password">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Xác Thực Mật Khẩu *</label>
							<div class="col-md-6">
								<input type="password" class="form-control" name="password_confirmation">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Họ Và Tên *</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="fullname" value="{{ old('fullname') }}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Giới Tính *</label>
							<div class="col-md-4" style = "">
								<input type="radio" name="gender" value = "Male" style = "margin-top:10px" checked="checked"> Nam
								<input type="radio" name ="gender" value = "Female"> Nữ
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Ảnh Đại Diện</label>
							<div class="col-md-4">
								<input type="file" name="avatar"  style="margin-top: 5px; border: 1px solid #CCCCCC; width: 290px; border-radius: 5px;" value = "{{old('avatar')}}"> 
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Công Ty</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="company" value="{{ old('company') }}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Địa Chỉ *</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="address" value="{{ old('address') }}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Số Điện Thoại *</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="phone_number" value="{{ old('phone_number') }}">
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary">
									Đăng Ký
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
