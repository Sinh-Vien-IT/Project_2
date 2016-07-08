@extends('admin.index')

@section('content')
	<div class="container-fluid">
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<div class="panel panel-default" style="font-size:18px">
				<div class="panel-heading center_align">Thông Tin Sản Phẩm </div>
				<div class="panel-body">
					<label class = "control-label">Tên sản phẩm: {!!$data->product_name!!}</label><br>
					<label class = "control-label">Hãng sản xuất: {!!DB::table('companies')->where('id',$data->company_id)->first()->company_name!!}</label><br>
					<label class = "control-label">Màn hình: {!!$data->monitor_size!!}</label><br>
					<label class = "control-label">Chip: {!!$data->chip!!}</label><br>
					<label class = "control-label">HĐH: {!!$data->os!!}</label><br>
					<label class = "control-label">Ram: {!!$data->ram!!}</label><br>
					<label class = "control-label">Rom: {!!$data->rom!!}</label><br>
					<label class = "control-label">Màu sắc: {!!$data->color!!}</label><br>
					<label class = "control-label">Camera: {!!$data->camera!!}</label><br>
					<label class = "control-label">Trọng lượng: {!!$data->weight!!}</label><br>
					<label class = "control-label">Pin: {!!$data->battery!!}</label><br><br>
					<button class="offset-col-md-2 btn btn-success center_align" onclick = "window.history.back()">Quay Lại</button>
				</div>
			</div>
		</div>
	</div>
</div>
	
@stop