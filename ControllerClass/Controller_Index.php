<?php
/**
 * Created by PhpStorm.
 * User: Eric
 * Date: 2016/4/9
 * Time: 下午 05:20
 */


class Controller_Index extends \MVC\abstractController
//   Controller_Index
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
        $dir="ShowHtml/Index.html";
        $this->view->show($dir);
    }
}