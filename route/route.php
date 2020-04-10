<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------


// 不需要验证token

Route::group('api/:version/',function(){
    // 发送验证码
    Route::post('user/sendcode','api/:version.User/sendCode');
     // 手机登录
    Route::post('user/phonelogin','api/:version.User/phoneLogin');
    // 账号密码登录
    Route::post('user/login','api/:version.User/login');
    // 第三方登录
    Route::post('user/otherlogin','api/:version.User/otherLogin');
     // 获取文章分类
   Route::get('postclass', 'api/:version.PostClass/index');
    // 获取话题分类
    Route::get('topicclass','api/v1.TopicClass/index');
      // 获取热门话题
    Route::get('hottopic','api/v1.Topic/index');
     // 获取指定话题分类下的话题列表
     Route::get('topicclass/:id/topic/:page', 'api/v1.TopicClass/topic');
});


Route::group('api/:version/',function(){
   // 退出登录
   Route::post('user/logout','api/:version.User/logout');
   
})->middleware(['ApiUserAuth','ApiUserBindPhone','ApiUserStatus']);

