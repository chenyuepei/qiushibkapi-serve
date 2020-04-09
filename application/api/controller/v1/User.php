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
}
