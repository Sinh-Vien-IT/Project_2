<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

define('vat','0.1');
Route::get('/', ['as'=>'home','uses'=>'WelcomeController@index']);
Route::get('admin', 'HomeController@index');
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
Route::get('active/{token}','Auth\AuthController@active');
Route::get('member','LoginMemberController@index' );
Route::group(['prefix'=>'admin', 'middleware'=>'auth'], function(){
	//Tìm kiếm
	Route::get('search/autocomplete',['as'=>'admin.getSearch','uses'=>'HomeController@getSearch']);
	Route::post('result',['as'=>'admin.postResult','uses'=>'HomeController@postResult']);
	Route::get('result/{key}',['as'=>'admin.getResult','uses'=>'HomeController@getResult']);
	//Quản lý thành viên
	Route::group(['prefix'=>'member'], function(){
		Route::get('add', ['as'=>'admin.member.getAdd', 'uses'=>'Admin\MemberController@getAdd']);
		Route::post('add', ['as'=>'admin.member.postAdd', 'uses'=>'Admin\MemberController@postAdd']);
		Route::get('update/{id}', ['as'=>'admin.member.getUpdate', 'uses'=>'Admin\MemberController@getUpdate']);
		Route::post('update/{id}', ['as'=>'admin.member.postUpdate', 'uses'=>'Admin\MemberController@postUpdate']);
		Route::get('delete/{id}', ['as'=>'admin.member.getDelete', 'uses'=>'Admin\MemberController@getDelete']);
		Route::post('delete', ['as'=>'admin.member.postDelete', 'uses'=>'Admin\MemberController@postDelete']);
		Route::get('list', ['as'=>'admin.member.getList', 'uses'=>'Admin\MemberController@getList']);
		Route::get('history/{id}',['as'=>'admin.member.getHistory','uses'=>'Admin\MemberController@getHistory']);
	});
	//Quản lý hãng sản xuất
	Route::group(['prefix'=>'company'], function(){
		Route::get('add', ['as'=>'admin.company.getAdd', 'uses'=>'Admin\CompanyController@getAdd']);
		Route::post('add', ['as'=>'admin.company.postAdd', 'uses'=>'Admin\CompanyController@postAdd']);
		Route::get('update/{id}', ['as'=>'admin.company.getUpdate', 'uses'=>'Admin\CompanyController@getUpdate']);
		Route::post('update/{id}', ['as'=>'admin.company.postUpdate', 'uses'=>'Admin\CompanyController@postUpdate']);
		Route::get('delete/{id}', ['as'=>'admin.company.getDelete', 'uses'=>'Admin\CompanyController@getDelete']);
		Route::post('delete', ['as'=>'admin.company.postDelete', 'uses'=>'Admin\CompanyController@postDelete']);
		Route::get('list', ['as'=>'admin.company.getList', 'uses'=>'Admin\CompanyController@getList']);
	});
	//Quản lý hệ điều hành
	Route::group(['prefix'=>'os'], function(){
		Route::get('add', ['as'=>'admin.os.getAdd', 'uses'=>'Admin\OsController@getAdd']);
		Route::post('add', ['as'=>'admin.os.postAdd', 'uses'=>'Admin\OsController@postAdd']);
		Route::get('update/{id}', ['as'=>'admin.os.getUpdate', 'uses'=>'Admin\OsController@getUpdate']);
		Route::post('update/{id}', ['as'=>'admin.os.postUpdate', 'uses'=>'Admin\OsController@postUpdate']);
		Route::get('delete/{id}', ['as'=>'admin.os.getDelete', 'uses'=>'Admin\OsController@getDelete']);
		Route::post('delete', ['as'=>'admin.os.postDelete', 'uses'=>'Admin\OsController@postDelete']);
		Route::get('list', ['as'=>'admin.os.getList', 'uses'=>'Admin\OsController@getList']);
	});
	//Quản lý giao diện
	Route::group(['prefix'=>'system'], function(){
		Route::group(['prefix'=>'lBanner'], function(){
			Route::get('add',['as'=>'admin.system.lBanner.getAdd','uses'=>'Admin\System\LargeBannerController@getAdd']);
			Route::post('add',['as'=>'admin.system.lBanner.postAdd','uses'=>'Admin\System\LargeBannerController@postAdd']);
			Route::get('update/{id}',['as'=>'admin.system.lBanner.getUpdate','uses'=>'Admin\System\LargeBannerController@getUpdate']);
			Route::post('update/{id}',['as'=>'admin.system.lBanner.postUpdate','uses'=>'Admin\System\LargeBannerController@postUpdate']);
			Route::get('delete/{id}',['as'=>'admin.system.lBanner.getDelete','uses'=>'Admin\System\LargeBannerController@getDelete']);
			Route::post('delete',['as'=>'admin.system.lBanner.postDelete','uses'=>'Admin\System\LargeBannerController@postDelete']);
			Route::get('list',['as'=>'admin.system.lBanner.getList','uses'=>'Admin\System\LargeBannerController@getList']);
		});
		Route::group(['prefix'=>'mBanner'], function(){
			Route::get('add',['as'=>'admin.system.mBanner.getAdd','uses'=>'Admin\System\SmallBannerController@getAdd']);
			Route::post('add',['as'=>'admin.system.mBanner.postAdd','uses'=>'Admin\System\SmallBannerController@postAdd']);
			Route::get('update/{id}',['as'=>'admin.system.mBanner.getUpdate','uses'=>'Admin\System\SmallBannerController@getUpdate']);
			Route::post('update/{id}',['as'=>'admin.system.mBanner.postUpdate','uses'=>'Admin\System\SmallBannerController@postUpdate']);
			Route::get('delete/{id}',['as'=>'admin.system.mBanner.getDelete','uses'=>'Admin\System\SmallBannerController@getDelete']);
			Route::post('delete',['as'=>'admin.system.mBanner.postDelete','uses'=>'Admin\System\SmallBannerController@postDelete']);
			Route::get('list',['as'=>'admin.system.mBanner.getList','uses'=>'Admin\System\SmallBannerController@getList']);
		});
	});
	//Quản lý sản phẩm điện thoại
	Route::group(['prefix'=>'product'], function(){
		Route::get('add',['as'=>'admin.product.getAdd','uses'=>'Admin\ProductController@getAdd']);
		Route::post('add',['as'=>'admin.product.postAdd','uses'=>'Admin\ProductController@postAdd']);
		Route::get('update/{id}',['as'=>'admin.product.getUpdate','uses'=>'Admin\ProductController@getUpdate']);
		Route::post('update/{id}',['as'=>'admin.product.postUpdate','uses'=>'Admin\ProductController@postUpdate']);
		Route::get('delete/{id}',['as'=>'admin.product.getDelete','uses'=>'Admin\ProductController@getDelete']);
		Route::post('delete',['as'=>'admin.product.postDelete','uses'=>'Admin\ProductController@postDelete']);
		Route::get('content/{id}',['as'=>'admin.product.getContent','uses'=>'Admin\ProductController@getContent']);
		Route::get('list',['as'=>'admin.product.getList','uses'=>'Admin\ProductController@getList']);
		Route::get('new',['as'=>'admin.product.getNew','uses'=>'Admin\ProductController@getNew']);
		Route::get('hot',['as'=>'admin.product.getHot','uses'=>'Admin\ProductController@getHot']);
		Route::get('delImg/{idHinh}',['as'=>'admin.product.delImage','uses'=>'Admin\ProductController@delImage']);
	});
	//Quản lý phụ kiện
	Route::group(['prefix'=>'accessory'], function(){
		Route::get('add',['as'=>'admin.accessory.getAdd','uses'=>'Admin\AccessoryController@getAdd']);
		Route::post('add',['as'=>'admin.accessory.postAdd','uses'=>'Admin\AccessoryController@postAdd']);
		Route::get('update/{id}',['as'=>'admin.accessory.getUpdate','uses'=>'Admin\AccessoryController@getUpdate']);
		Route::post('update/{id}',['as'=>'admin.accessory.postUpdate','uses'=>'Admin\AccessoryController@postUpdate']);
		Route::get('delete/{id}',['as'=>'admin.accessory.getDelete','uses'=>'Admin\AccessoryController@getDelete']);
		Route::post('delete',['as'=>'admin.accessory.postDelete','uses'=>'Admin\AccessoryController@postDelete']);
		Route::get('list',['as'=>'admin.accessory.getList','uses'=>'Admin\AccessoryController@getList']);
		Route::get('content/{id}',['as'=>'admin.accessory.getContent','uses'=>'Admin\AccessoryController@getContent']);
	});
	//Quản lý tin tức
	Route::group(['prefix'=>'news'],function(){
		Route::get('add',['as'=>'admin.news.getAdd','uses'=>'Admin\NewsController@getAdd']);
		Route::post('add',['as'=>'admin.news.postAdd','uses'=>'Admin\NewsController@postAdd']);
		Route::get('update/{id}',['as'=>'admin.news.getUpdate','uses'=>'Admin\NewsController@getUpdate']);
		Route::post('update/{id}',['as'=>'admin.news.postUpdate','uses'=>'Admin\NewsController@postUpdate']);
		Route::get('delete/{id}',['as'=>'admin.news.getDelete','uses'=>'Admin\NewsController@getDelete']);
		Route::post('delete',['as'=>'admin.news.postDelete','uses'=>'Admin\NewsController@postDelete']);
		Route::get('list',['as'=>'admin.news.getList','uses'=>'Admin\NewsController@getList']);
		Route::get('content/{id}',['as'=>'admin.news.getContent','uses'=>'Admin\NewsController@getContent']);
	});
	//Quản lý quảng cáo
	Route::group(['prefix'=>'advertisement'],function(){
		Route::get('add',['as'=>'admin.advertisement.getAdd','uses'=>'Admin\AdvertisementController@getAdd']);
		Route::post('add',['as'=>'admin.advertisement.postAdd','uses'=>'Admin\AdvertisementController@postAdd']);
		Route::get('update/{id}',['as'=>'admin.advertisement.getUpdate','uses'=>'Admin\AdvertisementController@getUpdate']);
		Route::post('update/{id}',['as'=>'admin.advertisement.postUpdate','uses'=>'Admin\AdvertisementController@postUpdate']);
		Route::get('delete/{id}',['as'=>'admin.advertisement.getDelete','uses'=>'Admin\AdvertisementController@getDelete']);
		Route::post('delete',['as'=>'admin.advertisement.postDelete','uses'=>'Admin\AdvertisementController@postDelete']);
		Route::get('list',['as'=>'admin.advertisement.getList','uses'=>'Admin\AdvertisementController@getList']);
	});
	//Quản lý nhập kho
	Route::group(['prefix'=>'import'],function(){
		Route::get('add/{type}',['as'=>'admin.import.getAdd','uses'=>'Admin\ImportController@getAdd']);
		Route::post('add/{type}',['as'=>'admin.import.postAdd','uses'=>'Admin\ImportController@postAdd']);
		// Route::get('update/{id}',['as'=>'admin.import.getUpdate','uses'=>'Admin\ImportController@getUpdate']);
		// Route::post('update/{id}',['as'=>'admin.import.postUpdate','uses'=>'Admin\ImportController@postUpdate']);
		// Route::get('delete/{id}',['as'=>'admin.import.getDelete','uses'=>'Admin\ImportController@getDelete']);
		// Route::post('delete',['as'=>'admin.import.postDelete','uses'=>'Admin\ImportController@postDelete']);
		Route::get('list',['as'=>'admin.import.getList','uses'=>'Admin\ImportController@getList']);
	});
	//Quản lý xuất kho
	Route::group(['prefix'=>'order'],function(){
		// Route::get('add',['as'=>'admin.order.getAdd','uses'=>'Admin\OrderController@getAdd']);
		// Route::post('add',['as'=>'admin.order.postAdd','uses'=>'Admin\OrderController@postAdd']);
		Route::get('update/{id}',['as'=>'admin.order.getUpdate','uses'=>'Admin\OrderController@getUpdate']);
		Route::post('update/{id}',['as'=>'admin.order.postUpdate','uses'=>'Admin\OrderController@postUpdate']);
		// Route::get('delete/{id}',['as'=>'admin.order.getDelete','uses'=>'Admin\OrderController@getDelete']);
		// Route::post('delete',['as'=>'admin.order.postDelete','uses'=>'Admin\OrderController@postDelete']);
		Route::get('list',['as'=>'admin.order.getList','uses'=>'Admin\OrderController@getList']);
		Route::get('list/custormer/{id}',['as'=>'admin.order.getInforCustormer','uses'=>'Admin\OrderController@getInforCustormer']);
	});
	//Quản lý doanh thu
	Route::group(['prefix'=>'revenue'],function(){
		Route::get('list',['as'=>'admin.revenue.getList','uses'=>'Admin\RevenueController@getList']);
		Route::post('list',['as'=>'admin.revenue.postList','uses'=>'Admin\RevenueController@postList']);
		Route::get('hot/{type}',['as'=>'admin.revenue.getHot','uses'=>'Admin\RevenueController@getHot']);
		Route::post('hot/{type}',['as'=>'admin.revenue.postHot','uses'=>'Admin\RevenueController@postHot']);
	});
});
//Quản lý cá nhân của thành viên
Route::group(['prefix'=>'member','middleware'=>'auth'],function(){
	Route::get('update/{id}', ['as'=>'user.member.getUpdate', 'uses'=>'Member\MemberUpdateController@getUpdate']);
	Route::post('update/{id}', ['as'=>'user.member.postUpdate', 'uses'=>'Member\MemberUpdateController@postUpdate']);
	Route::get('history/{id}', ['as'=>'user.history.getList', 'uses'=>'Member\MemberUpdateController@getList']);
});
//Liên hệ
Route::get('contact',['as'=>'getContact','uses'=>'WelcomeController@getContact']);
Route::post('contact',['as'=>'postContact','uses'=>'WelcomeController@postContact']);
//Trang phụ kiện
Route::get('accessory',['as'=>'getAccessory', 'uses'=>'WelcomeController@getAccessory']);
Route::get('accessory/{type}',['as'=>'getAllAccessory', 'uses'=>'WelcomeController@getAllAccessory']);
//Chi tiết sản phẩm
Route::get('accessory/{type}/{key}','WelcomeController@accessory');
Route::get('products/{key}','WelcomeController@product');
//Giỏ hàng
Route::group(['prefix'=>'shopping-cart'],function(){
	Route::get('buy/{type}/{id}',['as'=>'buy_product','uses'=>'WelcomeController@buy_product']);
	// Route::get('buy_accessory/{id}',['as'=>'buy_product','uses'=>'WelcomeController@buy_accessory']);
	Route::get('list',['as'=>'shopping_cart','uses'=>'WelcomeController@getList']);
	Route::get('delete/{type}/{id}',['as'=>'delete','uses'=>'WelcomeController@delete']);
	Route::get('update/{id}/{qty}/{type}',['as'=>'update','uses'=>'WelcomeController@update']);
	Route::get('destroyCart',['as'=>'destroyCart','uses'=>'WelcomeController@destroyCart']);
});
//Thanh toán
Route::get('checkout',['as'=>'getCheckout','uses'=>'WelcomeController@getCheckout']);
Route::post('checkout',['as'=>'postCheckout','uses'=>'WelcomeController@postCheckout']);
//Hiện tin tức
Route::get('news',['as'=>'getAllNews','uses'=>'WelcomeController@getAllNews']);
Route::get('news/{type}',['as'=>'getTypeNews','uses'=>'WelcomeController@getTypeNews']);
Route::get('news/{type}/{key}',['as'=>'getNews','uses'=>'WelcomeController@getNews']);
//Trang sản phẩm của hãng sản xuất
Route::get('company/{id}',['as'=>'getProductOfCompany','uses'=>'WelcomeController@getProductOfCompany']);
//Trang sản phẩm bán chạy
Route::get('hot/{type}',['as'=>'getHot', 'uses'=>'WelcomeController@getHot']);
//Trang sản phẩm mới
Route::get('new',['as'=>'getNew', 'uses'=>'WelcomeController@getNew']);
//Tìm kiếm
Route::get('search/autocomplete',['as'=>'getSearch','uses'=>'WelcomeController@getSearch']);
Route::post('result',['as'=>'postResult','uses'=>'WelcomeController@postResult']);
Route::get('result/{key}',['as'=>'getResult','uses'=>'WelcomeController@getResult']);
//Trang sản phẩm khuyến mãi
Route::get('promotion',['as'=>'getPromotion','uses'=>'WelcomeController@getPromotion']);

//Chuyển hướng tất cả các đường dẫn không chính xác về trang trước đó
Route::get('{type}',function(){
	return redirect()->back();
});

