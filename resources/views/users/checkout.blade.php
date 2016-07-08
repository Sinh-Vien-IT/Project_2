@extends('users/master')

@section('content')
	<?php
		$user = Auth::user();
	?>
	<div class="urlCurrent">
		<ul>
			<li><a href="{!!url('/')!!}">Home</a>
				<span class = "divider">>></span>
			</li>
			<li>Thanh Toán</li>
		</ul>
	</div>
	<div class = "main_content">
	@include('admin.alert')
	@include('admin.error')
		<form class="form-horizontal" role="form" method="POST" action="{!!route('postCheckout')!!}"  enctype = "multipart/form-data">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<div id="step1">
				<h2 class = "heading1">
					Bước 1: Điền Thông Tin Cá Nhân
				</h2>
				<br><br>
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label class="col-md-4 control-label">Họ Và Tên *</label>
								<div class="col-md-8">
									<input type="text" class="form-control" name = "name" value = "{{old('name',isset($user->fullname)?$user->fullname:null)}}">
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-4 control-label">Số Điện Thoại *</label>
								<div class="col-md-8">
									<input type="text" class="form-control" name = "phone_number" value = "{{old('phone_number',isset($user->phone_number)?$user->phone_number:null)}}">
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-4 control-label">Email *</label>
								<div class="col-md-8">
									<input type="email" class="form-control" name = "email" value = "{{old('email',isset($user->email)?$user->email:null)}}">
								</div>
							</div>
						</div>
						<div class="col-md-6 offset-col-md-6">
							<div class="form-group">
								<label class="col-md-4 control-label">Giới tính *</label>
								<div class="col-md-4" style = "">
									@if(isset($user->gender)&&$user->gender==0) 
										<input type="radio" name="gender" value = "Male" style = "margin-top:10px"> Nam
										<input type="radio" name ="gender" value = "Female" checked> Nữ
									@else
										<input type="radio" name="gender" value = "Male" style = "margin-top:10px" checked> Nam
										<input type="radio" name ="gender" value = "Female"> Nữ
									@endif
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-4 control-label">Địa Chỉ </label>
								<div class="col-md-8">
									<input type="text" class="form-control" name = "address" value = "{{old('address',isset($user->address)?$user->address:null)}}">
								</div>
							</div>
						</div>
						<br>
						<div class="form-group">
							<div class="col-md-6 col-md-offset-6 pull-right">
								<button type = "button" class = "btn btn-primary pull-right" onclick = "window.location='./'">
									Quay Lại Trang Chủ
								</button>
								<button type="button" class="btn btn-orange pull-right mr20" id="continue1">
									Tiếp Tục
								</button>
							</div>
						</div>
					</div>
				</div>
			</div>


			<div id="step2">
				<h2 class ="heading1">
					Bước 2 Xác Nhận Đơn Hàng
				</h2>
				<br><br>
				<div class="cart_info">
			        <table class="table table-striped table-bordered">
			        	<thead>
				            <th class="center_align">Hình Ảnh</th>
				            <th class="center_align">Tên Sản Phẩm</th>
				            <th class="center_align">Số lượng</th>
				            <th class="center_align">Giá Sản Phẩm (VNĐ)</th>
				            <th class="center_align">Giá (VNĐ)</th>
			        	</thead>
			        	@if(count($data)>0)
				        	@foreach($data as $item)
				          	<tr>
					            <td class="center_align">
					            	<a href="{!!url('/products/'.$item->key)!!}"><img title="{!!$item->name!!}" alt="product" src="{!!$item->type=='product'?asset('resources/upload/product/'.$item->id.'/'.$item->img):asset('resources/upload/accessory/'.$item->id.'/'.$item->img)!!}" height="50" width="50"></a>
					            </td>
					            <td>
					            	<a href="{!!$item->type=='product'?url('/products/'.$item->key):url('/accessory/'.$item->key)!!}">{!!$item->name!!}</a>
					            </td>
					            <td class="center_align">
					            	{!!$item->qty!!}
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
				                <td><span class="bold">VAT ({!!vat*100!!}%) :</span></td>
				                <td><span class="bold">{!!number_format($total*vat,0,',','.')!!}</span></td>
				              </tr>
				              <tr>
				                <td><span class="ra bold totalamout">Tổng tiền :</span></td>
				                <td><span class="bold totalamout">{!!number_format($total*(1+0.1),0,',','.')!!}</span></td>
				              </tr>
				            </table>
				            <input type="button" value="Quay Lại Giỏ Hàng" class="btn btn-primary pull-right" onclick = "window.location='./shopping-cart/list'">
				            <input type="button" value="Quay Lại" class="btn btn-primary pull-right mr20" id ="back2" >
				            <input type="button" value="Tiếp Tục" class="btn btn-orange pull-right mr20" id ="continue2" >
				          </div>
				        </div>
			        </div>
		        </div>
	        </div>


	        <div id="step3">
				<h2 class ="heading1">
					Bước 3 Thời Gian & Địa Điểm Giao Hàng & Hình Thức Thanh Toán
				</h2>
				<br><br>
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label class="col-md-4 control-label">Địa Điểm Nhận *</label>
								<div class="col-md-4">
									<select name="place_receive" id="selectbox" class="city">
										<option value="Hà Nội">Hà Nội</option>
										<option value="TP Hồ Chí Minh">TP Hồ Chí Minh</option>
										<option value="Đà Nẵng">Đà Nẵng</option>
										<?php
											$city = DB::table('city')->get();
											foreach($city as $item){
												if($item->name=='Hà Nội'||$item->name=='TP Hồ Chí Minh'||$item->name=='Đà Nẵng')
													continue;
												echo "<option value='$item->name' id = '$item->id' class=''>$item->name</option>";
											}
										?>
									</select>
								</div>
								<!-- <div class="col-md-4">
									<select name="address_order" id="" class="form-control">
										<option value="">Chọn Quận/ Huyện</option>
										<?php
											if(isset($city_id)) {
												$district = DB::table('district')->where('city_id',$city_id)->get();
												foreach($district as $item)
												echo "<option value='$item->id' id = '$item->id'>$item->name</option>";
											}
										?>
									</select>
								</div> -->
							</div>
							<div class="form-group">
								<label class="col-md-4 control-label">Thời Gian Nhận *</label>
								<div class="col-md-4">
									<select name="day_receive" id="" class="form-control">
									<?php
										$today=date('Y-m-d H:i:s');
										$day = date('d');
										$month = date('m');
										$year = date('Y');
									?>
										@for($i=0; $i<7; $i++)
											@if($month == 1||$month==3||$month==5||$month==7||$month==8||$month==10||$month==12)
												@if($day+$i>31)
													<option value="{!!$year.'-'.($month+1).'-'.($day+$i-31)!!}">Ngày {!!($day+$i-31).'/'.($month+1).'/'.$year!!}</option>
												@else
													<option value="{!!$year.'-'.$month.'-'.($day+$i)!!}">Ngày {!!($day+$i).'/'.$month.'/'.$year!!}</option>
												@endif
											@else
												@if($day+$i>30)
													<option value="{!!$year.'-'.($month+1).'-'.($day+$i-30)!!}">Ngày {!!($day+$i-30).'/'.($month+1).'/'.$year!!}</option>
												@else
													<option value="{!!$year.'-'.$month.'-'.($day+$i)!!}">Ngày {!!($day+$i).'/'.$month.'/'.$year!!}</option>
												@endif
											@endif
										@endfor
									</select>
								</div>
								<div class="col-md-4">
									<select name="time_receive" id="" class="form-control">
										@for($i=10;$i<20;$i++)
											<option value="{!!$i.':00:00'!!}">{!!$i!!} h</option>
										@endfor
									</select>
								</div>
							</div>
						</div>
						<div class="col-md-6 offset-col-md-6">
							<div class="form-group">
								<label class="col-md-6 control-label">Hình Thức Thanh Toán *</label>
								<div class="col-md-6" style = "">
									<input type="radio" name="payment" value = "live" style = "margin-top:10px" checked> Thanh Toán Khi Nhận Hàng
									<br><input type="radio" name ="payment" value = "card"> Thanh Toán Qua Thẻ
								</div>
							</div>
							<div class="form-group">
								
							</div>
						</div>
						<br><br>
						<div class="form-group">
							<div class="col-md-6 col-md-offset-6 pull-right">
								<button type = "button" class = "btn btn-primary pull-right" id="back3">
									Quay Lại
								</button>
								<button type="submit" class="btn btn-orange pull-right mr20" id="">
									Gửi
								</button>
							</div>
						</div>
					</div>
				</div>
			</div>

			<br><br>
		</form>
	</div>
@endsection