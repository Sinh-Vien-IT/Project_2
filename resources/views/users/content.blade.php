<?php
	//Banner lớn
	$banner_larges = DB::table('system_manage')->where('type','Large Banner')->where('display','1')->orderBy('ordinal','ASC')->get();
	//Banner nhỏ
	$banner_smalls = DB::table('system_manage')->where('type','Small Banner')->where('display','1')->orderBy('ordinal','ASC')->skip(0)->take(2)->get();
	//Quảng cáo
	$advertisements = DB::table('advertisements')->orderBy('ordinal','ASC')->skip(0)->take(1)->get();

	//Sản phẩm bán chạy
	$product_hot = DB::table('product_of_order')->join('orders','product_of_order.order_id','=','orders.id')->join('products','product_of_order.product_id','=','products.id')->join('companies','companies.id','=','products.company_id')->where('orders.status','Đã Thanh Toán')->where('product_of_order.type','product')->where('orders.time_receive','>',strtotime('-30 days'))->where('time_receive','<',date('Y-m-d H:i:s'))->groupBy('products.id')->select(DB::raw('sum(product_of_order.number) as sum_number,products.product_name,products.id,products.image,products.company_id,products.key_word,products.price,products.price_new,companies.company_name'))->orderBy('sum_number','DESC')->skip(0)->take(4)->get();
	//Sản phẩm mới
	$product_new = DB::table('products')->orderBy('created_at','DESC')->get();
		$id_lon=-1;
		$date1=date('Y-m-d H:i:s');
		if(count($product_new)>0){
			foreach($product_new as $item){
				$date2=$item->created_at;
				if(abs(strtotime($date2)-strtotime($date1))>2592000){
					$id_lon = $item->id;
				}
			}
		}
		$product_news = DB::table('products')->where('id','>',$id_lon)->orderBy('created_at','DESC')->skip(0)->take(12)->get();
	//Phụ kiện
	$accessories = DB::table('accessories')->orderBy('created_at','DESC')->skip(0)->take(8)->get();
	//Tin công nghệ
	$news_technology = DB::table('news')->where('type','Công Nghệ')->orderBy('created_at','DESC')->skip(0)->take(4)->get();
	//Tin giải trí
	$news_entertainment = DB::table('news')->where('type','Giải Trí')->orderBy('created_at','DESC')->skip(0)->take(3)->get();
	//Tin khuyến mãi
	$news_promotion = DB::table('news')->where('type','Khuyến Mãi')->orderBy('created_at','DESC')->skip(0)->take(3)->get();
?>
<div class="banner">
	<div class="large_banner">
		<ul class="slider">
			@foreach($banner_larges as $banner_large)
				<li><img src="{{url('resources/upload/banner/'.$banner_large->id.'/'.$banner_large->image)}}" alt="{!!$banner_large->content!!}" title="{!!$banner_large->content!!}"></li>
			@endforeach
		</ul>
	</div>

	<div class="small_banner">
		@if(count($banner_smalls)==0)
			<img src="" alt="">
		@else
			<img src="{{url('resources/upload/banner/'.$banner_smalls[0]->id.'/'.$banner_smalls[0]->image)}}" alt="{!!$banner_smalls[0]->content!!}">
		@endif
	</div>
	<div class="small_banner">
		@if(count($banner_smalls)<2)
			<img src="" alt="">
		@else
			<img src="{{url('resources/upload/banner/'.$banner_smalls[1]->id.'/'.$banner_smalls[1]->image)}}" alt="{!!$banner_smalls[1]->content!!}">
		@endif
	</div>
</div> <!-- End of Banner -->
<div class="main_content">
	<div class="left_content">
		<div class="update_info">
			<p class="title_info">Tin tức cập nhật</p>
			<img src="{{url('public/images/banner_menu_01.png')}}" alt="Smart Warch" class="img_info">
			<ul class="main_info">
				<li><a href="{!!url('hot/month')!!}">Điện Thoại Bán Chạy</a></li>
				<li><a href="{!!url('new')!!}">Điện Thoại Mới Nhất</a></li>
				<li><a href="{!!url('company/'.DB::table('companies')->where('company_name','Apple')->first()->id)!!}">Điện Thoại Apple</a></li>
				<li><a href="{!!url('company/'.DB::table('companies')->where('company_name','Nokia')->first()->id)!!}">Điện Thoại Nokia</a></li>
				<li><a href="{!!url('company/'.DB::table('companies')->where('company_name','SamSung')->first()->id)!!}">Điện Thoại SamSung</a></li>
			</ul>
		</div> <!-- End of Update Info-->
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

		<!-- facebook -->
		<div class="fb-like-box" data-href="https://www.facebook.com/dienthoai321/" data-width="267" data-show-faces="true" data-stream="false" data-show-border="true" data-header="false" style="margin-bottom: 15px; box-shadow: 5px 5px 5px #797171;-moz-box-shadow : 5px 5px 5px #797171;-webkit-box-shadow: 5px 5px 5px #797171;">
		</div>

		<div class="commercial">
			@foreach($advertisements as $item)
				<a href="{!!$item->website!!}" target="_blank">
					<img src="{{asset('resources/upload/commercial/'.$item->id.'/'.$item->content)}}" alt="" class="quang_cao">
				</a>
			@endforeach
		</div> <!-- End of Commercial -->
	</div> <!-- End of Left Content -->
	<div class="right_content">
		<div class="hot_product">
			<p class="title_product">Sản phẩm bán chạy</p>
			<div style="clear:both"></div>
			<div class="main_product">
				@foreach($product_hot as $item)
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
		</div> <!-- End of Hot Product -->
		<div class="new_product">
			<p class="title_product">Sản phẩm mới</p>
			<div style="clear:both"></div>
			<div class="main_product">
				@foreach($product_news as $item)
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
						@endif</a>
					</a>
					<div class = "buy_button">
						<a href="{!!url('shopping-cart/buy/product/'.$item->id)!!}">Mua hàng</a>
					</div>
				</div>
				@endforeach()
			</div>
		</div> <!-- End of Hot Product -->
		<div class="accessories">
			<p class="title_product">Phụ Kiện</p>
			<div style="clear:both"></div>
			<div class="main_product">
				@foreach($accessories as $item)
				<div class="image">
					<a href="{!!url('accessory/'.changeTitle($item->type).'/'.$item->key_word)!!}">
						<img src="{{asset('resources/upload/accessory/'.$item->id.'/'.$item->image)}}" alt="{!!$item->name!!}">
						<div class= "product">{!!$item->name!!}</div>
						@if($item->price_new<$item->price)
							<img src="{!!asset('public/images/sale.png')!!}" alt="sale" class="sale_icon"style="padding:0px;width:55px; height:55px">
						<div><del>{!!number_format($item->price,0,',','.')!!} đ</del></div>
						<div>Giá mới: {!!number_format($item->price_new,0,',','.')!!} đ</div>
						@else
						<div>{!!number_format($item->price,0,',','.')!!} đ</div>
						@endif</a>
					</a>
					<div class = "buy_button">
						<a href="{!!url('shopping-cart/buy/accessory/'.$item->id)!!}">Mua hàng</a>
					</div>
				</div>
				@endforeach()
			</div>
		</div> <!-- End of Accessories -->
	</div> <!-- End of Right Content -->
</div> <!-- End of Main_Content-->