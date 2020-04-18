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

// +----------------------------------------------------------------------
// | 中间件配置
// +----------------------------------------------------------------------
return [
    'ApiUserAuth' => app\http\middleware\ApiUserAuth::class,
    'ApiUserStatus' => app\http\middleware\ApiUserStatus::class,
    'ApiUserBindPhone' => app\http\middleware\ApiUserBindPhone::class,
    'ApiGetUserid' => app\http\middleware\ApiGetUserid::class,
];
