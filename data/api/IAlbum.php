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
     * @param number $page_index
     * @param number $page_size
     * @param string $condition
     * @param string $order
     * @param string $field
     */
    function getAlbumClassList($page_index = 1, $page_size = 0, $condition = '', $order = '', $field = '*');

    /**
     * 创建相册
     */
    function addAlbumClass();
}