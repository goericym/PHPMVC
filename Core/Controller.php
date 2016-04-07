<?php

/**
 * Created by PhpStorm.
 * User: Eric
 * Date: 2016/4/7
 * Time: 下午 03:24
 */
class Controller
{
    function __construct()
    {
        $name=$_GET["contorl"]."Contorl";
        include "Contoller/".$name.".php";
        $obj= new $name;
        $obj->$_GET["func"]();
    }


}