@extends('users/master')

@section('content')
	<script type="text/javascript">
		$(document).ready(function(){
			$('.contact').addClass('active');
		});
	</script>
	<div class="urlCurrent">
		<ul>
			<li><a href="{!!url('/')!!}">Home</a>
				<span class = "divider">>></span>
			</li>
			<li>Liên Hệ</li>
		</ul>
	</div>
	<div class = "main_content">
		<h1 class = "heading1">
			Liên Hệ
		</h1>
		<br><br>
		<div class="row">
			<div class="col-md-8 col-md-offset-2">

				<form class="form-horizontal" role="form" action="{!!url('contact')!!}" method = "POST">
					<input type="hidden" name="_token" value ="{!!csrf_token()!!}">
					@include('admin/alert')
					@include('admin/error')

					<div class="panel panel-default">
						<div class="panel-body">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.6612487073207!2d105.84093861449092!3d21.006211893924508!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ac76ccab6dd7%3A0x55e92a5b07a97d03!2zxJDhuqFpIEjhu41jIELDoWNoIEtob2EgSMOgIE7hu5lp!5e0!3m2!1svi!2s!4v1462096391059" width="600" height="300" frameborder="0" style="border:0; margin-bottom: 20px" allowfullscreen></iframe>
							<div class="form-group">
								<label class="col-md-4 control-label">Họ Tên*</label>
								<div class="col-md-6">
									<input type="text" class="form-control" name ="fullname" value="{!!old('fullname',Auth::user()?Auth::user()->fullname:null)!!}">
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-4 control-label">Email*</label>
								<div class="col-md-6">
									<input type="email" class="form-control" name ="email" value="{!!old('email',Auth::user()?Auth::user()->email:null)!!}">
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-4 control-label">Nội dung*</label>
								<div class="col-md-6">
									<textarea class="form-control" name="mess" cols="30" rows="7" placeholder="Nhập nội dung tin nhắn vào đây!">{!!old('mess')!!}</textarea>
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-6 col-md-offset-4">
									<button type="submit" name="send" value ="" class="btn btn-orange">Gửi</button>
									<button type="reset" value="" class="btn btn-default">Đặt Lại</button>
								</div>
							</div>
						</div>
					</div>
				</form>
				<br><br>
			</div>
		</div>
	</div>
@endsection