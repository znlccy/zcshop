<?php
/**
 * Created by PhpStorm.
 * User: Adminstrator
 * Date: 2018/5/7
 * Time: 22:22
 * Comment: 相册以及图片接口
 */
namespace data\api;

interface IAlbum {

    /**
     * 获取相册列表
     */
    function getAlbumClassList();

    /**
     * 创建相册
     */
    function addAlbumClass();
}