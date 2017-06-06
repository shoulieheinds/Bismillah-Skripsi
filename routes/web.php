<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
| ShouHax Scriptor
| Note: in route for describe location of controller must be use '\' not '/', except when you access route for call blade you can use '/'. it's very |important to know
*/

Route::get('/', function () { return view('landing'); });



Auth::routes();

Route::group(['prefix' => 'admin'], function(){
	//route for auth admin
	Route::name('home')					 ->get ('home', 'AdminController@index');
	Route::name('admin.login')			 ->get ('login', 'Admin\Auth\LoginController@showLoginForm');
	Route::name('admin.login')			 ->post('login', 'Admin\Auth\LoginController@login');
	Route::name('admin.password.email')	 ->post('admin-password/email','Admin\Auth\ForgotPasswordController@sendResetLinkEmail');
	Route::name('admin.password.request')->get ('admin-password/reset','Admin\Auth\ForgotPasswordController@showLinkRequestForm');
	Route::name('admin.password.reset')  ->post('admin-password/reset','Admin\Auth\ResetPasswordController@reset');
	Route::name('admin.password.reset')  ->get ('admin-password/reset/{token}','Admin\Auth\ResetPasswordController@showResetForm');
	
	//route for misc pages
	Route::name('admin.faq')			 ->get ('faq', 'AdminController@admin_faq');
	Route::name('admin.contactus')		 ->get ('contactus', 'AdminController@contactus');
	});

Route::get('/home', 'MemberController@index');
Route::group(['prefix' => 'consument'], function(){
	//Route::name('home')						 ->get('/home', 'MemberController@index');	
	//Route::name('home')						 ->get ('home','MemberController@index');
	Route::name('consument.profile')		 ->get ('show_account', 'Consument\Auth\AccountController@index');
	Route::name('consument.change.profile')	 ->get ('profile_change', 'Consument\Auth\AccountController@editAccount');
	Route::name('consument.change.profile')  ->post('profile_change', 'Consument\Auth\RegisterController@updateAccount');

	//route data request
	Route::name('consument.request.data')	 ->get ('request_data', 'Consument\DataResearch\ResearchController@create');
	Route::name('consument.request.data')				 ->post('store_request_data', 'Consument\DataResearch\ResearchController@store');
	Route::name('consument.request.info') 	 ->get ('my_request', 'Consument\DataResearch\ResearchController@index');
	Route::name('consument.research.history')->get ('research.history','Consument\DataResearch\ResearchController@index');
	Route::name('consument.journal.list')	 ->get ('research.journal','Consument\DataResearch\ResearchController@journal');
	Route::name('consument.faq')			 ->get ('faqs','MemberController@faqs');
	Route::name('consument.contactus')		 ->get ('contactus','MemberController@contactus');	
	});