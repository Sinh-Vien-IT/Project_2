@extends('admin.index')

@section('content')
	<div class="container-fluid">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading center_align">Thêm Tin Tức</div>
				<div class="panel-body">
					<!-- Hiển thị thông báo thành công hoặc thất bại, class message để cho thông báo ẩn hiện -->
					@include('admin.alert')
					@include('admin.error')

					<form class="form-horizontal" role="form" method="POST" action="{{ route('admin.news.postAdd') }}"  enctype = "multipart/form-data">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

						<div class="form-group">
							<label class="col-md-3 control-label">Tiêu Đề *</label>
							<div class="col-md-7">
								<input type="text" class="form-control" name="title" value="{{ old('title') }}">
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
								<textarea class="form-control" rows="6" cols="20" name="content_news">{!!old('content_news')!!}</textarea>
								<script type = "text/javascript">ckeditor('content_news')</script>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-3 control-label">Loại *</label>
							<div class="col-md-7" style = "">
								<input type="radio" name="type" value = "Công Nghệ" style = "margin-top:10px" checked="checked"> Công Nghệ
								<input type="radio" name ="type" value = "Giải Trí" {!!old('type')=='Giải Trí'?'checked':null!!}> Giải Trí
								<input type="radio" name ="type" value = "Khuyễn Mãi" {!!old('type')=='Khuyễn Mãi'?'checked':null!!}> Khuyễn Mãi
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-7 col-md-offset-3">
								<button type="submit" class="btn btn-primary">
									Thêm Tin Tức
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