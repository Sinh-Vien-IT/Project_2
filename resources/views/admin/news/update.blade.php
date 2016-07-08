@extends('admin.index')

@section('content')
	<div class="container-fluid">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading center_align">Cập nhật tin tức</div>
				<div class="panel-body">
					<!-- Hiển thị thông báo thành công hoặc thất bại, class message để cho thông báo ẩn hiện -->
					@include('admin.alert')
					@include('admin.error')

					<form class="form-horizontal" role="form" method="POST" action=""  enctype = "multipart/form-data" id = "updateForm">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<div class="form-group">
							<label class="col-md-3 control-label">Tiêu Đề *</label>
							<div class="col-md-7">
								<input type="text" class="form-control" name="title" value="{{ old('title',isset($data->title)?$data->title:null) }}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-3 control-label">Hình Ảnh *</label>
							<div class="col-md-7">
								<input type="file" name="image"  style="margin-top: 5px; border: 1px solid #CCCCCC; width: 100%; border-radius: 5px;" value = "{{old('image')}}"> 
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-3 control-label">Chi Tiết</label>
							<div class="col-md-7">
								<textarea class="form-control" rows="6" cols="20" name="content_news">{!!old('content_news',isset($data->content)?$data->content:null)!!}</textarea>
								<script type = "text/javascript">ckeditor('content_news')</script>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-3 control-label">Loại *</label>
							<div class="col-md-7" style = "">
								<input type="radio" name="type" value = "Công Nghệ" style = "margin-top:10px" {!!$data->type=='Công Nghệ'?'checked':null!!} > Công Nghệ
								<input type="radio" name ="type" value = "Giải Trí" {!!$data->type=='Giải Trí'?'checked':null!!}> Giải Trí
								<input type="radio" name ="type" value = "Khuyễn Mãi" {!!$data->type=='Khuyễn Mãi'?'checked':null!!}> Khuyễn Mãi
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