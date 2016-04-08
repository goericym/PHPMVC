<?php
/**
 * Created by PhpStorm.
 * User: Eric
 * Date: 2016/4/7
 * Time: 下午 03:24
 */
    //require_once ("Core/Controller.php");
    require_once "Abstract/abstractController.php";
    require_once "Abstract/abstractView.php";
    require_once "ControllerClass/mainController.php";
    include_once('Core/Model.php');
    include_once('ViewClass/View.php');
    $m = isset($_GET['m']) ? $_GET['m'] : 'model';
    $v = isset($_GET['v']) ? $_GET['v'] : 'view';
    $main=new mainController($m, $v);
    $main->toModelView();
