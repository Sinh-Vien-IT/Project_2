@extends('admin.index')

@section('content')
	<div class="container-fluid">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading center_align">Thêm Sản Phẩm</div>
				<div class="panel-body">
					<!-- Hiển thị thông báo thành công hoặc thất bại, class message để cho thông báo ẩn hiện -->
					@include('admin.alert')
					@include('admin.error')

					<form class="form-horizontal" role="form" method="POST" action="{{ route('admin.product.postAdd') }}"  enctype = "multipart/form-data">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

						<div class="form-group">
							<label class="col-md-3 control-label">Hãng Sản Xuất *</label>
							<div class="col-md-7">
								<select name="company_id" id="selectbox">
									<option value="">Hãy Chọn Hãng Sản Xuất</option>
									@foreach($data as $item)
										<option value="{!!$item->id!!}" 
										{!!old('company_id')==$item->id?'selected':null!!}
										>-- {!!$item->company_name!!}</option>
									@endforeach
								</select> 
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-3 control-label">Tên Sản Phẩm *</label>
							<div class="col-md-7">
								<input type="text" class="form-control" name="product_name" value="{{ old('product_name') }}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-3 control-label">Màu sắc</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="color" value="{{ old('color') }}">
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-3 control-label">Màn hình</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="monitor" value="{{ old('monitor') }}">
							</div>
							<label class="control-label">inch</label>
						</div>
						<div class="form-group">
							<label class="col-md-3 control-label">Ram</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="ram" value="{{ old('ram') }}">
							</div>
							<label class="control-label">GB</label>
						</div>
						<div class="form-group">
							<label class="col-md-3 control-label">Rom</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="rom" value="{{ old('rom') }}">
							</div>
							<label class="control-label">GB</label>
						</div>
						<div class="form-group">
							<label class="col-md-3 control-label">Chip</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="chip" value="{{ old('chip') }}">
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-3 control-label">HĐH *</label>
							<div class="col-md-6">
								<select name="os" id="selectbox1">
									<option value="">Hãy Chọn Hệ Điều Hành</option>
									@foreach($os as $item)
										<option value="{!!$item->name!!}" 
										{!!old('os')==$item->name?'selected':null!!}
										>-- {!!$item->name!!}</option>
									@endforeach
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-3 control-label">Camera</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="camera" value="{{ old('camera') }}">
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-3 control-label">Trọng lượng</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="weight" value="{{ old('weight') }}">
							</div>
							<label class="control-label">g</label>
						</div>
						<div class="form-group">
							<label class="col-md-3 control-label">Pin</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="pin" value="{{ old('pin') }}"> 
							</div>
							<label class="control-label">mAh</label>
						</div>
						<div class="form-group">
							<label class="col-md-3 control-label">Giá *</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="price" value="{{ old('price') }}">
							</div>
							<label class="control-label">VNĐ</label>
						</div>
						<div class="form-group">
							<label class="col-md-3 control-label">Mô Tả</label>
							<div class="col-md-7">
								<textarea class="form-control" name="description" value="">{{ old('description') }}</textarea>
								<script type="text/javascript">ckeditor("description")</script>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-3 control-label">Hình Ảnh</label>
							<div class="col-md-6">
								<input type="file" name="image"  style="margin-top: 5px; border: 1px solid #CCCCCC; width: 100%; border-radius: 5px;float:left" value = "{{old('image')}}"> 
							</div>
							<button type="button" class="btn btn-primary" id="add_detail">+</button>
						</div>
						<div id="insert"></div>
						
						<div class="form-group">
							<div class="col-md-6 col-md-offset-3">
								<button type="submit" class="btn btn-primary">
									Thêm Sản Phẩm
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