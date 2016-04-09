<?php
/**
 * Created by PhpStorm.
 * User: Eric
 * Date: 2016/4/7
 * Time: 下午 03:24
 */

    require_once "AbstractClass/abstractController.php";
    require_once "AbstractClass/abstractDB.php";
    require_once "AbstractClass/abstractModel.php";
    require_once "AbstractClass/abstractView.php";

    $act=isset($_GET['act']) ? $_GET['act'] : 'Index';
    $c = "Controller_".$act;
    $m = "model_".$act;
    $v = "view_".$act;

    $path_c="ControllerClass/Controller_".$act.".php";
    $path_m="ModelClass/Model_".$act.".php";
    $path_v="ViewClass/View_".$act.".php";

    require_once $path_c;
    require_once $path_m;
    require_once $path_v;

    $main=new $c($m, $v);
    $main->TODO();
