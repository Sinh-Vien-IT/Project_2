@extends('users.index')

@section('content')
	<script type="text/javascript">
		$(document).ready(function(){
			$('.home').removeClass('active');
			$('.accessory').addClass('active');
		});
	</script>
	<style type = "text/css">
		.title{font-size:20px;font-weight:bold;text-align:center;}
	</style>
	<div class="urlCurrent">
		<ul>
			<li><a href="{!!url('/')!!}">Home</a>
				<span class = "divider">>></span>
			</li>
			<li><a href="{!!url('accessory')!!}">Phụ Kiện</a>
				<span class = "divider">>></span>
			</li>
			<li><a href="{!!url('accessory/'.changeTitle($data->type))!!}">
			{!!$data->type!!}
			</a>
				<span class = "divider">>></span>
			</li>
			<li>{!!$data->name!!}</li>
		</ul>
	</div>
	<br>
	<div class="title">{!!$data->name!!}</div>
	@if(!empty($data->description))
	{!!$data->description!!}
	@else
	*Hiện chưa có mô tả cho sản phẩm này<br><br>
	@endif
	<button type="button" class="btn btn-orange" style="margin-right:20px">
		<a href="{!!url('shopping-cart/buy/accessory/'.$data->id)!!}" style="color:white;">Mua hàng</a>
	</button>
	<button type = "button" class="btn btn-primary" onclick = "window.history.back()">Quay Lại</button><br><br>
@stop