@extends('users.master')

@section('content')
<script type="text/javascript">
	$(document).ready(function(){
		$('.news').addClass('active');
	});
</script>
	<div class="urlCurrent">
		<ul>
			<li><a href="{!!url('/')!!}">Home</a>
				<span class = "divider">>></span>
			</li>
			<li><a href="{!!url('news')!!}">Tin Tức</a>
				<span class = "divider">>></span>
			</li>
			<li><a href="{!!url('news/'.changeTitle($type))!!}">{!!$type!!}</a></li>
		</ul>
	</div>
	<div class = "main_content">
		<h2 class = "heading1">
			{!!$type!!}
		</h2>
		<br>
		@foreach($data as $item)
		<div class="form_news">
			<div class="img_news">
				<img src="{{asset('resources/upload/news/'.$item->id.'/'.$item->image)}}" alt="" >
			</div>
			<div class="title"><a href="{!!url('news/'.changeTitle($type).'/'.$item->key_word)!!}">{!!$item->title!!}</a></div>
			{!!date('d/m/Y',strtotime($item->created_at))!!} <br>
		</div>	
		@endforeach	
	</div><!-- End of Main_Content-->
@endsection