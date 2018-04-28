<?php
/**
 * Created by PhpStorm.
 * User: Adminstrator
 * Date: 2018/4/28
 * Time: 22:28
 * Comment: 首页错误控制器
 */
namespace app\admin\controller;

class Error extends BaseController {

    /**
     * @param unknown $name
     * 判断名称是否为空
     */
    public function _empty($name) {
        $this->redirect(__URL(__URL__.'/admin'));
    }
}