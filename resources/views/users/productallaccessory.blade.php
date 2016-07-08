@extends('users/master')

@section('content')
	<script type="text/javascript">
		$(document).ready(function(){
			$('.accessor').addClass('active');
		});
	</script>
	

	<div class="urlCurrent">
		<ul>
			<li><a href="{!!url('/')!!}">Home</a>
				<span class = "divider">>></span>
			</li>
			<li><a href="{!!url('accessory')!!}">Phụ Kiện</a>
				<span class = "divider">>></span>
			</li>
			<li><a href="{!!url('accessory/'.$type)!!}">{!!$type=='the-nho'?'Thẻ Nhớ':($type=='bao-da'?'Bao Da':($type=='dan-man-hinh'?'Dán Màn Hình':($type=='tai-nghe'?'Tai Nghe':'Loa')))!!}</a></li>
		</ul>
	</div>
	<div class = "main_content">
		<h2 class = "heading1">
			{!!$type=='the-nho'?'Thẻ Nhớ':($type=='bao-da'?'Bao Da':($type=='dan-man-hinh'?'Dán Màn Hình':($type=='tai-nghe'?'Tai Nghe':'Loa')))!!}
		</h2>
		<br>
		
		<br>
		<div class="company_product">
			<div style="clear:both"></div>
			<div class="main_product">
				@foreach($accessories as $item)
				<div class="image">
					<a href="{!!url('accessory/'.$type.'/'.$item->key_word)!!}">
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
			{!!$accessories->render()!!}
		
	</div><!-- End of Main_Content-->
@endsection