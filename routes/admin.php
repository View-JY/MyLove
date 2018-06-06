<?php
// 后台首页
Route::resource('admin/index', 'Admin\IndexController');

// 后台广告位路由
Route::resource('admin/adverts', 'Admin\AdvertsController');
// 后台评论举报路由
Route::resource('admin/comments','Admin\CommentsController');
