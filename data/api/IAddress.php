<?php
/**
 * Created by PhpStorm.
 * User: Adminstrator
 * Date: 2018/5/7
 * Time: 22:19
 * Comment: 系统地址接口
 */
namespace data\api;

interface IAddress {

    /**
     * 获取区域列表
     */
    function getAreaList();

    /**
     * 获取省列表
     * @param number $area_id
     */
    function getProvinceList($area_id = 0);
}