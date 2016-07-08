@extends('admin.index')

@section('content')
	<div class="container-fluid">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading center_align">Thêm Phụ Kiện</div>
				<div class="panel-body">
					<!-- Hiển thị thông báo thành công hoặc thất bại, class message để cho thông báo ẩn hiện -->
					@include('admin.alert')
					@include('admin.error')

					<form class="form-horizontal" role="form" method="POST" action="{{ route('admin.accessory.postAdd') }}"  enctype = "multipart/form-data">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

						<div class="form-group">
							<label class="col-md-3 control-label">Tên Phụ Kiện *</label>
							<div class="col-md-7">
								<input type="text" class="form-control" name="name" value="{{ old('name') }}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-3 control-label">Mô Tả</label>
							<div class="col-md-7">
								<textarea class="form-control" name="description" value="">{{ old('description') }}</textarea>
								<script type="text/javascript">ckeditor("description")</script>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-3 control-label">Giá Tiền *</label>
							<div class="col-md-4">
								<input type="text" class="form-control" name="price" value="{{ old('price') }}">
							</div>
							<label class="control-label">VNĐ</label>
						</div>
						<div class="form-group">
							<label class="col-md-3 control-label">Loại *</label>
							<div class="col-md-5">
								<select name="type" id="" class="form-control">
									<option value="Thẻ Nhớ" {!!old('type')=='Thẻ Nhớ'?'selected':null!!}>Thẻ Nhớ</option>
									<option value="Bao Da" {!!old('type')=='Bao Da'?'selected':null!!}>Bao Da</option>
									<option value="Dán Màn Hình" {!!old('type')=='Dán Màn Hình'?'selected':null!!}>Dán Màn Hình</option>
									<option value="Loa" {!!old('type')=='Loa'?'selected':null!!}>Loa</option>
									<option value="Tai Nghe" {!!old('type')=='Tai Nghe'?'selected':null!!}>Tai Nghe</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-3 control-label">Hình Ảnh *</label>
							<div class="col-md-5">
								<input type="file" name="image"  style="margin-top: 5px; border: 1px solid #CCCCCC; width: 100%; border-radius: 5px;float:left" value = "{{old('image')}}"> 
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-3">
								<button type="submit" class="btn btn-primary">
									Thêm Phụ Kiện
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