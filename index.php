<?php
/**
 * Created by PhpStorm.
 * User: Eric
 * Date: 2016/4/7
 * Time: 下午 03:24
 */
    require_once ("Core/Controller.php");
    $contorl = isset($_GET['contorl']) ? $_GET['contorl'] : 'page';
    $func = isset($_GET['func']) ? $_GET['func'] : 'home';
    $main=new Controller($contorl, $func);
    $main->getdata();