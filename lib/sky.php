<?php

/**
 * Created by PhpStorm.
 * User: donhatquang
 * Date: 10/22/15
 * Time: 6:21 PM
 */
class sky
{

    /*private*/
    private $location;


    //public function
    function __construct()
    {
        $ip = $_SERVER["REMOTE_ADDR"];
        $this->location = $this->getLocationURI($ip);
    }

    public function getLocation()
    {

        return $this->location;
    }

    public function getLocationURI($ip)
    {

        //echo $ip;
        $ip = @file_get_contents("http://int.dpool.sina.com.cn/iplookup/iplookup.php?format=json&ip=".$ip);
        $location = json_decode($ip, true);

        //var_dump($location);

        return $location;
    }
}