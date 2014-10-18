<?php
/**
 * Created by PhpStorm.
 * User: cowglow
 * Date: 17/10/14
 * Time: 11:54
 */

header("Content-Type:application/json");

$directory_path = 'sudo_db/';
$prefix = 'prefix-';

/**
 * GET Example
 *
 * It is highly recommended that you use the POST action
 */
if (isset($_GET['call'])){
    $call = $_GET['call'];
    $filename = $prefix.$call.".xml";
    $data = simplexml_load_file($directory_path.$filename);
    $output = json_encode($data, JSON_PRETTY_PRINT);
} else {
    $output = '{ "ERROR 303" : "Wrong Authentication Data" }';
}

echo $output;
