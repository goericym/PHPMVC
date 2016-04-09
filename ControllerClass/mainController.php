<?php

/**
 * Created by PhpStorm.
 * User: Eric
 * Date: 2016/4/8
 * Time: 下午 04:54
 */
class mainController extends \MVC\abstractController
{
    private $model;
    private $view;
    function __construct($modelName, $viewName)
    {
        $this->model = new $modelName;
        $this->view = new $viewName;
    }
    function toModelView()
    {
        $count=$this->model->getData();
        $this->view->assign('wel',$count);
        $dir="Show/pageView.html";
        $this->view->show($dir);
    }
}