<?php
// 后台首页
Route::resource('admin/index', 'Admin\IndexController');

// 后台广告位管理
Route::resource('admin/adverts', 'Admin\AdvertsController');