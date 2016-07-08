@extends('admin.index')

@section('css')
	<link rel="stylesheet" href="{!!url('public/css/list.css')!!}">
@endsection

@section('content')
<style type = "text/css">
	.frame_box{width: 60%; margin: 120px auto;}
	.frame_box label{background: #4C4C4C; padding: 10px; margin-bottom: 22px; font-size: 20px; color: white;}
	.frame_box input{margin-top:70px;}
</style>
	<form action = "" method = "POST" id = "listForm">
		<input type="hidden" name = "_token" value = "{!!csrf_token()!!}">
		<div class="frame_box">
		@include('admin.alert')
			<div class="col-md-6 center_align" style="border-right:1px solid black">
				<label class="control-label col-md-12">Thời gian bắt đầu</label>
				<div class="col-md-6">
					<select name="month_start" id="" class="form-control">
						@for($i=1; $i<=12; $i++)
							<option value="{!!$i!!}">Tháng {!!$i!!}</option>
						@endfor
					</select>
				</div>
				<div class="col-md-6">
					<select name="year_start" id="" class="form-control">
						@for($i=2016; $i<=2050; $i++)
							<option value="{!!$i!!}">Năm {!!$i!!}</option>
						@endfor
					</select>
				</div>
			</div>
			<div class="col-md-6 center_align">
				<label class="control-label col-md-12">Thời gian kết thúc</label>
				<div class="col-md-6">
					<select name="month_end" id="" class="form-control">
						@for($i=1; $i<=12; $i++)
							<option value="{!!$i!!}">Tháng {!!$i!!}</option>
						@endfor
					</select>
				</div>
				<div class="col-md-6">
					<select name="year_end" id="" class="form-control">
						@for($i=2016; $i<=2050; $i++)
							<option value="{!!$i!!}">Năm {!!$i!!}</option>
						@endfor
					</select>
				</div>
			</div>
			<div style="clear:both"></div>
			<div class="col-md-12 center_align">
				<input type="submit" class="btn btn-primary" value="{!!$type=='product'?'Điện Thoại Đã Bán':'Phụ Kiện Đã Bán'!!}">
			</div>
		</div>
	</form>
@stop