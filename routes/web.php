<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function() {return view('user.home');})->name('home');

Route::group(['prefix' => '', 'namespace' => 'admin'], function() {	
	Route::get('login','LoginController@getLogin')->name('getLogin');
	Route::post('login','LoginController@postLogin')->name('postLogin');
	Route::get('logout','LoginController@getLogout')->name('getLogout');
});

Route::group(['middleware' => 'CheckAdminLogin','prefix' => ''], function() {
	Route::get('admin', function() {return view('admin.home');})->name('welcome');
});

Route::group(['middleware' => 'CheckAdminLogin','prefix' => '','namespace' => 'admin'], function() {
	Route::resource('dichvu',DichVuController::class);
	Route::resource('khachhang',KhachHangController::class);
	Route::resource('thue',ThueController::class);
	Route::resource('phong',PhongController::class);
	Route::resource('loaiphong',LoaiPhongController::class);
});

Route::group(['middleware' => 'CheckAdminLogin','prefix' => 'user', 'namespace' => 'admin'], function() {
	Route::get('/', 'UserController@index')->name('user.index');
	Route::get('index','UserController@index')->name('user.index');
	Route::get('add','UserController@getadd')->name('user.getadd');
	Route::post('add','UserController@postadd')->name('user.postadd');
	Route::get('edit/{id}','UserController@getedit')->name('user.getedit');
	Route::post('edit/{id}','UserController@postedit')->name('user.postedit');
	Route::get('delete/{id}','UserController@delete')->name('user.delete');
});

Route::group(['prefix' => '', 'namespace' => 'admin'], function() {
	//Route::get('/', function() {return view('FrontEnd.home.home');})->name('home');
	Route::get('/about', function() {return view('user.about');})->name('about');
	Route::get('/service', function() {return view('user.services.index');})->name('service');
	Route::get('/room', function() {return view('user.room.roomdetail');})->name('room');
	Route::get('/rooms', function() {return view('user.room.rooms');})->name('rooms');
	Route::get('/contact', function() {return view('user.contact');})->name('contact');
	Route::get('/book', function() {return view('user.book.create');})->name('book');
	//Route::get('/about', 'admin\PhongController@listPhong');
});



// Route::group(['prefix' => 'product', 'namespace' => 'FrontEnd'], function() {
// Route::get('/', 'ProductsController@index');
// Route::get('cart', 'ProductsController@cart');
// Route::get('add-to-cart/{id}', 'ProductsController@addToCart');
// Route::patch('update-cart', 'ProductsController@update');
// Route::delete('remove-from-cart', 'ProductsController@remove');
// });

// Route::group(['prefix' => 'home', 'namespace' => 'FrontEnd'], function() {
// 	//Route::get('/', function() {return view('FrontEnd.home.home');})->name('home');
// 	Route::get('/', 'HomeController@index')->name('home');
// });




/*
GET	    /product	        		index	product.index
GET	    /product/create	    		create	product.create
POST	/product					store	product.store
GET		/product/{product}			show	product.show
GET		/product/{product}/edit		edit	product.edit
PUT/PATCH	/product/{product}		update	product.update
DELETE	/ product/{product}			destroy	product.destroy
*/