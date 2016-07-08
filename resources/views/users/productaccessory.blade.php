@extends('users/master')

@section('content')
	<script type="text/javascript">
		$(document).ready(function(){
			$('.home').removeClass('active');
			$('.accessor').addClass('active');
		});
	</script>
	<style type = "text/css">
		.heading1 a{font-size: 16px;}
	</style>

	<div class="urlCurrent">
		<ul>
			<li><a href="{!!url('/')!!}">Home</a>
				<span class = "divider">>></span>
			</li>
			<li><a href="{!!url('accessory')!!}">Phụ kiện</a></li>
		</ul>
	</div>
	@if(count($thenho)>0)
	<div class = "main_content">
		<h2 class = "heading1">
			Thẻ nhớ <a href="{!!url('accessory/the-nho')!!}">Xem toàn bộ</a>
		</h2>
		<br>
		<div class="company_product">
			<div style="clear:both"></div>
			<div class="main_product">
				@foreach($thenho as $item)
				<div class="image">
					<a href="{!!url('accessory/thenho/'.$item->key_word)!!}">
						<img src="{{asset('resources/upload/accessory/'.$item->id.'/'.$item->image)}}" alt="{!!$item->name!!}">
						<div class= "product">{!!$item->name!!}</div>
						@if($item->price_new<$item->price)
							<img src="{!!asset('public/images/sale.png')!!}" alt="sale" class="sale_icon"style="padding:0px;width:55px; height:55px">
						<div><del>{!!number_format($item->price,0,',','.')!!} đ</del></div>
						<div>Giá mới: {!!number_format($item->price_new,0,',','.')!!} đ</div>
						@else
						<div>{!!number_format($item->price,0,',','.')!!} đ</div>
						@endif
					</a>
					<div class = "buy_button">
						<a href="{!!url('shopping-cart/buy/accessory/'.$item->id)!!}">Mua hàng</a>
					</div>
				</div>
				@endforeach()
			</div>
		</div> <!-- End of Company_Product-->
	</div><!-- End of Main_Content-->
	@endif
	@if(count($danmanhinh)>0)
	<div class = "main_content">
		<h2 class = "heading1">
			Dán màn hình <a href="{!!url('accessory/dan-man-hinh')!!}">Xem toàn bộ</a>
		</h2>
		<br>
		<div class="company_product">
			<div style="clear:both"></div>
			<div class="main_product">
				@foreach($danmanhinh as $item)
				<div class="image">
					<a href="{!!url('accessory/dan-man-hinh/'.$item->key_word)!!}">
						<img src="{{asset('resources/upload/accessory/'.$item->id.'/'.$item->image)}}" alt="{!!$item->name!!}">
						<div class= "product">{!!$item->name!!}</div>
						@if($item->price_new<$item->price)
							<img src="{!!asset('public/images/sale.png')!!}" alt="sale" class="sale_icon"style="padding:0px;width:55px; height:55px">
						<div><del>{!!number_format($item->price,0,',','.')!!} đ</del></div>
						<div>Giá mới: {!!number_format($item->price_new,0,',','.')!!} đ</div>
						@else
						<div>{!!number_format($item->price,0,',','.')!!} đ</div>
						@endif
					</a>
					<div class = "buy_button">
						<a href="{!!url('shopping-cart/buy/accessory/'.$item->id)!!}">Mua hàng</a>
					</div>
				</div>
				@endforeach()
			</div>
		</div> <!-- End of Company_Product-->
	</div><!-- End of Main_Content-->
	@endif
	@if(count($baoda)>0)
	<div class = "main_content">
		<h2 class = "heading1">
			Bao da <a href="{!!url('accessory/bao-da')!!}">Xem toàn bộ</a>
		</h2>
		<br>
		<div class="company_product">
			<div style="clear:both"></div>
			<div class="main_product">
				@foreach($baoda as $item)
				<div class="image">
					<a href="{!!url('accessory/baoda/'.$item->key_word)!!}">
						<img src="{{asset('resources/upload/accessory/'.$item->id.'/'.$item->image)}}" alt="{!!$item->name!!}">
						<div class= "product">{!!$item->name!!}</div>
						@if($item->price_new<$item->price)
							<img src="{!!asset('public/images/sale.png')!!}" alt="sale" class="sale_icon"style="padding:0px;width:55px; height:55px">
						<div><del>{!!number_format($item->price,0,',','.')!!} đ</del></div>
						<div>Giá mới: {!!number_format($item->price_new,0,',','.')!!} đ</div>
						@else
						<div>{!!number_format($item->price,0,',','.')!!} đ</div>
						@endif
					</a>
					<div class = "buy_button">
						<a href="{!!url('shopping-cart/buy/accessory/'.$item->id)!!}">Mua hàng</a>
					</div>
				</div>
				@endforeach()
			</div>
		</div> <!-- End of Company_Product-->
	</div><!-- End of Main_Content-->
	@endif
	@if(count($tainghe)>0)
	<div class = "main_content">
		<h2 class = "heading1">
			Tai nghe <a href="{!!url('accessory/tai-nghe')!!}">Xem toàn bộ</a>
		</h2>
		<br>
		<div class="company_product">
			<div style="clear:both"></div>
			<div class="main_product">
				@foreach($tainghe as $item)
				<div class="image">
					<a href="{!!url('accessory/tainghe/'.$item->key_word)!!}">
						<img src="{{asset('resources/upload/accessory/'.$item->id.'/'.$item->image)}}" alt="{!!$item->name!!}">
						<div class= "product">{!!$item->name!!}</div>
						@if($item->price_new<$item->price)
							<img src="{!!asset('public/images/sale.png')!!}" alt="sale" class="sale_icon"style="padding:0px;width:55px; height:55px">
						<div><del>{!!number_format($item->price,0,',','.')!!} đ</del></div>
						<div>Giá mới: {!!number_format($item->price_new,0,',','.')!!} đ</div>
						@else
						<div>{!!number_format($item->price,0,',','.')!!} đ</div>
						@endif
					</a>
					<div class = "buy_button">
						<a href="{!!url('shopping-cart/buy/accessory/'.$item->id)!!}">Mua hàng</a>
					</div>
				</div>
				@endforeach()
			</div>
		</div> <!-- End of Company_Product-->
	</div><!-- End of Main_Content-->
	@endif
	@if(count($loa)>0)
	<div class = "main_content">
		<h2 class = "heading1">
			Loa <a href="{!!url('accessory/loa')!!}">Xem toàn bộ</a>
		</h2>
		<br>
		<div class="company_product">
			<div style="clear:both"></div>
			<div class="main_product">
				@foreach($loa as $item)
				<div class="image">
					<a href="{!!url('accessory/loa/'.$item->key_word)!!}">
						<img src="{{asset('resources/upload/accessory/'.$item->id.'/'.$item->image)}}" alt="{!!$item->name!!}">
						<div class= "product">{!!$item->name!!}</div>
						@if($item->price_new<$item->price)
							<img src="{!!asset('public/images/sale.png')!!}" alt="sale" class="sale_icon"style="padding:0px;width:55px; height:55px">
						<div><del>{!!number_format($item->price,0,',','.')!!} đ</del></div>
						<div>Giá mới: {!!number_format($item->price_new,0,',','.')!!} đ</div>
						@else
						<div>{!!number_format($item->price,0,',','.')!!} đ</div>
						@endif
					</a>
					<div class = "buy_button">
						<a href="{!!url('shopping-cart/buy/accessory/'.$item->id)!!}">Mua hàng</a>
					</div>
				</div>
				@endforeach()
			</div>
		</div> <!-- End of Company_Product-->
	</div><!-- End of Main_Content-->
	@endif
@endsection