<?php

/**
 * Created by PhpStorm.
 * User: Eric
 * Date: 2016/4/7
 * Time: 下午 03:24
 */
include_once ("Core/View.php");
class Controller
{
    function __construct($control, $func)
    {
        $name=$control."View";
        include "App/".$name.".php";
        $obj= new $name;
        $obj->$func();
    }


}