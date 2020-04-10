<?php

namespace app\api\controller\v1;

use think\Controller;
use think\Request;
use app\common\controller\BaseController;
use app\common\model\TopicClass as TopicClassModel;
class TopicClass extends BaseController
{
    public function index()
{
    // 获取话题分类列表
    $list=(new TopicClassModel)->getTopicClassList();
    return self::showResCode('获取成功',['list'=>$list]);
}
}
