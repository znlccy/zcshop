<?php
/**
 * Created by PhpStorm.
 * User: Adminstrator
 * Date: 2018/5/12
 * Time: 21:36
 * Comment:
 */
namespace data\service;

use data\api\IAddress as IAddress;
use data\api\unknown;

class Address extends BaseService implements IAddress {

    /**
     *
     */
    function getAreaList()
    {
        // TODO: Implement getAreaList() method.
    }

    /**
     * @param int $area_id
     */
    function getProvinceList($area_id = 0)
    {
        // TODO: Implement getProvinceList() method.
    }

    /**
     * @param unknown $province_id_arr
     * @param unknown $city_id_arr
     */
    function getAddressListById($province_id_arr, $city_id_arr)
    {
        // TODO: Implement getAddressListById() method.
    }

    /**
     * @param int $province_id
     */
    function getCityList($province_id = 0)
    {
        // TODO: Implement getCityList() method.
    }

    /**
     * @param int $city_id
     */
    function getDistrictList($city_id = 0)
    {
        // TODO: Implement getDistrictList() method.
    }

    /**
     * @param unknown $province_id
     */
    function getProvinceName($province_id)
    {
        // TODO: Implement getProvinceName() method.
    }

    /**
     * @param unknown $city_id
     */
    function getCityName($city_id)
    {
        // TODO: Implement getCityName() method.
    }

    /**
     * @param unknown $district_id
     */
    function getDistrictName($district_id)
    {
        // TODO: Implement getDistrictName() method.
    }

    /**
     * @param unknown $getAreaTree
     */
    function getAreaTree($getAreaTree)
    {
        // TODO: Implement getAreaTree() method.
    }

    /**
     * @param unknown $province_id
     * @param unknown $city_id
     * @param unknown $district_id
     */
    function getAddress($province_id, $city_id, $district_id)
    {
        // TODO: Implement getAddress() method.
    }

    /**
     * @param unknown $province_names
     */
    function getProvinceId($province_names)
    {
        // TODO: Implement getProvinceId() method.
    }

    /**
     * @param unknown $city_id
     */
    function getCityId($city_id)
    {
        // TODO: Implement getCityId() method.
    }

    /**
     * @param unknown $city_id
     * @param unknown $province_id
     * @param unknown $city_name
     * @param unknown $zipcode
     * @param unknown $sort
     */
    function addOrUpdateCity($city_id, $province_id, $city_name, $zipcode, $sort)
    {
        // TODO: Implement addOrUpdateCity() method.
    }

    /**
     * @param unknown $district_id
     * @param unknown $city_id
     * @param unknown $district_name
     * @param unknown $sort
     */
    function addOrUpdateDistrict($district_id, $city_id, $district_name, $sort)
    {
        // TODO: Implement addOrUpdateDistrict() method.
    }

    /**
     * @param unknown $province_id
     * @param unknown $province_name
     * @param unknown $sort
     * @param unknown $area_id
     */
    function updateProvince($province_id, $province_name, $sort, $area_id)
    {
        // TODO: Implement updateProvince() method.
    }

    /**
     * @param unknown $privince_name
     * @param unknown $sort
     * @param unknown $area_id
     */
    function addProvince($privince_name, $sort, $area_id)
    {
        // TODO: Implement addProvince() method.
    }

    /**
     * @param unknown $province_id
     */
    function deleteProvince($province_id)
    {
        // TODO: Implement deleteProvince() method.
    }

    /**
     * @param unknown $city_id
     */
    function deleteCity($city_id)
    {
        // TODO: Implement deleteCity() method.
    }

    /**
     * @param unknown $district_id
     */
    function deleteDistrict($district_id)
    {
        // TODO: Implement deleteDistrict() method.
    }

    /**
     * @param unknown $upType
     * @param unknown $regionType
     * @param unknown $regionName
     * @param unknown $regionSort
     * @param unknown $regionId
     */
    function updateRegionNameAndReginSort($upType, $regionType, $regionName, $regionSort, $regionId)
    {
        // TODO: Implement updateRegionNameAndReginSort() method.
    }

    /**
     * @param unknown $province_id
     */
    function getCityCountByProvinceId($province_id)
    {
        // TODO: Implement getCityCountByProvinceId() method.
    }

    /**
     * @param unknown $city_id
     */
    function getDistrictCountByCityId($city_id)
    {
        // TODO: Implement getDistrictCountByCityId() method.
    }

    /**
     * @param unknown $shop_id
     * @param unknown $province_id
     * @param unknown $city_id
     * @param unknown $district_id
     */
    function addOrUpdateDistributionArea($shop_id, $province_id, $city_id, $district_id)
    {
        // TODO: Implement addOrUpdateDistributionArea() method.
    }

    /**
     * @param unknown $shop_id
     */
    function getDistributionAreaInfo($shop_id)
    {
        // TODO: Implement getDistributionAreaInfo() method.
    }

    /**
     * @param unknown $shop_id
     * @param unknown $province_id
     * @param unknown $city_id
     * @param unknown $district_id
     */
    function getDistributionAreaIsUser($shop_id, $province_id, $city_id, $district_id)
    {
        // TODO: Implement getDistributionAreaIsUser() method.
    }

    /**
     * @param unknown $city_id
     */
    function getCityFirstDistrict($city_id)
    {
        // TODO: Implement getCityFirstDistrict() method.
    }

}