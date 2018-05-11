<?php
/**
 * Created by PhpStorm.
 * User: Adminstrator
 * Date: 2018/5/7
 * Time: 22:30
 * Comment:
 */
namespace data\api;

interface IAuthorGroup {

    /**
     * 获取系统用户组
     * @param int $page_index
     * @param int $page_size
     * @param string $order
     * @param string $where
     */
    function getSystemUserGroupList($page_index = 1, $page_size = 0, $order = '', $where = '');

    /**
     * 添加系统用户组
     * @param unknown $group_id
     * @param unknown $group_name
     * @param unknown $is_system
     * @param unknown $module_id_array
     * @param unknown $desc
     */
    function addSystemUserGroup($group_id, $group_name, $is_system, $module_id_array, $desc);

    /**
     * 修改系统用户组
     * @param unknown $group_id
     * @param unknown $group_id
     * @param unknown $group_name
     * @param unknown $group_status
     * @param unknown $is_system
     * @param unknown $module_id_array
     * @param unknown $desc
     */
    function updateSystemUserGroup($group_id, $group_name, $group_status, $is_system, $module_id_array, $desc);

    /**
     * 修改用户组的状态
     * @param unknown $group_id
     * @param unknown $group_status
     */
    function modifyUserGroupStatus($group_id, $group_status);

    /**
     * 删除系统用户组
     * @param unknown $group_id
     */
    function deleteSystemUserGroup($group_id);

    /**
     * 获取系统用户组详情
     * @param unknown $group_id
     */
    function getSystemUserGroupDetail($group_id);

    /**
     * 查询所有用户组
     * @param unknown $where
     */
    function getSystemUserGroupAll($where);
}