<!DOCTYPE html>
<html lang="vi">
<head>
	<meta charset="UTF-8">
	<title>Admin Manager</title>
	<link rel="stylesheet" href="{!!url('public/css/bootstrap.min.css')!!}">
	<link rel="stylesheet" href="{!!url('public/css/font-awesome.min.css')!!}">
	<link rel="stylesheet" href="{!!asset('public/css/jquery-ui.min.css')!!}" />
	<link rel="stylesheet" href="{!!url('public/css/select2.css')!!}"/>
	<link rel="stylesheet" href="{!!url('public/css/admin.css')!!}">

	<!-- Thêm vào các css -->
	@yield('css')
	<script type = "text/javascript" src = "{!!url('public/js/jquery.min.js')!!}"></script>
	<script type = "text/javascript" src = "{!!url('public/js/bootstrap.min.js')!!}"></script>
	<script type = "text/javascript" src = "{!!asset('public/js/jquery-ui.min.js')!!}"></script>

	<!-- Sử dụng jquery và bootstrap trên mạng -->
	
	<!-- <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script> -->
	<!-- <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.4/js/bootstrap.min.js"></script> -->

	
	<script type = "text/javascript" src = "{!!url('public/js/ckeditor/ckeditor.js')!!}"></script>
	<script type = "text/javascript" src = "{!!url('public/js/ckfinder/ckfinder.js')!!}"></script>
	<script type ="text/javascript">
		var baseURL = "{!!url('/')!!}" ;
	</script>
	<script type = "text/javascript" src = "{!!url('public/js/func_ckfinder.js')!!}"></script>
	<script type = "text/javascript" src = "{!!url('public/js/select2.js')!!}"></script>
	<script type = "text/javascript" src = "{!!url('public/js/admin.js')!!}"></script>
	<!-- Script tự tạo cho một số hành động -->
	<script type = "text/javascript" src = "{!!url('public/js/my_script.js')!!}"></script>
	<script>
	$(document).ready(function(){
		$('.h_search').submit(function(){
			var data = $.trim($('#search_admin').val());
			$flag = true;
			if(data==''){
				alert('Bạn vui lòng nhập vào tên sản phẩm cần tìm');
				$flag = false;
			}
			return $flag;
		});
	});
