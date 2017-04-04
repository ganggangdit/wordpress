<?php
/**
 *
 * @author wanggang
 * @since  2017-04-04
 */

define("PATH", dirname(dirname(dirname(dirname(__FILE__)))) . '/');
require_once(PATH . "../wp-blog-header.php");
global $wpdb;

if (empty($_POST['name']) || empty($_POST['message'])) {
    echo json_encode(array('ec' => 409,'em' => '信息不能为空','data' => array()));
    die;
}

$table      = "wp_weixin_stricky_note";
$data_array = array(
    'user_name'    => $_POST['name'],
    'user_message' => $_POST['message'],
);
$wpdb->insert($table, $data_array);

echo json_encode(array('ec' => 0,'em' => '添加成功','data' => array()));