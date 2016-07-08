@extends('users/master')

@section('content')
	<script type="text/javascript">
		$(document).ready(function(){
			$('.new').addClass('active');
		});
	</script>
	

	<div class="urlCurrent">
		<ul>
			<li><a href="{!!url('/')!!}">Home</a>
				<span class = "divider">>></span>
			</li>
			<li>Sản phẩm mới</li>
		</ul>
	</div>
	<div class = "main_content">
		<h2 class = "heading1">
			Các Sản Phẩm Điện Thoại Mới
		</h2>
		<br>
		
		<br>
		<div class="company_product">
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