<?php

/**
 * Created by PhpStorm.
 * User: Eric
 * Date: 2016/4/9
 * Time: 下午 05:31
 */


class Controller_Login extends \MVC\abstractController
{
    private $model;
    private $view;
    function __construct($modelName, $viewName)
    {
        $this->model = new $modelName;
        $this->view = new $viewName;
    }
    function TODO()
    {
        $arr=null;
        $count=$this->model->getData($arr);
        $this->view->assign('wel',$count);
        $dir="ShowHtml/login.html";
        $this->view->show($dir);
    }
}