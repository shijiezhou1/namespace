<?php


$file = $_SERVER['SCRIPT_FILENAME'];
$user = $_SERVER['HTTP_USER_AGENT'];
$server = $_SERVER['SERVER_SOFTWARE'];
echo $file;
echo "<br/>";
echo $user;
echo $server;

function printr($datas){
    echo "<pre>";
    print_r($datas);
    echo "</pre>";
}
// require_once(__DIR__.'/index/index.php');
// require_once(__DIR__.'/kingposter/');
?>