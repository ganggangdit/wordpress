<?php
/**
 *
 * @author wanggang
 * @since  2017-04-04
 */

define("PATH", dirname(dirname(dirname(dirname(__FILE__)))) . '/');
require_once(PATH . "../wp-blog-header.php");
global $wpdb;

$table      = "wp_weixin_stricky_note";
$data_array = array(
    'user_name'    => $_GET['name'],
    'user_message' => $_GET['message'],
);
//$wpdb->insert($table, $data_array);


$sql = "SELECT user_name , user_message FROM  {$table}  ORDER BY ctime DESC  LIMIT 0,100";

$results = $wpdb->get_results($sql);
print_r($results);
