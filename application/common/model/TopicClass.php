<?php

namespace app\common\model;

use think\Model;

class TopicClass extends Model
{
    // 获取所有话题分类
    public function getTopicClassList(){
    return $this->field('id,classname')->where('status',1)->select();
    }
}
