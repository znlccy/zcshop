<?php
/**
 * Created by PhpStorm.
 * User: Adminstrator
 * Date: 2018/5/7
 * Time: 22:30
 * Comment: 系统配置
 */
namespace data\api;

interface IConfig {

    /**
     * 获取微信基本配置
     * @param unknown $instance_id
     */
    function getWeChatConfig($instance_id);

    /**
     * 设置微信基本配置
     * @param unknown $instance_id
     * @param unknown $appid
     * @param unknown $appsecret
     * @param unknown $url
     * @param unknown $call_back_url
     * @param unknown $is_use
     */
    function setWeChatConfig($instance_id, $appid, $appsecret, $url, $call_back_url, $is_use);

    /**
     * 获取QQ基本配置
     * @param unknown $instance_id
     */
    function getQQConfig($instance_id);

    /**
     * 设置QQ基本配置
     * @param unknown $instance_id
     * @param unknown $appkey
     * @param unknown $appsecret
     * @param unknown $url
     * @param unknown $call_back_url
     * @param unknown $is_use
     */
    function setQQConfig($instance_id, $appkey, $appsecret, $url, $call_back_url, $is_use);

    /**
     * 获取系统登录配置信息
     */
    function getLoginConfig();

    /**
     * 获取微信支付参数(WechatPay)
     * @param unknown $instance_id
     */
    function getWeChatPayConfig($instance_id);

    /**
     * 设置微信支付参数(WechatPay)
     * @param unknown $instance_id
     * @param unknown $appid 微信登录appid
     * @param unknown $appkey 微信登录appkey
     * @param unknown $mch_id 商户账号
     * @param unknown $mch_key 商务支付秘钥
     * @param unknown $is_use
     */
    function setWeChatPayConfig($instance_id, $appid, $appkey, $mch_id, $mch_key, $is_use);

    /**
     * 获取支付宝支付参数(Alipay)
     * @param unknown $instance_id
     */
    function getAlipayConfig($instance_id);

    /**
     * 设置支付宝支付配置(Alipay)
     * @param unknown $instance_id
     * @param unknown $partner_id 商户ID
     * @param unknown $seller 商户账号
     * @param unknown $ali_key 商户支付秘钥
     * @param unknown $is_use
     */
    function setAlipayConfig($instance_id, $partner_id, $seller, $ali_key, $is_use);

    /**
     * 设置微信和支付宝开关状态
     * @param unknown $instance_id
     * @param unknown $is_use
     * @param unknown $type
     */
    function setPayStatusConfig($instance_id, $is_use, $type);

    /**
     * PC商城热搜关键词获取
     * @param $instance_id
     */
    function getHotSearchConfig($instance_id);
}