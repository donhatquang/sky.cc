<?php
/*REQUIRE*/
/*IP LOCATION*/
//$ip = "202.120.2.101";

require("lib/cs.php"); //COUNTER MODULE
require("lib/sky.php");

$sky = new sky();
$locate = $sky->getLocation();
//$locate = "中国";
var_dump($locate);
$country = $locate["country"];
//exit();

$ios = "http://install.diawi.com/J5e5iy";
//var_dump($locate);
/*INIT*/

/*HEADER*/
require ("template/header.php");

/*FORWARDER*/
switch($locate) {

    case "越南": require_once("template/vietnam.php"); break;
    case "中国": require_once("template/china.php");break;
    default:
        require_once("template/vietnam.php"); break;
}

/*FOOTER*/
require ("template/footer.php");






