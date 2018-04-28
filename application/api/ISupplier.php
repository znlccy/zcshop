<?php
/**
 * Created by PhpStorm.
 * User: Adminstrator
 * Date: 2018/4/28
 * Time: 22:10
 * Comment: 供应商接口
 */
namespace app\admin\api;

interface ISupplier {


    function getSuplierList();

    function addSupplier();

    function updateSupplier();

    function deleteSupplier();

    function getSupplierInfo();
}