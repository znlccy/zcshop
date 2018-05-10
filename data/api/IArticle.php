<?php
/**
 * Created by PhpStorm.
 * User: Adminstrator
 * Date: 2018/5/7
 * Time: 22:23
 * Comment:
 */
namespace data\api;

interface IArticle
{

    /**
     * 添加文章列表
     * @param number $page_index
     * @param number $page_size
     * @param string $condition
     * @param string $order
     */
    function getArticleList($page_index = 1, $page_size = 0, $condition = '', $order = '');

    /**
     * 获取文章详情
     * @param unknown $article_id
     */
    function getArticleDetail($article_id);

    /**
     * 文章分类列表
     * @param number $page_index
     * @param number $page_size
     * @param string $condition
     * @param string $order
     */
    function getArticleClass($page_index = 1, $page_size = 0, $condition = '', $order = '');

    /**
     * 获取文章分类详情
     * @param unknown $class_id
     */
    function getArticleClassDetail($class_id);

    /**
     * 添加文章
     * @param unknown $title
     * @param unknown $class_id
     * @param unknown $short_title
     * @param unknown $source
     * @param unknown $url
     * @param unknown $author
     * @param unknown $summary
     * @param unknown $content
     * @param unknown $image
     * @param unknown $keyword
     * @param unknown $article_id_array
     * @param unknown $click
     * @param unknown $sort
     * @param unknown $commend_flag
     * @param unknown $comment_flag
     * @param unknown $status
     * @param unknown $attachment_path
     * @param unknown $tag
     * @param unknown $comment_count
     * @param unknown $share_count
     */
    function addArticle($title, $class_id, $short_title, $source, $url, $author, $summary, $content, $image, $keyword, $article_id_array,
                        $click, $sort, $commend_flag, $comment_flag, $status, $attachment_path, $tag, $comment_count, $share_count
    );

    /**
     * 修改文章
     * @param unknown $article_id
     * @param unknown $title
     * @param unknown $class_id
     * @param unknown $short_title
     * @param unknown $source
     * @param unknown $url
     * @param unknown $author
     * @param unknown $summary
     * @param unknown $content
     * @param unknown $image
     * @param unknown $keyword
     * @param unknown $article_id_array
     * @param unknown $click
     * @param unknown $sort
     * @param unknown $commend_flag
     * @param unknown $comment_flag
     * @param unknown $status
     * @param unknown $attachment_path
     * @param unknown $tag
     * @param unknown $comment_count
     * @param unknown $share_count
     */
    function updateArticle($article_id, $title, $class_id, $short_title, $source, $url, $author, $summary, $content, $image, $keyword,
                           $article_id_array, $click, $sort, $commend_flag, $comment_flag, $status, $attachment_path, $tag, $comment_count, $share_count
    );

    /**
     * 添加文章分类
     * @param unknown $name
     * @param unknown $sort
     * @param unknown $pid
     */
    function addArticleClass($name, $sort, $pid);

    /**
     * 修改文章分类
     * @param unknown $class_id
     * @param unknown $name
     * @param unknown $sort
     * @param unknown $pid
     */
    function updateArticleClass($class_id, $name, $sort, $pid);

    /**
     * 修改文章排序
     * @param unknown $article_id
     * @param unknown $sort
     */
    function modiifyArticleSort($article_id, $sort);

    /**
     * 修改文章分类排序
     * @param unknown $class_id
     * @param unknown $sort
     */
    function modifyArticleClassSort($class_id, $sort);

    /**
     * 删除文章分类（如果文章分类已被使用那就不可删除）
     * @param unknown $class_id
     */
    function deleteArticleClass($class_id);

    /**
     * 删除文章
     * @param unknown $article_id
     */
    function deleteArticle($article_id);

    /**
     * 文章分类使用次数
     * @param unknown $class_id
     */
    function articleClassUseCount($class_id);

    /**
     * 文章评论列表
     * @param int $page_index
     * @param int $page_size
     * @param string $condition
     * @param string $order
     */
    function getCommentList($page_index = 1, $page_size = 0, $condition = '', $order = '');

    /**
     * 查看评论详情
     * @param unknown $comment_id
     */
    function getCommentDetail($comment_id);

    /**
     * 删除评论
     * @param unknown $comment_id
     */
    function deleteComment($comment_id);

    /**
     * 获取cms分类
     */
    function getArtitleClassQuery();

    /**
     * 添加专题
     * @param unknown $instance_id
     * @param unknown $title
     * @param unknown $image
     * @param unknown $content
     * @param unknown $status
     */
    function addTopic($instance_id, $title, $image, $content, $status);

    /**
     * 专题列表
     * @param int $page_index
     * @param int $page_size
     * @param string $condition
     * @param string $order
     */
    function getTopicList($page_index = 1, $page_size = 0, $condition = '', $order = '');

    /**
     * 获取专题详情
     * @param unknown $topic_id
     */
    function getTopicDetail($topic_id);

    /**
     * 修改专题
     * @param unknown $instance_id
     * @param unknown $topic_id
     * @param unknown $title
     * @param unknown $image
     * @param unknown $content
     * @param unknown $status
     */
    function updateTopic($instance_id, $topic_id, $title, $image, $content, $status);

    /**
     * 删除专题
     * @param unknown $topic_id
     */
    function deleteTopic($topic_id);

    /***
     * 修改单个字符
     * @param unknown $field_id
     * @param unknown $field_name
     * @param unknown $field_value
     */
    function cmsField($field_id, $field_name, $field_value);
}