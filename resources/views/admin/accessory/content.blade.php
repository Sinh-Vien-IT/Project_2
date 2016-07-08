@extends('admin.index')

@section('content')
	<style type = "text/css">
		.title{font-size:20px;font-weight:bold;text-align:center;}
	</style>
	<br>
	<div class="title">{!!$data->name!!}</div>
	{!!empty($data->description)?'<br><br>Chưa có thông tin chi tiết':$data->description!!} <br><br>
	<button type = "button" class="btn btn-primary" onclick = "window.history.back()">Quay Lại</button><br><br>
@stop
