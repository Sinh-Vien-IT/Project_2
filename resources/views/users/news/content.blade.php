@extends('users.index')

@section('content')
<script type="text/javascript">
		$(document).ready(function(){
			$('.news').addClass('active');
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
			<li><a href="{!!url('news')!!}">Tin Tức</a>
				<span class = "divider">>></span>
			</li>
			<li><a href="{!!url('news/'.changeTitle($data->type))!!}">{!!$data->type!!}</a>
				<span class = "divider">>></span>
			</li>
			<li>{!!$data->title!!}</li>
		</ul>
	</div>
	<br><br>
	<div class="title">{!!$data->title!!}</div>
	{!!$data->content!!}
	<button type = "button" class="btn btn-primary" onclick = "window.history.back()">Quay Lại</button><br><br>
@stop