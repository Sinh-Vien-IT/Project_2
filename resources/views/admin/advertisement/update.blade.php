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

					<form class="form-horizontal" role="form" method="POST" action=""  enctype = "multipart/form-data" id = "updateForm">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<div class="form-group">
							<label class="col-md-4 control-label">Tên Công Ty *</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="company_name" value="{{ old('company_name',isset($data->company_name)?$data->company_name:null) }}">
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label">Nội Dung Hiện Tại</label>
							<div class="col-md-3">
								<a href="{!!url('resources/upload/commercial/'.$data->id.'/'.$data->content)!!}" target="_blank">
									<img src="{!!asset('resources/upload/commercial/'.$data->id.'/'.$data->content)!!}" alt="" style="height:150px" class="form-control">
								</a>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label">Nội Dung</label>
							<div class="col-md-6">
								<input type="file" name="content"  style="margin-top: 5px; border: 1px solid #CCCCCC; width: 100%; border-radius: 5px;" value = "{{old('content')}}"> 
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label">Số điện thoại *</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="phone_number" value="{{ old('phone_number',isset($data->phone_number)?$data->phone_number:null) }}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Email *</label>
							<div class="col-md-6">
								<input type="email" class="form-control" name="email" value="{{ old('email',isset($data->email)?$data->email:null) }}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Website *</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="website" value="{{ old('webiste',isset($data->website)?$data->website:null) }}">
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label">Giá tiền *</label>
							<div class="col-md-5">
								<input type="text" class="form-control" name="cost" value="{{ old('cost',isset($data->cost)?$data->cost:null) }}">
							</div>
							<label class="control-label">VNĐ</label>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label">Thứ tự *</label>
							<div class="col-md-2">
								<input type="text" class="form-control" name="ordinal" value="{{ old('ordinal',isset($data->ordinal)?$data->ordinal:null) }}">
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-7 col-md-offset-4">
								<button type="submit" class="btn btn-primary">
									Cập nhật
								</button>
								<input type="reset" value = "Nhập lại" class="btn btn-primary" id="reset_form">
								<button type="button" class="btn btn-primary" onclick = "window.location = '../list'">
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
	
@stop

