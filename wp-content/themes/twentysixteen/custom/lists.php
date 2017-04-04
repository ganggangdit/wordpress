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

$sql = "SELECT ID, user_name , user_message FROM  {$table}  ORDER BY ctime DESC  LIMIT 0,100";

$results = $wpdb->get_results($sql);


$results = object2array_pre($results);

echo json_encode(array('ec' => 0,'em' => 'ok','data' => $results));





function object2array_pre(&$object) {
    if (is_object($object)) {
        $arr = (array)($object);
    } else {
        $arr = &$object;
    }
    if (is_array($arr)) {
        foreach($arr as $key => $item){
            $arr[$key] = object2array($item);
        }
    }
    return $arr;
}

function object2array(&$object) {
    $object =  json_decode(json_encode($object),true);
    return  $object;
}


