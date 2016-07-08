@extends('users.master')

@section('content')
<script type="text/javascript">
		$(document).ready(function(){
			$('.promot').addClass('active');
		});
	</script>
<!-- <?php
	//Tin công nghệ
	$news_technology = DB::table('news')->where('type','Công Nghệ')->orderBy('created_at','DESC')->skip(0)->take(4)->get();
	//Tin giải trí
	$news_entertainment = DB::table('news')->where('type','Giải Trí')->orderBy('created_at','DESC')->skip(0)->take(3)->get();
	//Tin khuyến mãi
	$news_promotion = DB::table('news')->where('type','Khuyến Mãi')->orderBy('created_at','DESC')->skip(0)->take(3)->get();
	$advertisements = DB::table('advertisements')->orderBy('ordinal','ASC')->orderBy('ordinal','ASC')->take(1)->get();
?>	 -->
<style type = "text/css">
	.left_content {margin-top:50px;}
	.image{height: 290px;}
	.image del{color: #434441;}
	.oneblock{position:relative;}
	.sale_icon{position: absolute; top: -10px; left: 115px;}
</style>
	<div class="urlCurrent">
		<ul>
			<li><a href="{!!url('/')!!}">Trang Chủ</a>
				<span class = "divider">>></span>
			</li>
			<li><a href="{!!url('product/promotion')!!}">Khuyến Mãi</a>
			</li>
		</ul>
	</div>
		<div class="main_content">
			<div class="right_content">
				<p class="title_product">Sản phẩm khuyến mãi</p>	
				<div class="main_product">
					<div style="clear:both"></div>
					<div class="main_product">
						@foreach($products as $item)
						@if($item->price>$item->price_new)
						<div class="image">
							<a href="{{ url('products'.'/'.$item->key_word) }}">
								<img src="{{asset('resources/upload/product/'.$item->id.'/'.$item->image)}}" alt="{!!$item->name!!}">
							</a>							
							<div class= "product">{!!DB::table('companies')->where('id',$item->company_id)->first()->company_name.' '.$item->product_name!!}</div>
							<img src="{!!asset('public/images/sale.png')!!}" alt="sale" class="sale_icon"style="padding:0px;width:55px; height:55px">
							<div><del>{!!number_format($item->price,0,',','.')!!} đ</del></div>
							<div>Giá mới: {!!number_format($item->price_new,0,',','.')!!} đ</div>
							<div class = "buy_button">
								<a href="{!!url('shopping-cart/buy/product/'.$item->id)!!}">Mua hàng</a>
							</div>
						</div>
						@endif
						@endforeach()

					</div>
				</div> <!-- End of Telephone -->


			</div> <!-- End of Left Content -->
			<div class="left_content">
		<div class="technology_info">
			<p class="title_info">Tin tức công nghệ</p>
			<img src="{{asset('resources/upload/news/'.$news_technology[0]->id.'/'.$news_technology[0]->image)}}" alt="" class="img_info">
			<ul class="main_info">
				@foreach($news_technology as $item)
					<li><a href="{!!url('news/'.changeTitle($item->type).'/'.$item->key_word)!!}">
					<div class="img_news">
						<img src="{{asset('resources/upload/news/'.$item->id.'/'.$item->image)}}" alt="" >
					</div>
					<div class="title">{!!_substr($item->title,50)!!}</div>
					</a></li>
				@endforeach
				
			</ul>

		</div> <!-- End of Technology Info-->
		<div class="entertainment_info">
			<p class="title_info">Tin tức giải trí</p>
			<img src="{{asset('resources/upload/news/'.$news_entertainment[0]->id.'/'.$news_entertainment[0]->image)}}" alt="" class="img_info">
			<ul class="main_info">
				@foreach($news_entertainment as $item)
					<li><a href="{!!url('news/'.changeTitle($item->type).'/'.$item->key_word)!!}">
					<div class="img_news">
						<img src="{{asset('resources/upload/news/'.$item->id.'/'.$item->image)}}" alt="" >
					</div>
					<div class="title">{!!_substr($item->title,50)!!}</div>
					</a></li>
				@endforeach
				
			</ul>
		</div> <!-- End of Entertaiment Info -->
		<div class="promotion_info">
			<p class="title_info">Tin tức khuyến mãi</p>
			<img src="{{asset('resources/upload/news/'.$news_promotion[0]->id.'/'.$news_promotion[0]->image)}}" alt="" class="img_info">
			<ul class="main_info">
				@foreach($news_promotion as $item)
					<li><a href="{!!url('news/'.changeTitle($item->type).'/'.$item->key_word)!!}" title="{!!$item->title!!}">
					<div class="img_news">
						<img src="{{asset('resources/upload/news/'.$item->id.'/'.$item->image)}}" alt="" >
					</div>
					<div class="title">{!!_substr($item->title,50)!!}</div>
					</a></li>
				@endforeach
				
			</ul>
		</div> <!-- End of Promotion Info -->
		<div class="commercial">
			@foreach($advertisements as $item)
				<a href="{!!$item->website!!}">
					<img src="{{asset('resources/upload/commercial/'.$item->id.'/'.$item->content)}}" alt="" class="quang_cao">
				</a>
			@endforeach
		</div>
			</div> <!-- End of Right Content -->
			</div>
			@endsection