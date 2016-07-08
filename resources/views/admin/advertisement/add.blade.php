@extends('admin.index')

@section('content')
	<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading center_align">Thêm Quảng Cáo</div>
				<div class="panel-body">
					<!-- Hiển thị thông báo thành công hoặc thất bại, class message để cho thông báo ẩn hiện -->
					@include('admin.alert')
					@include('admin.error')

					<form class="form-horizontal" role="form" method="POST" action="{{ route('admin.advertisement.postAdd') }}"  enctype = "multipart/form-data">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<div class="form-group">
							<label class="col-md-4 control-label">Tên công ty *</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="company_name" value="{{ old('company_name') }}">
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label">Nội dung *</label>
							<div class="col-md-6">
								<input type="file" name="content"  style="margin-top: 5px; border: 1px solid #CCCCCC; width: 100%; border-radius: 5px;" value = "{{old('content')}}"> 
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label">Số điện thoại *</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="phone_number" value="{{ old('phone_number') }}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Email *</label>
							<div class="col-md-6">
								<input type="email" class="form-control" name="email" value="{{ old('email') }}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Website *</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="website" value="{{ old('webiste') }}" placeholder="VD: http://www.dienthoai321.com">
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label">Giá tiền *</label>
							<div class="col-md-5">
								<input type="text" class="form-control" name="cost" value="{{ old('cost') }}">
							</div>
							<label class="control-label">VNĐ</label>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label">Thứ tự *</label>
							<div class="col-md-2">
								<input type="text" class="form-control" name="ordinal" value="{{ old('ordinal') }}">
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary">
									Thêm Quảng Cáo
								</button>
								<button type = "button" class = "btn btn-primary" onclick = "window.location='./list'">
									Quay Lại
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
	
@stop

