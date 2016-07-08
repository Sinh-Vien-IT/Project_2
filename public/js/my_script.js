$(document).ready(function(){
	//Chú ý để hàm toggle ở dưới vì nó bắt sự kiện onclick 
	update();
	flash_message();
	reset_form();
	check_display();
	clickDel();
	add_detail();
	selectbox();
	search();
	search_admin();
	nextstep();
	// checkout();
	// hover_product();
	toggle();
});

//Hàm để cho các thông báo lỗi hoặc thành công hiện trong 10s rồi bị slideUP
function flash_message(){
	$('div.message').delay(5000).slideUp();
}
// Hàm để checkall tất cả các checkbox có name là check[]
function toggle(source) {
  checkboxes = document.getElementsByName('check[]');
  for(var i=0, n=checkboxes.length;i<n;i++) {
        checkboxes[i].checked = source.checked;
  }
}
//Vì kiểu reset trong input là chỉ xóa những dữ liệu mà người dùng nhập từ bàn phím nên những dữ liệu đã để mạc định sẽ không thể xóa do đó ta tạo ra hàm reset_form để xóa toàn bộ dữ liệu
function reset_form(){
	$('input#reset_form').click(function(){
		$("#updateForm input[type = 'text']").attr('value','');
		$("#updateForm select option").attr('selected',null);
		$('#updateForm select option').first().attr('selected','selected');
	});
}
//Hàm bắt sự kiện click vào ô checkbox chọn hiển thị hay không hiển thị trong banner
function check_display(){
	$('#check_display').click(function(){
		if($(this).attr('value')==0) {
			$(this).attr('value', '1');
		}else{
			$(this).attr('value','0');
		}
	});
}

//Hàm bắt sự kiện nhấn vào thêm detail cho sản phẩm
function add_detail(){
	$('#add_detail').click(function(){
		$('#insert').append('<div class="form-group"><div class="col-md-6 col-md-offset-3"><input type="file" name="img_detail[]"  style="margin-top: 5px; border: 1px solid #CCCCCC; width: 100%; border-radius: 5px;"></div></div>');
	});
}

//Hàm xóa ảnh khi nhấn button xóa trên mỗi ảnh detail
function clickDel(){
	$('a#del_img').on('click',function(){
		// var url= "http://dienthoai321.890m.com/admin/product/delImg/";
		var url= "http://localhost/Project_2/admin/product/delImg/";
		var _token = $('#updateForm').find('input[name="_token"]').val();
		// id của hình ảnh detail muốn xóa
		var idHinh=$(this).parent().find('img').attr('idHinh');
		// id của cả div chứa hình và button xóa
		var id = $(this).parent().attr('id');
		// đường dẫn của hình ảnh
		var img = $(this).parent().find('img').attr('src');

		$.ajax({
			url: url+idHinh,
			type:"GET",
			cache:false,
			data: {'_token':_token,'idHinh':idHinh,'urlHinh':img},
			success:function(data){
				if(data=="OK")
					$('#'+id).remove();
				else
					alert('Không xóa được hình');
			}
		});
	})
}
//Hàm sử lý sự kiện khi hover vào ảnh sản phẩm
// function hover_product(){
// 	$('.image').hover(function(){
// 		$('.buy_button').css('display','block');
// 	},function(){
// 		$('.buy_button').css('display','none');
// 	});
// }
//Hàm sử lý sự kiện khi nhấn nút update
function update(){
	$('.update').click(function(){
		var rowid = $(this).attr('id');
		var type = $(this).attr('idtype');
		var qty = $(this).parent().parent().find('.span1').val();
		var _token = $('input[name="_token"]').val();
		$.ajax({
			// url:'http://dienthoai321.890m.com/shopping-cart/update/'+rowid+'/'+qty+'/'+type,
			url:'http://localhost/Project_2/shopping-cart/update/'+rowid+'/'+qty+'/'+type,
			type:"GET",
			cache:false,
			data:{'_token':_token,'id':rowid,'qty':qty,'type':type},
			success:function(data){
				if(data=="ok"){
					window.location='list';
				}
			}
		});
	});
}

// //Hàm sử lý sự kiện khi ấn vào chọn tỉnh trong bước 3 của quá trình thanh toán
// function checkout(){
// 	$('.city').click(function(){
// 		var city_id = $(this).val();
// 		var _token = $('input[name="_token3"]').val();

// 		$.ajax({
// 			url:"http://localhost/Project_2/city/"+city_id,
// 			type:'GET',
// 			cache:false,
// 			data:{'_token':_token,'id':city_id},
// 			success:function(data){
// 				if(data=='oke'){
// 					alert('hoàn thành');
// 				}
// 			}
// 		});
// 	});
// }

//Hàm sử lý sự kiện tìm kiếm của khách
function search(){
	$('#search').autocomplete({
		// source: "http://dienthoai321.890m.com/search/autocomplete",
		source: "http://localhost/Project_2/search/autocomplete",
		select: function(event, ui) {
		var key = ui.item.value;
		// window.location = "http://dienthoai321.890m.com/result/"+key;
		window.location = "http://localhost/Project_2/result/"+key;
	  }
    });
}
//Hàm sử lý sự kiện tìm kiếm của khách
function search_admin(){
	$('#search_admin').autocomplete({
		// source: "http://dienthoai321.890m.com/search/autocomplete",
		source: "http://localhost/Project_2/admin/search/autocomplete",
		select: function(event, ui) {
		var key = ui.item.value;
		// window.location = "http://dienthoai321.890m.com/admin/result/"+key;
		window.location = "http://localhost/Project_2/admin/result/"+key;
	  }
    });
}

//Hàm tìm kiếm quốc gia trong selectbox
function selectbox(){
	$('#selectbox, #selectbox1').select2({
    	allowClear: true
	});
}
//Hàm sử dụng để chuyển qua lại các bước trong phần thanh toán
function nextstep(){
	$('.home').removeClass('active');
	$('#step2').css('display','none');
	$('#step3').css('display','none');
	$('#continue1').click(function(){
		$('#step1').css('display','none');
		$('#step2').css('display','block');
	});
	$('#continue2').click(function(){
		$('#step2').css('display','none');
		$('#step3').css('display','block');
	});
	$('#back2').click(function(){
		$('#step2').css('display','none');
		$('#step1').css('display','block');
	});
	$('#back3').click(function(){
		$('#step3').css('display','none');
		$('#step2').css('display','block');
	});
}