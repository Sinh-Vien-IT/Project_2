@extends('admin.index')

@section('content')
	<div class="container-fluid">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading center_align">Cập Nhật Hãng Sản Xuất</div>
				<div class="panel-body">
					<!-- Hiển thị thông báo thành công hoặc thất bại, class message để cho thông báo ẩn hiện -->
					@include('admin.alert')
					@include('admin.error')

					<form class="form-horizontal" role="form" method="POST" action=""  enctype = "multipart/form-data">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

						<div class="form-group">
							<label class="col-md-3 control-label">Tên Hệ Điều Hành *</label>
							<div class="col-md-7">
								<input type="text" class="form-control" name="name" value="{{ old('name', isset($data->name)?$data->name:null) }}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-3 control-label">Mô Tả</label>
							<div class="col-md-7">
								<textarea class="form-control" name="description" value="">{{ old('description',isset($data->description)?$data->description:null) }}</textarea>
								<script type="text/javascript">ckeditor("description")</script>
							</div>
						</div>
						
						<div class="form-group">
							<div class="col-md-7 col-md-offset-3">
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