@extends('users/master')

@section('content')
<style type="text/css">
	.left_product{height: 620px; width: 400px; float: left;}
	.lBanner{height:450px;width:100%;margin-bottom:20px;border:1px solid #A7DBD8;background:#E0E4CC;    border-radius: 10px;text-align:center;}
	.lBanner img{max-width: 370px; padding: 14px;margin-top:20px; vertical-align: text-top; height: 410px;transition: all 1s ease; -webkit-transition: all 1s ease; -moz-transition: all 1s ease; -o-transition: all 1s ease;}
	.lBanner img:hover{transform: scale(1.15,1.15); -webkit-transform: scale(1.15,1.15); -moz-transform: scale(1.15,1.15); -o-transform: scale(1.15,1.15); -ms-transform: scale(1.15,1.15); }
	.sBanner{width:100%;border: 1px solid #A7DBD8;background:#E0E4CC;height:150px;}
	.sBanner ul{padding-left:0px;}
	.sBanner img{width: 25%; float: left; height: 150px; padding: 1.67%; border-right: 1px solid #A7DBD8;}
	.sBanner ul>img:last-child{margin-right:0%;border-right:none;}
	.right_product{float: right; text-align: center; width: 560px;}
	.main_right_product{text-align: left; padding-left: 77px; margin-top: 40px; font-size: 18px;border-bottom: 1px solid #D0D0D0;height:350px;}
	.description_product{text-align: left; padding-left: 77px; margin-top: 40px; font-size: 16px;border-bottom: 1px solid #D0D0D0;min-height:130px;}
	.main_right_product b{color: #FA6900;}
	.buy_button_product{background:-webkit-linear-gradient(top,#f89406,#f76b1c), width:auto;margin:10px auto;}
</style>
<?php
	$company= DB::table('companies')->where('id',$data->company_id)->first();
	$detail = DB::table('images')->where('product_id',$data->id)->orderBy('created_at','DESC')->skip(0)->take(4)->get();
?>
	<script type="text/javascript">
		$(document).ready(function(){
			$('.home').removeClass('active');
		});
	</script>
	<div class="urlCurrent">
		<ul>
			<li><a href="{!!url('/')!!}">Home</a>
				<span class = "divider">>></span>
			</li>
			<li><a href="{!!url('company/'.$company->id)!!}">{!!$company->company_name!!}</a>
				<span class = "divider">>></span>
			</li>
			<li>{!!$data->product_name!!}</li>
		</ul>
	</div>
	<div class = "main_content">
		
		<br>
		<div class="left_product">
			<div class="lBanner">
				<img src="{!!asset('resources/upload/product/'.$data->id.'/'.$data->image)!!}" title="{!!$company->company_name.' '.$data->product_name!!}">
			</div>
			<div class="sBanner">
				<ul>
					@foreach($detail as $item)
						<img src="{!!asset('resources/upload/product/'.$data->id.'/detail/'.$item->name)!!}">
					@endforeach
					
				</ul>
			</div>
		</div>
		<div class="right_product">
			<h1 class = "heading1">
				{!!$company->company_name.' '.$data->product_name!!}
			</h1>
			<div class="main_right_product">
				<b>Màu sắc:</b></b> {!!empty($data->color)?'Thông tin chưa cập nhật':$data->color!!} <br>
				<b>Kích thước màn hình:</b> {!!empty($data->monitor_size)?'Thông tin chưa cập nhật':$data->monitor_size!!} <br>
				<b>Ram:</b> {!!empty($data->ram)?'Thông tin chưa cập nhật':$data->ram!!} <br>
				<b>Rom:</b> {!!empty($data->rom)?'Thông tin chưa cập nhật':$data->rom!!} <br>
				<b>Chip:</b> {!!empty($data->chip)?'Thông tin chưa cập nhật':$data->chip!!} <br>
				<b>Hệ điều hành:</b> {!!empty($data->os)?'Thông tin chưa cập nhật':$data->os!!} <br>
				<b>Camera:</b> {!!empty($data->camera)?'Thông tin chưa cập nhật':$data->camera!!} <br>
				<b>Trọng lượng:</b> {!!empty($data->weight)?'Thông tin chưa cập nhật':$data->weight.' gram'!!} <br>
				<b>Pin:</b> {!!empty($data->battery)?'Thông tin chưa cập nhật':$data->battery!!} <br>
				<b>Giá hiện tại:</b> {!!number_format($data->price_new,0,',','.')!!} VNĐ <br>
				<div class = "buy_button_product center_align">
					<a href="{!!url('shopping-cart/buy/product/'.$data->id)!!}" class="btn btn-orange">Mua hàng</a>
				</div>
			</div>
			<div class="description_product">
				<b>*Mô tả:</b> {!!empty($data->description)?'Chưa có mô tả cho sản phẩm':$data->description!!}
			</div>
		</div>
	</div>
	<br>
@endsection