</script>
</head>
<body>
	<div id="header">
		<div class="logo">
			<a href="#"><img src="{!!url('public/images/logo.png')!!}" alt="Điện Thoại 321" title = "DienThoai321.com"></a>
		</div>
		<div class="info_manage">
			<a><span>{!!(Auth::user()->role=='admin')?'Admin':'Manager'!!} </span>
				<i class="fa fa-chevron-down"></i>
			</a>
			<ul>
				<li><a href="{!!url('admin/member/update')!!}/{!!Auth::user()->id!!}"><i class="fa fa-gears"></i> Cập nhật</a></li>
				<li><a href="{!!url('/auth/logout')!!}"><i class="fa fa-power-off"></i> Đăng xuất</a></li>
			</ul>
		</div>
	</div> <!-- End of Header -->

	<div id="content">
		<div id="nav">
			<div class="info_admin">
				<img src="{!!url('resources/upload/avatar/'.Auth::user()->id.'/'.Auth::user()->avatar)!!}" alt="" height="45px" width="45px">
				<span>{!!(Auth::user()->role=='admin')?'Admin':'Manager'!!}<br/>{{Auth::user()->fullname}}</span>
			</div>
			<div class="search_box">
				<form action="{!!url('admin/result')!!}" method ="POST" class="h_search">
					<input type="hidden" name="_token" value = "{!!csrf_token()!!}">
					<input type="text" value = "" placeholder="Tìm kiếm..."  id="search_admin">
					<button type="submit" name = "search" class="bt_search">
						<img src="{!!asset('public/images/search.png')!!}" alt="Icon search" >
					</button>
				</form>
			</div>
			<div class="main_nav">
				<ul>
					@if(Auth::user()->role=='admin')
					<li>
						<a>
							<span class="glyphicon glyphicon-wrench"></span>
							Quản lý giao diện
							<i class="fa fa-chevron-right i_last"></i>
						</a>
						<ul>
							<li>
								<a href="{!!route('admin.system.lBanner.getList')!!}">
									<span class="glyphicon glyphicon-resize-full"></span>
									Banner lớn
								</a>
							</li>
							<li>
								<a href="{!!route('admin.system.mBanner.getList')!!}">
									<span class="glyphicon glyphicon-resize-small"></span>
									Banner nhỏ
								</a>
							</li>
							
						</ul>
					</li>
					<li>
						<a href="{!!route('admin.news.getList')!!}">
							<span class="glyphicon glyphicon-globe"></span>
							Quản lý tin tức
						</a>
					</li>
					
					<!-- <li>
						<a href="">
							<span class="glyphicon glyphicon-earphone"></span>
							Liên hệ
						</a>
					</li> -->

					<li>
						<a href="{!!route('admin.member.getList')!!}">
							<span class="glyphicon glyphicon-user"></span>
							Thành viên
						</a>
					</li>
					<li>
						<a href="{!!route('admin.advertisement.getList')!!}">
							<span class="glyphicon glyphicon-picture"></span>
							Quản lý quảng cáo
						</a>
					</li>
					@elseif(Auth::user()->role=='manager')
					<li>
						<a href="{!!route('admin.member.getList')!!}">
							<span class="glyphicon glyphicon-user"></span>
							Thành viên
						</a>
					</li>
					<li>
						<a href="{!!route('admin.company.getList')!!}">
							<span class="glyphicon glyphicon-list-alt"></span>
							Hãng sản xuất
						</a>
					</li>
					<li>
						<a href="{!!route('admin.os.getList')!!}">
							<span class="glyphicon glyphicon-list-alt"></span>
							Hệ điều hành
						</a>
					</li>
					<li>
						<a>
							<span class="glyphicon glyphicon-qrcode"></span>
							Quản lý sản phẩm
							<i class="fa fa-chevron-right i_last"></i>
						</a>
						<ul>
							<li>
								<a href="{!!route('admin.product.getList')!!}">
									<span class="glyphicon glyphicon-earphone"></span>
									Điện thoại
								</a>
							</li>
							<li>
								<a href="{!!route('admin.product.getNew')!!}">
									<span class="glyphicon glyphicon-thumbs-up"></span>
									Điện thoại mới
								</a>
							</li>
							
							<li>
								<a href="{!!route('admin.accessory.getList')!!}">
									<span class="glyphicon glyphicon-hdd"></span>
									Phụ kiện
								</a>
							</li>
						</ul>
					</li>
					<li>
						<a>
							<span class="glyphicon glyphicon-file"></span>
							Quản lý đơn hàng
							<i class="fa fa-chevron-right i_last"></i>
						</a>
						<ul>
							<li>
								<a href="{!!route('admin.import.getList')!!}">
									<span class="glyphicon glyphicon-earphone"></span>
									Đơn hàng nhập kho
								</a>
							</li>
							<li>
								<a href="{!!route('admin.order.getList')!!}">
									<span class="glyphicon glyphicon-thumbs-up"></span>
									Đơn hàng xuất kho
								</a>
							</li>
							
						</ul>
					</li>
					<li>
						<a>
							<span class="glyphicon glyphicon-stats"></span>
							Thống kê
							<i class="fa fa-chevron-right i_last"></i>
						</a>
						<ul>
							<li>
								<a href="{!!url('admin/revenue/hot/product')!!}">
									<span class="glyphicon glyphicon-usd"></span>
									Điện thoại bán chạy
								</a>
							</li><li>
								<a href="{!!url('admin/revenue/hot/accessory')!!}">
									<span class="glyphicon glyphicon-usd"></span>
									Phụ kiện bán chạy
								</a>
							</li>
							<li>
								<a href="{!!route('admin.revenue.getList')!!}">
									<span class="glyphicon glyphicon-usd"></span>
									Doanh thu
								</a>
							</li>
						</ul>
					</li>
					@endif
				</ul>
			</div>
		</div> <!-- End of Navbar -->
		<div id="main">
			<!-- Thêm nội dung vào -->

			@yield('content')
			
		</div> <!-- End of Main -->
	</div> <!-- End of Contend -->
	<div id="footer">
		<p>Bản quyền &copy 2016 thuộc về nhóm TTT </p>
	</div> <!-- End of Footer -->
</body>
</html>