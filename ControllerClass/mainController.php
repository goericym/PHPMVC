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
        parent::toModelView(); // TODO: Change the autogenerated stub
        $count=$this->model->LoginCount();
        $this->view->assign('wel',$count);
        $dir="View/pageView.html";
        $this->view->show($dir);
    }
}