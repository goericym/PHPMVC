<?php

/**
 * Created by PhpStorm.
 * User: Eric
 * Date: 2016/4/7
 * Time: 下午 03:24
 */
include_once('Model.php');
include_once('View.php');
class Controller
{
    private $model;
    private $view;
    function __construct($control, $func)
    {
        $this->model=new Model();
        $this->view =new View();

//        $name=$control."View";
//        include "App/".$name.".php";
//        $obj= new $name;
//        $obj->$func();
    }
    function getData(){


            $count=$this->model->LoginCount();

            $this->view->assign('wel',$count);

            //$this->view->display('./pageVlew.html');
            $this->view->show();

    }


}