<?php

namespace app\common\model;

use think\Model;

class PostClass extends Model
{
    // 获取所有文章分类
    public function getPostClassList(){
    return $this->field('id,classname')->where('status',1)->select();
}
}
