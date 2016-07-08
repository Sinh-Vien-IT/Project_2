@extends('admin.index')

@section('content')
	<div class="container-fluid">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading center_align">Cập Nhật Phụ Kiện</div>
				<div class="panel-body">
					<!-- Hiển thị thông báo thành công hoặc thất bại, class message để cho thông báo ẩn hiện -->
					@include('admin.alert')
					@include('admin.error')

					<form class="form-horizontal" role="form" method="POST" action=""  enctype = "multipart/form-data">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

						<div class="form-group">
							<label class="col-md-3 control-label">Tên Phụ Kiện *</label>
							<div class="col-md-7">
								<input type="text" class="form-control" name="name" value="{{ old('name',isset($data->name)?$data->name:null) }}">
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
							<label class="col-md-3 control-label">Giá Mới </label>
							<div class="col-md-4">
								<input type="text" class="form-control" name="price_new" value="{{ old('price_new',isset($data->price_new)?$data->price_new:$data->price) }}">
							</div>
							<label class="control-label">VNĐ</label>
						</div>
						<div class="form-group">
							<label class="col-md-3 control-label">Loại *</label>
							<div class="col-md-5">
								<select name="type" id="" class="form-control">
									<option value="Thẻ Nhớ" {!!old('type',isset($data->type)?$data->type:null)=='Thẻ Nhớ'?'selected':null!!}>Thẻ Nhớ</option>
									<option value="Bao Da" {!!old('type',isset($data->type)?$data->type:null)=='Bao Da'?'selected':null!!}>Bao Da</option>
									<option value="Dán Màn Hình" {!!old('type',isset($data->type)?$data->type:null)=='Dán Màn Hình'?'selected':null!!}>Dán Màn Hình</option>
									<option value="Loa" {!!old('type',isset($data->type)?$data->type:null)=='Loa'?'selected':null!!}>Loa</option>
									<option value="Tai Nghe" {!!old('type',isset($data->type)?$data->type:null)=='Tai Nghe'?'selected':null!!}>Tai Nghe</option>
								</select>
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-3 control-label">Hình Hiện Tại</label>
							<div class="col-md-3">
								<img src="{!!asset('resources/upload/accessory/'.$data->id.'/'.$data->image)!!}" alt="" style="height:150px" class="form-control">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-3 control-label">Hình Ảnh </label>
							<div class="col-md-5">
								<input type="file" name="image"  style="margin-top: 5px; border: 1px solid #CCCCCC; width: 100%; border-radius: 5px;float:left" value = "{{old('image')}}"> 
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