<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Điện Thoại Hot, Điện Thoại Mới, Điện Thoại Bán Chạy</title>
	<link rel="stylesheet" href="{!!asset('public/css/bootstrap.min.css')!!}">
	<link href="{!!asset('public/css/SpryTabbedPanels.css')!!}" rel="stylesheet" type="text/css" />
	<link href="{!!asset('public/css/jquery.bxslider.css')!!}" rel="stylesheet" type="text/css" />
	<link href="{!!asset('public/css/font-awesome.min.css')!!}" rel="stylesheet" type="text/css" />
	<link href="{!!asset('public/css/jquery-ui.min.css')!!}" rel="stylesheet" type="text/css" />
	<link href="{!!asset('public/css/select2.css')!!}" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="{!!asset('public/css/user.css')!!}">
	@yield('css')
	<script src="{!!asset('public/js/SpryTabbedPanels.js')!!}" type="text/javascript"></script>
	<script type = "text/javascript" src = "{!!asset('public/js/jquery.min.js')!!}"></script>
	<script type = "text/javascript" src = "{!!url('public/js/bootstrap.min.js')!!}"></script>
	<script type = "text/javascript" src = "{!!asset('public/js/jquery.bxslider.min.js')!!}"></script>
	<script type = "text/javascript" src = "{!!asset('public/js/jquery-ui.min.js')!!}"></script>
	<script type = "text/javascript" src = "{!!asset('public/js/select2.js')!!}"></script>
	<script type="text/javascript" src = "{!!asset('public/js/user.js')!!}"></script>
	<script type="text/javascript" src = "{!!asset('public/js/my_script.js')!!}"></script>
	<style type = "text/css">
		#ui-id-1{
			position:fixed;
			z-index:1000000;
		}
		.session_child{float: left; margin-right: 20px;width: 45px;    margin-top: 30px;}
	</style>
	<script type="text/javascript">
		$(document).ready(function(){
			$('.home,.hot,.new,.accessor,.company,.promot,.news,.contact').removeClass('active');
		});
	</script>
