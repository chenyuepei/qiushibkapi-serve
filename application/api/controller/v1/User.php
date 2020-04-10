<?php

namespace app\api\controller\v1;

use think\Controller;
use think\Request;
use app\common\controller\BaseController;
use app\common\validate\UserValidate;
use app\common\model\User as UserModel;

class User extends BaseController
{
   public function sendCode(){
       //验证参数
      (new UserValidate())->goCheck('sendCode');
       //发送验证码
       (new UserModel())->sendCode();
       return self::showResCodeWithOutData('发送成功');
   }

  public function phoneLogin(){
       
        (new UserValidate())->goCheck('phoneLogin');
       
        $token =  (new UserModel())->phoneLogin();
        return self::showResCode('登录成功',['token'=>$token]);
       // return '手机号登录';
  }

  // 账号密码登录
public function login(){
  // 验证登录信息
  (new UserValidate())->goCheck('login');
  // 登录
  $token = (new UserModel())->login();
  return self::showResCode('登录成功',['token'=>$token]);
}
}
