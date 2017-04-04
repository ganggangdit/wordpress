<?php
/**
 *
 * @author wanggang
 * @since  2017-04-04
 */

define("PATH", dirname(dirname(dirname(dirname(__FILE__)))).'/');
require_once(PATH . "../wp-blog-header.php");
global $wpdb;
print_r($wpdb);
print_r($_GET['cat']);


echo 'yyyy';