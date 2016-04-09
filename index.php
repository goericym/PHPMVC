<?php
/**
 * Created by PhpStorm.
 * User: Eric
 * Date: 2016/4/7
 * Time: 下午 03:24
 */
    require_once "Abstract/abstractController.php";
    require_once "Abstract/abstractView.php";
    require_once "Abstract/abstractModel.php";
    require_once "ControllerClass/mainController.php";
    include_once('ModelClass/Model.php');
    include_once('ViewClass/View.php');
    $c = isset($_GET['c']) ? $_GET['c'] : 'mainController';
    $m = isset($_GET['m']) ? $_GET['m'] : 'model';
    $v = isset($_GET['v']) ? $_GET['v'] : 'view';
    $main=new $c($m, $v);
    $main->toModelView();
