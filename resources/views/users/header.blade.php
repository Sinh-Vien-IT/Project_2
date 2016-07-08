<script>
	$(document).ready(function(){
		$('.h_search').submit(function(){
			var data = $.trim($('#search').val());
			$flag = true;
			if(data==''){
				alert('Bạn vui lòng nhập vào tên sản phẩm cần tìm');
				$flag = false;
			}
			return $flag;
		});
	});
</script>
<div class="h_top">
	<div class="h_logo">
		<a href="{!!url('/')!!}">
			<img src="{!!asset('public/images/logo2.png')!!}" alt="DienThoai321" title="DienThoai321">
		</a>
	</div>
	<div class="h_right">
		<form action = "{!!url('result')!!}" class="h_search" method="POST">
			<input type="hidden" name="_token" value="{!!csrf_token()!!}">
			<input type="text" placeholder = "Nhập vào từ cần tìm kiếm..." name = "search" id="search">
			<button type = "submit" class="h_img"><img src="{!!asset('public/images/search.png')!!}" alt="Icon search" ></button>
		</form>
		<ul class = "cart">
			<li><a href="{!!route('shopping_cart')!!}">Giỏ Hàng</a></li>
			<li><a href="{!!route('getCheckout')!!}">Thanh Toán</a></li>
		</ul>
		@if(Auth::user())
			<div class="info_member">
				<div class = "fullname_member">
					<img src="{!!asset('resources/upload/avatar/'.Auth::user()->id.'/'.Auth::user()->avatar)!!}" alt="Avatar" class="avatar">
				</div>
				<ul>
					<li><a href="{!!url('member/update'.'/'.Auth::user()->id)!!}">Cập Nhật</a></li>
					<li><a href="{!!url('member/history'.'/'.Auth::user()->id)!!}">Lịch Sử Mua Hàng</a></li>
					<li><a href="{!!url('/auth/logout')!!}">Đăng Xuất</a></li>
				</ul>
			</div>
			<span class="fullname">{!!Auth::user()->fullname!!}</span>
		@else
			<div class = "h_login_register">
				<a href="{{url('auth/login')}}">Đăng Nhập</a>
				<a href="{{url('auth/register')}}">Đăng Ký</a>
			</div>
		@endif
	</div>
</div> <!-- End of H-Top -->

