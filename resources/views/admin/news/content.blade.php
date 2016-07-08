@extends('admin.index')

@section('content')
	<style type = "text/css">
		.title{font-size:20px;font-weight:bold;text-align:center;}
	</style>
	<br>
	<div class="title">{!!$data->title!!}</div>
	{!!$data->content!!}
	<button type = "button" class="btn btn-primary" onclick = "window.location='{!!route('admin.news.getList')!!}'">Quay Lại</button><br><br>
@stop
