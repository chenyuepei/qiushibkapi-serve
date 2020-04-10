<?php

namespace app\api\controller\v1;

use think\Controller;
use think\Request;
use app\common\controller\BaseController;
use app\common\model\PostClass as PostClassModel;

class PostClass extends BaseController
{
    public function index()
    {
        // 获取文章分类列表
        $list=(new PostClassModel)->getPostClassList();
        return self::showResCode('获取成功',['list'=>$list]);
    }

}
