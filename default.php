<?php

  
/*IP LOCATION*/
$ip = $_SERVER["REMOTE_ADDR"];
//$ip = "202.120.2.101";
echo $ip = @file_get_contents("http://int.dpool.sina.com.cn/iplookup/iplookup.php?format=json&ip=".$ip);
$ip = json_decode($ip,true);
var_dump($ip);
