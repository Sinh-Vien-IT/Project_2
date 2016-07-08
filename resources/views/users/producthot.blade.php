@extends('users/master')

@section('content')
	<script type="text/javascript">
		$(document).ready(function(){
			$('.hot').addClass('active');
		});
	</script>
	

	<div class="urlCurrent">
		<ul>
			<li><a href="{!!url('/')!!}">Home</a>
				<span class = "divider">>></span>
			</li>
			<li>Sản phẩm bán chạy</li>
		</ul>
	</div>
	<div class = "main_content">
		<h2 class = "heading1">
			Các Sản Phẩm Điện Thoại Bán Chạy
		</h2>
		<br>
		<script type = "text/javascript">
			$(document).ready(function(){
				$('#choose_month').click(function(){
					window.location = '{!!url('hot/month')!!}';
				});
				$('#choose_year').click(function(){
					window.location = '{!!url('hot/year')!!}';
				});
				$('#choose_all').click(function(){
					window.location = '{!!url('hot/all')!!}';
				});
			});
		</script>
		<div class="center_align">
			<button class="btn {!!$type=='month'?'btn-orange':null!!}" id="choose_month">Trong Tháng</button>
			<button class="btn {!!$type=='year'?'btn-orange':null!!}" id = "choose_year">Trong Năm </button>
			<button class="btn {!!$type=='all'?'btn-orange':null!!}" id= "choose_all">Tất Cả</button>
		</div>
		<br>
		<br>
		<div class="company_product">
		<?php
			if($type=='month')
				$products=$products_month;
			elseif($type=='year')
				$products=$products_year;
			else
				$products=$products_all;
		?>
			<div style="clear:both"></div>
			<div class="main_product">
				@foreach($products as $item)
				<div class="image">
					<a href="{!!url('products/'.$item->key_word)!!}">
						<img src="{{asset('resources/upload/product/'.$item->id.'/'.$item->image)}}" alt="{!!$item->product_name!!}">
						<div class= "product">{!!DB::table('companies')->where('id',$item->company_id)->first()->company_name.' '.$item->product_name!!}</div>
						@if($item->price_new<$item->price)
							<img src="{!!asset('public/images/sale.png')!!}" alt="sale" class="sale_icon"style="padding:0px;width:55px; height:55px">
						<div><del>{!!number_format($item->price,0,',','.')!!} đ</del></div>
						<div>Giá mới: {!!number_format($item->price_new,0,',','.')!!} đ</div>
						@else
						<div>{!!number_format($item->price,0,',','.')!!} đ</div>
						@endif
					</a>
					<div class = "buy_button">
						<a href="{!!url('shopping-cart/buy/product/'.$item->id)!!}">Mua hàng</a>
					</div>
				</div>
				@endforeach()
			</div>
		</div> <!-- End of Company_Product-->
		{!!$products->render()!!}
	</div><!-- End of Main_Content-->
	
@endsection