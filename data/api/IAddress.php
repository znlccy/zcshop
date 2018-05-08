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

    /**
     * 根据省id组、市id组查询地址信息，并整理
     * @param unknown $province_id_arr
     * @param unknown $city_id_arr
     */
    function getAddressListById($province_id_arr, $city_id_arr);

    /**
     * 获取市列表
     * @param number $province_id
     */
    function getCityList($province_id = 0);

    /**
     * 获取区县列表
     * @param number $city_id
     */
    function getDistrictList($city_id = 0);

    /**
     * 获取省名称
     * @param unknown $province_id
     */
    function getProvinceName($province_id);

    /**
     * @param unknown $city_id
     */
    function getCityName($city_id);

    /**
     * 获取区县名称
     * @param unknown $district_id
     */
    function getDistrictName($district_id);

    /**
     * 获取地区树
     * @param unknown $getAreaTree
     */
    function getAreaTree($getAreaTree);

    /**
     * 传入省市县主键 获取省市县名称
     * @param unknown $province_id
     * @param unknown $city_id
     * @param unknown $district_id
     */
    function getAddress($province_id, $city_id, $district_id);

    /**
     * 获取省id
     * @param unknown $province_names
     */
    function getProvinceId($province_names);

    /**
     * 获取市id
     * @param unknown $city_id
     */
    function getCityId($city_id);

    /**
     * 添加市级地区
     * @param unknown $city_id
     * @param unknown $province_id
     * @param unknown $city_name
     * @param unknown $zipcode
     * @param unknown $sort
     */
    function addOrUpdateCity($city_id, $province_id, $city_name, $zipcode, $sort);

    /**
     * 添加县级区域
     * @param unknown $district_id
     * @param unknown $city_id
     * @param unknown $district_name
     * @param unknown $sort
     */
    function addOrUpdateDistrict($district_id, $city_id, $district_name, $sort);

    /**
     * 修改省级区域
     * @param unknown $province_id
     * @param unknown $province_name
     * @param unknown $sort
     * @param unknown $area_id
     */
    function updateProvince($province_id, $province_name, $sort, $area_id);

    /**
     * 添加省级区域
     * @param unknown $privince_name
     * @param unknown $sort
     * @param unknown $area_id
     */
    function addProvince($privince_name, $sort, $area_id);

    /**
     * 删除省级区域
     * @param unknown $province_id
     */
    function deleteProvince($province_id);

    /**
     * 删除市级区域
     * @param unknown $city_id
     */
    function deleteCity($city_id);

    /**
     * 删除县级区域
     * @param unknown $district_id
     */
    function deleteDistrict($district_id);

    /**
     * 修改省市县的排序和名称
     * @param unknown $upType
     * @param unknown $regionType
     * @param unknown $regionName
     * @param unknown $regionSort
     * @param unknown $regionId
     */
    function updateRegionNameAndReginSort($upType, $regionType, $regionName, $regionSort, $regionId);

    /**
     * 通过省级id获取其下级的数量
     * @param unknown $province_id
     */
    function getCityCountByProvinceId($province_id);

    /**
     * 通过市级id获取其下级的数量
     * @param unknown $city_id
     */
    function getDistrictCountByCityId($city_id);

    /**
     * 添加或修改配送地区
     * @param unknown $shop_id
     * @param unknown $province_id
     * @param unknown $city_id
     * @param unknown $district_id
     */
    function addOrUpdateDistributionArea($shop_id, $province_id, $city_id, $district_id);

    /**
     * 获取配送地区信息
     * @param unknown $shop_id
     */
    function getDistributionAreaInfo($shop_id);

    /**
     * 检测配置地址是否符合货到付款
     * @param unknown $shop_id
     * @param unknown $province_id
     * @param unknown $city_id
     * @param unknown $district_id
     */
    function getDistributionAreaIsUser($shop_id, $province_id, $city_id, $district_id);

    /**
     * 获取市级的第一个区
     * @param unknown $city_id
     */
    function getCityFirstDistrict($city_id);
}