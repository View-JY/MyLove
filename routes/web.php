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

// 首页路由
Route::get('/', 'HomeController@index');

// 注册登录
// Auth::routes();
// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');

//前台用户管理路由
Route::resource('/users', 'UsersController');

//帮助与客户反馈路由
Route::resource('/helps', 'HelpsController', [
	'only' => ['index', 'store'],
]);

// 文章分类关注
Route::get('/categories/follow/{category}', 'CategoriesController@follow')->name('categories.follow');
Route::get('/categories/unfollow/{category}', 'CategoriesController@unfollow')->name('categories.unfollow');
// 文章分类
Route::resource('/categories', 'CategoriesController');

// 文章管理
Route::resource('/articles', 'ArticlesController');

//关注用户操作
Route::post('followers/{user}', 'FollowersController@store')->name('followers.store');
Route::delete('followers/{user}', 'FollowersController@destroy')->name('followers.destroy');

// 吐槽路由
Route::resource('/dynamics', 'DynamicsController');