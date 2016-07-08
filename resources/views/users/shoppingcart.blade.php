@extends('users/master')

@section('content')
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
			<li>Giỏ hàng</li>
		</ul>
	</div>
	<div class = "main_content">
		<h1 class = "heading1">
			Giỏ Hàng
		</h1>
		<br><br>
		<div class="cart_info">
			
			@include('admin.alert')

	        <form action="" method = "POST">
			<input type="hidden" name = "_token" value ="{!!csrf_token()!!}">
	        <table class="table table-striped table-bordered">
	        	<thead>
		            <th class="center_align">Hình Ảnh</th>
		            <th class="center_align">Tên Sản Phẩm</th>
		            <th class="center_align">Số lượng</th>
		            <th class="center_align">Cập Nhật</th>
		            <th class="center_align">Xóa</th>
		            <th class="center_align">Giá Hiện Tại (VNĐ)</th>
		            <th class="center_align">Giá (VNĐ)</th>
	        	</thead>
	        	@if(count($data)>0)
		        	@foreach($data as $item)
		          	<tr>
			            <td class="center_align">
			            	<a href="#"><img title="{!!$item->name!!}" alt="product" src="{!!$item->type=='product'?asset('resources/upload/product/'.$item->id.'/'.$item->img):asset('resources/upload/accessory/'.$item->id.'/'.$item->img)!!}" height="50" width="50"></a>
			            </td>
			            <td>
			            	<a href="{!!$item->type=='product'?url('/products/'.$item->key):url('/accessory/'.changeTitle(DB::table('accessories')->where('name',$item->name)->first()->type).'/'.$item->key)!!}">{!!$item->name!!}</a>
			            </td>
			            <td class="center_align">
			            	<input type="text" size="1" value="{!!$item->qty!!}" name="quantity[40]" class="span1">
			            </td>
			            <td class="center_align"> 
			            	<a href="javascript:void(0)" class = "update" idtype="{!!$item->type!!}" id="{!!$item->rowid!!}"><img class="tooltip-test" data-original-title="Update" src="{!!asset('public/images/update.png')!!}" alt="" height="30px" width="30px"></a>
			            </td>
			            <td class = "center_align">
			              	<a href="{!!url('shopping-cart/delete/'.$item->type.'/'.$item->rowid)!!}"><img class="tooltip-test" data-original-title="Remove"  src="{!!asset('public/images/delete.png')!!}" alt="" height="30px" width="30px"></a>
			            </td>
			            <td class="price">{!!number_format($item->price,0,',','.')!!}</td>
			            <td class="total">{!!number_format($item->price*$item->qty,0,',','.')!!}</td>
		          	</tr>
		          	@endforeach
	          	@endif
	        </table>
	      	<div class="container">
		      	<div class="pull-right">
		          <div class="span4 pull-right">
		            <table class="table table-striped table-bordered ">
		              <tr>
		                <td><span class="bold">Tổng giá sản phẩm :</span></td>
		                <td><span class="bold">{!!number_format($total,0,',','.')!!}</span></td>
		              </tr>
		              <tr>
		                <td><span class="bold">VAT (10%) :</span></td>
		                <td><span class="bold">{!!number_format($total*0.1,0,',','.')!!}</span></td>
		              </tr>
		              <tr>
		                <td><span class="ra bold totalamout">Tổng tiền :</span></td>
		                <td><span class="bold totalamout">{!!number_format($total*(1+0.1),0,',','.')!!}</span></td>
		              </tr>
		            </table>
		            <input type="button" value="Thanh Toán" class="btn btn-orange pull-right" onclick = "window.location = '../checkout'" >
		            <input type="button" value="Hủy Giỏ Hàng" class="btn btn-orange pull-right mr20" onclick = "window.location = '../shopping-cart/destroyCart'" >
		            <input type="button" value="Tiếp Tục Mua Sắm" class="btn btn-orange pull-right mr20" onclick = "window.location='../'">
		          </div>
		        </div>
	        </div>
          	</form>
	        <br>
	      	<hr>
	        <br>
        
        </div>
	</div>
@endsection