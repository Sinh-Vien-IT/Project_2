@extends('admin.index')

@section('content')
<style type = "text/css">
	.img_box{position:relative;}
	.icon-del{border-radius:20px;position:absolute;top:0px;right:0px;}
</style>
	<div class="container-fluid">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading center_align">Cập Nhật Sản Phẩm</div>
				<div class="panel-body">
					<!-- Hiển thị thông báo thành công hoặc thất bại, class message để cho thông báo ẩn hiện -->
					@include('admin.alert')
					@include('admin.error')

					<form class="form-horizontal" role="form" method="POST" action=""  enctype = "multipart/form-data" id = "updateForm">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<div class="form-group">
							<label class="col-md-3 control-label">Hãng Sản Xuất *</label>
							<div class="col-md-7">
								<select name="company_id" id="selectbox">
									<option value="">Hãy Chọn Hãng Sản Xuất</option>
									@foreach($data as $item)
										<option value="{!!$item->id!!}" 
										{!!($item->id==$product->company_id)?'selected':null!!}

										>-- {!!$item->company_name!!}</option>
									@endforeach
								</select> 
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-3 control-label">Tên Sản Phẩm *</label>
							<div class="col-md-7">
								<input type="text" class="form-control" name="product_name" value="{{ old('product_name',isset($product->product_name)?$product->product_name:null) }}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-3 control-label">Màu sắc</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="color" value="{{ old('color',isset($product->color)?$product->color:null) }}">
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-3 control-label">Màn hình</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="monitor" value="{{ old('monitor',isset($product->monitor_size)?substr($product->monitor_size,0,strlen($product->monitor_size)-4):null) }}">
							</div>
							<label class="control-label">inch</label>
						</div>
						<div class="form-group">
							<label class="col-md-3 control-label">Ram</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="ram" value="{{ old('ram',isset($product->ram)?substr($product->ram,0,strlen($product->ram)-2):null) }}">
							</div>
							<label class="control-label">GB</label>
						</div>
						<div class="form-group">
							<label class="col-md-3 control-label">Rom</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="rom" value="{{ old('rom',isset($product->rom)?substr($product->rom,0,strlen($product->rom)-2):null )}}">
							</div>
							<label class="control-label">GB</label>
						</div>
						<div class="form-group">
							<label class="col-md-3 control-label">Chip</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="chip" value="{{ old('chip',isset($product->chip)?$product->chip:null) }}">
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-3 control-label">HĐH *</label>
							<div class="col-md-6">
								<select name="os" id="selectbox1">
									<option value="">Hãy Chọn Hệ Điều Hành</option>
									@foreach($os as $item)
										<option value="{!!$item->name!!}" 
										{!!($item->name==$product->os)?'selected':null!!}

										>-- {!!$item->name!!}</option>
									@endforeach
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-3 control-label">Camera</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="camera" value="{{ old('camera',isset($product->camera)?$product->camera:null) }}">
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-3 control-label">Trọng lượng</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="weight" value="{{ old('weight',isset($product->weight)?$product->weight:null) }}">
							</div>
							<label class="control-label">g</label>
						</div>
						<div class="form-group">
							<label class="col-md-3 control-label">Pin</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="pin" value="{{ old('pin',isset($product->battery)?substr($product->battery,0,strlen($product->battery)-3):null) }}"> 
							</div>
							<label class="control-label">mAh</label>
						</div>
						<div class="form-group">
							<label class="col-md-3 control-label">Giá Mới</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="price_new" value="{{ old('price_new',isset($product->price_new)?$product->price_new:$product->price) }}">
							</div>
							<label class="control-label">VNĐ</label>
						</div>
						
						<div class="form-group">
							<label class="col-md-3 control-label">Mô Tả</label>
							<div class="col-md-7">
								<textarea class="form-control" name="description" value="">{{ old('description',isset($product->description)?$product->description:null) }}</textarea>
								<script type="text/javascript">ckeditor("description")</script>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-3 control-label">Số lượng</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="number" value="{{ old('number',isset($product->number)?$product->number:null) }}" disabled>
							</div>
							<label class="control-label">Cái</label>
						</div>
						<div class="form-group">
							<label class="col-md-3 control-label">Hình Hiện Tại</label>
							<div class="col-md-3">
								<img src="{!!asset('resources/upload/product/'.$product->id.'/'.$product->image)!!}" alt="" style="height:150px" class="form-control">
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-3 control-label">Hình Ảnh</label>
							<div class="col-md-6">
								<input type="file" name="image"  style="margin-top: 5px; border: 1px solid #CCCCCC; width: 100%; border-radius: 5px;float:left" value = "{{old('image')}}"> 
							</div>
						</div>
						<?php
							$imgs = DB::table('images')->where('product_id',$product->id)->get();
						?>
						<div class="form-group">
							<label class="col-md-3 control-label">Hình ảnh phụ</label>
							<div class="col-md-4">
							@if(count($imgs)>0)
								@foreach($imgs as $img)
								<div class="img_box" id="{!!$img->id!!}">
									<img src="{!!asset('resources/upload/product/'.$product->id.'/detail/'.$img->name)!!}" alt="" style="height:220px" class="form-control" idHinh="{!!$img->id!!}">
									<a href="javascript:void(0)" type = "button" id= "del_img"  class="btn btn-danger btn-circle icon-del">X</a>
								</div>
									<br/>
								@endforeach
							@endif
								<button type="button" class="btn btn-primary" id="add_detail">+</button>
							</div>
						</div>
						
						
						
						<div id="insert"></div>
						
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