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
*/

Route::get('/', function () {
return view('landing');
// }, [ 'middleware' => 'guest', 'guest:admin' ]);

// Route::get('/', ['middleware' => 'guest, guest:admin', function () {
//     return view ('landing');
});

Auth::routes();








Route::group(['prefix' => 'admin'], function(){
	//route for auth admin
	Route::name('home')					 ->get('/home', 'AdminController@index');
	Route::name('admin.login')			 ->get('/login', 'Admin\Auth\LoginController@showLoginForm');
	Route::name('admin.login')			 ->post('/login', 'Admin\Auth\LoginController@login');
	Route::name('admin.password.email')	 ->post('/admin-password/email','Admin\Auth\ForgotPasswordController@sendResetLinkEmail');
	Route::name('admin.password.request')->get('/admin-password/reset','Admin\Auth\ForgotPasswordController@showLinkRequestForm');
	Route::name('admin.password.reset')  ->post('/admin-password/reset','Admin\Auth\ResetPasswordController@reset');
	Route::name('admin.password.reset')  ->get('/admin-password/reset/{token}','Admin\Auth\ResetPasswordController@showResetForm');
	
		//route for misc pages
	Route::name('admin.faq')			 ->get('admin-faq', 'AdminController@admin_faq');
	Route::name('admin.contactus')		 ->get('admin-contactus', 'AdminController@contactus');
});

/*Route::get('admin/home', 'AdminController@index');

Route::get('admin','Admin\Auth\LoginController@showLoginForm')->name('admin.login');
Route::post('admin','Admin\Auth\LoginController@login');
Route::post('admin-password/email','Admin\Auth\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
Route::get('admin-password/reset','Admin\Auth\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
Route::post('admin-password/reset','Admin\Auth\ResetPasswordController@reset');
Route::get('admin-password/reset/{token}','Admin\Auth\ResetPasswordController@showResetForm')->name('admin.password.reset');
Route::get('admin-faq', 'AdminController@admin_faq')->name('admin.faq');
Route::get('admin-contactus', 'AdminController@contactus')->name('admin.contactus');*/


// ShouHax Scriptor
// Note: in route for describe location of controller must be use '\' not '/', except when you access route for call blade you can use '/'. it's very important to know

Route::group(['prefix' => 'consument'], function(){
	Route::name('home')						 ->get('home','MemberController@index');
	Route::name('consument.profile')		 ->get('show_account', 'Consument\Auth\AccountController@showAccount');
	Route::name('consument.change.profile')	 ->get('change_account', 'Consument\Auth\AccountController@editAccount');
	Route::name('consument.change.profile')  ->post('profile_change', 'Consument\Auth\RegisterController@updateAccount');
	Route::name('consument.request.data')	 ->get('request_data', 'Consument\DataResearch\ResearchController@create');
	Route::name('send.request')				 ->post('store_request_data', 'Consument\DataResearch\ResearchController@store');
	Route::name('consument.request.info') 	 ->get('my_request', 'Consument\DataResearch\ResearchController@show');
	Route::name('consument.research.history')->get('research.history','Consument\DataResearch\ResearchController@index');
	Route::name('consument.journal.list')	 ->get('research.journal','Consument\DataResearch\ResearchController@journal');
	Route::name('consument.faq')			 ->get('faqs','MemberController@faqs');
	Route::name('consument.contactus')		 ->get('contactus','MemberController@contactus');	

});

/*Route::get('show_account', 'Consument\Auth\AccountController@showAccount')->name('consument.profile');
Route::get('change_account', 'Consument\Auth\AccountController@editAccount')->name('consument.change.profile');
//Route::post('profile_change', 'Consument\Auth\RegisterController@updateAccount');


Route::get('request_data', 'Consument\DataResearch\ResearchController@create')->name('consument.request.data');
Route::post('store_request_data', 'Consument\DataResearch\ResearchController@store')->name('send.request');

Route::get('my_request', 'Consument\DataResearch\ResearchController@show')->name('consument.request.info');

Route::get('research.history','Consument\DataResearch\ResearchController@index')->name('consument.research.history');
Route::get('research.journal','Consument\DataResearch\ResearchController@journal')->name('consument.journal.list');

Route::get('consument.faqs','MemberController@faqs')->name('consument.faq');
Route::get('consument.contactus','MemberController@contactus')->name('consument.contactus');
*/

// Route::get('/home', 'MemberController@index');

//if you wrong write method or prepoerty in route will show an error like
//[InvalidArgumentException]
//  Attribute [preffix] does not exist.

    // Route::prefix('admin')->group(function(){
    //     Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    //     Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    //     Route::get('/', 'AdminController@index')->name('admin.dashboard');
    // });





// Route::get('/admin', 'AdminController@index');
// Route::get('/profile', 'AdminController@profile');

// data master
Route::get('/data_area', 'AdminController@data_area');
Route::get('/data_segment', 'AdminController@data_area');
Route::get('/data_member', 'AdminController@data_member');
Route::get('/data_sector', 'AdminController@data_sector');
Route::get('/data_archive', 'AdminController@data_archive');

Route::get('/data_request', 'AdminController@data_request');
Route::get('approval_request', 'Admin\DataResearch\ResearchController@index')->name('approval.request');

Route::get('/data_research', 'AdminController@data_research'); 

Route::get('/createmember', 'AdminController@createmember');

