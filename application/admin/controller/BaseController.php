<?php
/**
 * Created by PhpStorm.
 * User: Adminstrator
 * Date: 2018/4/28
 * Time: 22:07
 * Comment: 基本控制器
 */
namespace app\admin\controller;

use think\Controller;

class BaseController extends Controller {

    /**
     * 声明用户
     */
    protected $user = null;

    /**
     * 声明网站
     */
    protected $website = null;

    /**
     * 声明用户id
     */
    protected $uid;

    /**
     * 声明实例id
     */
    protected $instance_id;

    /**
     * 声明实例名称
     */
    protected $instance_name;

    /**
     * 声明用户名
     */
    protected $user_name;

    /**
     * 声明用户头像
     */
    protected $user_headimg;

    /**
     * 声明模型
     */
    protected $module = null;

    /**
     * 声明控制器
     */
    protected $controller = null;

    /**
     * 声明方法
     */
    protected $action = null;

    /**
     * 声明模型信息
     */
    protected $module_info = null;

    /**
     * 声明根主键
     */
    protected $rootid = null;

    /**
     * 声明模型主键
     */
    protected $moduleid = null;

    /**
     * 二级菜单module_id 手机自定义模板临时添加，用来查询三级菜单
     */
    protected $second_menu_id = null;

    /**
     * 当前版本路径
     */
    protected $style = null;

    /**
     * 构造函数
     */
    public function __construct() {
        parent::__construct();
    }
}