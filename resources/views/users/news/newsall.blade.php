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
			</li>
		</ul>
	</div>
	@if(count($congnghe)>0)
		<div class = "main_content">
		<h2 class = "heading1">
			Công Nghệ <a href="{!!url('news/cong-nghe')!!}">Xem toàn bộ</a>
		</h2>
		<br>
		@foreach($congnghe as $item)
		<div class="form_news">
			<div class="img_news">
				<img src="{{asset('resources/upload/news/'.$item->id.'/'.$item->image)}}" alt="" >
			</div>
			<div class="title"><a href="{!!url('news/cong-nghe/'.$item->key_word)!!}">{!!$item->title!!}</a></div>
			{!!date('d/m/Y',strtotime($item->created_at))!!} <br>
		</div>	
		@endforeach	
	</div><!-- End of Main_Content-->
	@endif
	@if(count($giaitri)>0)
		<div class = "main_content">
		<h2 class = "heading1">
			Giải Trí <a href="{!!url('news/giai-tri')!!}">Xem toàn bộ</a>
		</h2>
		<br>
		@foreach($giaitri as $item)
		<div class="form_news">
			<div class="img_news">
				<img src="{{asset('resources/upload/news/'.$item->id.'/'.$item->image)}}" alt="" >
			</div>
			<div class="title"><a href="{!!url('news/giai-tri/'.$item->key_word)!!}">{!!$item->title!!}</a></div>
			{!!date('d/m/Y',strtotime($item->created_at))!!} <br>
		</div>	
		@endforeach	
	@endif
	@if(count($khuyenmai)>0)
		<div class = "main_content">
		<h2 class = "heading1">
			Khuyến Mãi <a href="{!!url('news/khuyen-mai')!!}">Xem toàn bộ</a>
		</h2>
		<br>
		@foreach($khuyenmai as $item)
		<div class="form_news">
			<div class="img_news">
				<img src="{{asset('resources/upload/news/'.$item->id.'/'.$item->image)}}" alt="" >
			</div>
			<div class="title"><a href="{!!url('news/khuyen-mai/'.$item->key_word)!!}">{!!$item->title!!}</a></div>
			{!!date('d/m/Y',strtotime($item->created_at))!!} <br>
		</div>	
		@endforeach	
	@endif
@endsection