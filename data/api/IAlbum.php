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
     * @param unknown $aclass_name
     * @param unknown $aclass_sort
     * @param unknown $pid
     * @param unknown $aclass_cover
     * @param unknown $is_default
     * @param unknown $instance_id
     */
    function addAlbumClass($aclass_name, $aclass_sort, $pid = 0, $aclass_cover = '', $is_default = 0, $instance_id = 1);

    /**
     * 编辑相册
     * @param unknown $aclass_id
     * @param unknown $aclass_name
     * @param unknown $aclss_sort
     * @param unknown $pid
     * @param unknown $aclass_cover
     * @param unknown $is_default
     */
    function updateAlbumClass($aclass_id, $aclass_name, $aclss_sort, $pid = 0, $aclass_cover = '', $is_default = 0);

    /**
     * 改变相册排序
     * @param unknown $aclass_id
     * @param unknown $aclass_sort
     */
    function modifyAlbumSort($aclass_id, $aclass_sort);

    /**
     * 改变相册上级
     * @param unknown $aclass_id
     * @param unknown $pid
     */
    function modifyAlbumPid($aclass_id, $pid);

    /**
     * 删除相册
     * @param unknown $aclass_id_array
     */
    function deleteAlbumClass($aclass_id_array);

    /**
     * 获取相册图片列表
     * @param number $page_index
     * @param number $page_size
     * @param string $condition
     * @param string $order
     * @param string $field
     */
    function getPictureList($page_index = 1, $page_size = 0, $condition = '', $order = '', $field = '*');

    /**
     * 获取相册图片列表
     * @param unknown $pic_name
     * @param unknown $pic_tag
     * @param unknown $aclass_id
     * @param unknown $pic_cover
     * @param unknown $pic_size
     * @param unknown $pic_spec
     * @param unknown $pic_spec
     * @param unknown $pic_sizew_big
     * @param unknown $pic_spec_big
     * @param unknown $pic_cover_mid
     * @param unknown $pic_size_mid
     * @param unknown $pic_spec_pid
     * @param unknown $pic_cover_small
     * @param unknown $pic_size_small
     * @param unknown $pic_spec_small
     * @param unknown $pic_cover_micro
     * @param unknown $pic_size_micro
     * @param unknown $pic_spec_micro
     * @param unknown $instance_id
     * @param unknown $upload_type
     * @param unknown $domain
     * @param unknown $bucket
     */
    function addPicture($pic_name, $pic_tag, $aclass_id, $pic_cover, $pic_size, $pic_spec, $pic_spec, $pic_sizew_big,
        $pic_spec_big, $pic_cover_mid, $pic_size_mid, $pic_spec_pid, $pic_cover_small, $pic_size_small, $pic_spec_small,
        $pic_cover_micro, $pic_size_micro, $pic_spec_micro, $instance_id = 0, $upload_type, $domain, $bucket);

    /**
     * 删除相册
     * @param unknown $pic_id_array
     */
    function deletePicture($pic_id_array);

    /**
     * 获取相册详情
     * @param unknown $album_id
     */
    function getAlbumClassDetail($album_id);

    /**
     * 获取图片详情
     * @param unknown $pic_id
     */
    function getAlbumDetail($pic_id);

    /**
     * 图片替换
     * @param unknown $pic_id
     * @param unknown $pic_name
     * @param unknown $pic_tag
     * @param unknown $aclass_id
     * @param unknown $pic_cover
     * @param unknown $pic_size
     * @param unknown $pic_spec
     * @param unknown $pic_cover_big
     * @param unknown $pic_size_big
     * @param unknown $pic_spec_big
     * @param unknown $pic_cover_mid
     * @param unknown $pic_size_mid
     * @param unknown $pic_spec_mid
     * @param unknown $pic_cover_small
     * @param unknown $pic_size_small
     * @param unknown $pic_spec_small
     * @param unknown $pic_cover_micro
     * @param unknown $pic_size_micro
     * @param unknown $pic_spec_micro
     * @param number $instance_id
     */
    function modifyAlbumPicture($pic_id, $pic_cover, $pic_size, $pic_spec, $pic_cover_big, $pic_size_big, $pic_spec_big, $pic_cover_mid, $pic_size_mid, $pic_spec_mid, $pic_cover_small, $pic_size_small, $pic_spec_small, $pic_cover_micro, $pic_size_micro, $pic_spec_micro, $instance_id, $upload_type = 1, $domain, $bucket);

    /**
     * 更改图片所在的相册
     * @param unknown $pic_id
     * @param unknown $album_id
     */
    function modifyAlbumPictureClass($pic_id, $album_id);

    /**
     * 设此图片为被相册的封面
     * @param unknown $pic_id
     * @param unknown $album_id
     */
    function modifyAlbumClassCover($pic_id, $album_id);

    /**
     * 获取相册使用的图片空间
     */
    function getGoodsUseAlbum();

    /**
     * 判断图片是否已经被使用
     * @param unknown $shop_id
     * @param unknown $pic_id
     */
    function checkPictureIsUse($shop_id, $pic_id);

    /**
     * 获取相册图片详情
     * @param unknown $condition
     */
    function getAlbumPictureDetail($condition);

    /**
     * 获取商品相册使用图片查询
     * @param unknown $condition
     */
    function getGoodsAlbumUsePictureQuery($condition);

    /**
     * 获取默认相册详情
     */
    function getDefaultAlbumDetail();
}