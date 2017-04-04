<?php
/**
 *
 * @author wanggang
 * @since  2017-04-04
 */

define("PATH", dirname(dirname(dirname(dirname(__FILE__)))) . '/');
require_once(PATH . "../wp-blog-header.php");
global $wpdb;

$id = $_POST['id'];
if (empty($id)) {
    echo json_encode(array('ec' => 409, 'em' => '信息不能为空', 'data' => array()));
    die;
}


$table      = "wp_weixin_stricky_note";

$sql = "DELETE FROM {$table} WHERE ID = {$id}";

$wpdb->query($sql);

echo json_encode(array('ec' => 0, 'em' => "删除成功", 'data' => array()));