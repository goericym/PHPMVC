<?php

/**
 * Created by PhpStorm.
 * User: Eric
 * Date: 2016/4/8
 * Time: 下午 04:54
 */


class Controller_Regedit extends \MVC\abstractController
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
        $dir="ShowHtml/regedit.html";
        $this->view->show($dir);
    }
}
