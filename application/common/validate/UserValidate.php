<?php

namespace app\common\validate;

use think\Validate;

class UserValidate extends BaseValidate
{
    /**
     * 定义验证规则
     * 格式：'字段名'	=>	['规则1','规则2'...]
     *
     * @var array
     */	
	protected $rule = [
        'phone'=>'require|max:11|min:11|regex:/^1[3-8]{1}[0-9]{9}$/',  
        'code'=>'require|number|length:4|isPefectCode',
        'username'=>'require',
        'password'=>'require|alphaDash',
        'provider'=>'require',
        'openid'=>'require',
        'nickName'=>'require',
        'avatarUrl'=>'require',
        'expires_in'=>'require',
        // 'id'=>'require|integer|>:0',
        // 'page'=>'require|integer|>:0',
        // 'email'=>'require|email',
        // 'userpic'=>'image',
        // 'name'=>'require|chsDash',
        // 'sex'=>'require|in:0,1,2',
        // 'qg'=>'require|in:0,1,2',
        // 'job'=>'require|chsAlpha',
        // 'birthday'=>'require|dateFormat:Y-m-d',
        // 'path'=>'require|chsDash',
        // 'oldpassword'=>'require',
        // 'newpassword'=>'require|alphaDash',
        // 'renewpassword'=>'require|confirm:newpassword',
        // 'follow_id'=>'require|integer|>:0|isUserExist',
        // 'user_id'=>'require|integer|>:0'
    ];
    
    /**
     * 定义错误信息
     * 格式：'字段名.规则名'	=>	'错误信息'
     *
     * @var array
     */	
    protected $message = [
        'phone.require'=>'请输入手机号码',
        'phone.max'=>'手机号码最多不能超过11位',
        'phone.min'=>'手机号码不能少于11位',
        'phone.regex'=>'手机号码格式不正确',
    ];

    // 配置场景
    protected $scene = [
        // 发送验证码
        'sendCode'=>['phone'],
        // 手机号登录
        'phonelogin'=>['phone','code'],
        // 账号密码登录
        'login'=>['username','password'],
        // 第三方登录
        'otherlogin'=>['provider','openid','nickName','avatarUrl','expires_in'],
        // 'post'=>['id','page'],
        // 'allpost'=>['page'],
        // 'bindphone'=>['phone','code'],
        // 'bindemail'=>['email'],
        // 'bindother'=>['provider','openid','nickName','avatarUrl'],
        // 'edituserpic'=>['userpic'],
        // 'edituserinfo'=>['name','sex','qg','job','birthday','path'],
        // 'repassword'=>['oldpassword','newpassword','renewpassword'],
        // 'follow'=>['follow_id'],
        // 'unfollow'=>['follow_id'],
        // 'getfriends'=>['page'],
        // 'getfens'=>['page'],
        // 'getfollows'=>['page'],
    	// 'getuserinfo'=>['user_id']
    ];


}
