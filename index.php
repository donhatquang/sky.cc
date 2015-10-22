<?php
/*REQUIRE*/
/*IP LOCATION*/
//$ip = "202.120.2.101";

require("lib/cs.php"); //COUNTER MODULE
require("lib/sky.php");

$sky = new sky();
$locate = $sky->getLocation();
$locate = "中国";


//var_dump($locate);
/*INIT*/

/*HEADER*/
require ("template/header.php");

/*FORWARDER*/
switch($locate) {

    case "hanoi": require_once("template/vietnam.php"); break;
    case "中国": require_once("template/china.php");break;
    default:
        require_once("template/vietnam.php"); break;
}

/*FOOTER*/
require ("template/footer.php");