</head>
<body>
	<!-- facebook -->
	<div id="fb-root"></div>
	<script>
	(function(d, s, id) {
  		var js, fjs = d.getElementsByTagName(s)[0];
  		if (d.getElementById(id)) return;
  		js = d.createElement(s); js.id = id;
  		js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.6&appId=480548748781562";
  		fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));
	</script>
	
	<div id="header">
		@include('users/header')
	</div> <!-- End of Header -->
	<div id="navbar">
		<ul class="main_menu">
			<li class="home"><a href="{!!url('/')!!}"><img src="{!!asset('public/images/iHome.png')!!}" alt=""></a></li>
			<li class="hot"><a href="{!!url('hot/month')!!}">Bán Chạy</a>
			</li>
			<li class="new"><a href="{!!url('new')!!}">Sản Phẩm Mới</a></li>
			<li class="accessor"><a href="{!!url('accessory')!!}">Phụ Kiện</a>
				<ul>
					<?php
						$accessories = DB::table('accessories')->select('type')->distinct()->get();
					?>
					@foreach($accessories as $item)
						<li><a href="{!!url('accessory/'.changeTitle($item->type))!!}">{!!$item->type!!}</a></li>
					@endforeach
				</ul>
			</li>
			<li class="company"><a href="">Hãng Sản Xuất</a>
				<ul>
					<?php
						$companies = DB::table('companies')->skip(0)->take(5)->get();
					?>
					@foreach($companies as $company)
						<li><a href="{!!url('company/'.$company->id)!!}">{!!$company->company_name!!}</a></li>
					@endforeach
					<li><a>Hãng khác</a>
						<ul>
							<?php
								$companies = DB::table('companies')->skip(5)->take(50)->get();
							?>
							@foreach($companies as $company)
								<li><a href="{!!url('company/'.$company->id)!!}">{!!$company->company_name!!}</a></li>
							@endforeach
						</ul>
					</li>
				</ul>
			</li>
			<li class="promot"><a href="{!!url('promotion')!!}">Khuyến Mãi</a></li>
			<li class="news"><a href="{!!url('news')!!}">Tin Tức</a>
				<ul>
					<?php
						$news = DB::table('news')->select('type')->distinct()->get();
					?>
					@foreach($news as $item)
						<li><a href="{!!url('news/'.changeTitle($item->type))!!}">{!!$item->type!!}</a></li>
					@endforeach
				</ul>
			</li>
			<li class="contact"><a href="{!!route('getContact')!!}">Liên Hệ</a></li>
		</ul>
	</div> <!-- End of Navbar -->
	<div class="clear"></div>

	<div id="content">
		@yield('content')
	</div> <!-- End of Content -->
	<div id="footer">
		<div class="connect_us">
			<div class="session">
			  	<div id="TabbedPanels1" class="TabbedPanels">
				  	<ul class="TabbedPanelsTabGroup">
					    <li class="TabbedPanelsTab" tabindex="0">Công Ty</li>
					    <li class="TabbedPanelsTab" tabindex="0">Hướng Dẫn Mua Online</li>
			    	</ul>
				  	<div class="TabbedPanelsContentGroup">
					    <div class="TabbedPanelsContent">
					    	<img src="{!!asset('public/images/about.png')!!}"/> 
	                        <ul class = "list">
	                            <li><a href = "#">Giới thiệu công ty</a></li>
	                            <li><a href = "#">Phương châm bán hàng</a></li>
	                            <li><a href = "#">Hệ thống chi nhánh</a></li>
	                        </ul>
					    </div>
				    	<div class="TabbedPanelsContent">
				    		<p class="title_hd">Hướng dẫn mua hàng</p>
                            <p class = "content_hd">1. Hãy liên hệ tới nhóm TTT<br />
                                Địa chỉ: Đại học Bách Khoa Hà Nội<br /><br/>
                                2. Mua hàng Online
                            </p>
				    	</div>
			    	</div>
			  	</div>
          	</div>
			<div class="session">
				<img src="{!!asset('public/images/ngoac_left.png')!!}" alt="" class="ngoac">
				<div class="content_share">
					<p class="title_footer">Bạn có thắc mắc?</p>
					<br>
					<div class="call">
						<img src="{!!asset('public/images/icon-phone.png')!!}" alt="">
						<span>01688893189</span>
					</div>
					Hoặc
					<div class="call">
						<img src="{!!asset('public/images/icon-phone.png')!!}" alt="">
						<span>0983815459</span>
					</div>
					Hoặc
					<div class="call">
						<img src="{!!asset('public/images/icon-phone.png')!!}" alt="">
						<span>01647207226</span>
					</div>

					<!-- <form action="" class="facebook">
						<button type = "submit"><img src="{!!asset('public/images/i_face.png')!!}" alt="">0 lượt chia sẻ</button>
					</form>
					<form action="" class="gmail">
						<button type = "submit"><img src="{!!asset('public/images/i_gmail.png')!!}" alt="">0 lượt chia sẻ</button>
					</form>
					<form action="" class="youtube">
						<button type = "submit"><img src="{!!asset('public/images/i_you.png')!!}" alt="">0 lượt chia sẻ</button>
					</form> -->

				</div>
				<img src="{!!asset('public/images/ngoac_right.png')!!}" alt="" class="ngoac">
			</div>
			<div class="session">
				<p class="title_footer">Giải Thưởng Đạt Được</p>
				<div class="cup">
					<img src="{!!asset('public/images/cup_01.png')!!}" alt="" class="img_cup">
					<p class="content_cup">Top Thương Hiệu Vàng Được Bạn Đọc Bình Chọn 5 Năm</p>
				</div>
				<div class="cup">
					<img src="{!!asset('public/images/cup_02.png')!!}" alt="" class="img_cup">
					<p class="content_cup">Thương Hiệu Việt Được Yêu Thích Nhất</p>
				</div>
			</div>
		</div> <!-- End of Connect Us-->
		<div class="main_footer">
			<a href="{!!url('hot/month')!!}">Bán Chạy</a>|
			<a href="{!!url('new')!!}">Sản Phẩm Mới</a>|
			<a href="{!!url('accessory')!!}">Phụ Kiện</a>|
			<a href="#">Hãng Sản Xuất</a>|
			<a href="{!!url('promotion')!!}">Khuyến Mãi</a>|
			<a href="{!!url('news')!!}">Tin Tức</a>|
			<a href="{!!route('getContact')!!}">Liên Hệ</a>
			<p>Bản quyền &copy 2016 thuộc về nhóm TTT </p>
		</div> <!-- End of Main Footer -->
	</div> <!-- End of Footer -->
<script type="text/javascript">
var TabbedPanels1 = new Spry.Widget.TabbedPanels("TabbedPanels1");
</script>

</body>
</html>