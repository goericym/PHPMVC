<?php

/**
 * Created by PhpStorm.
 * User: Eric
 * Date: 2016/4/7
 * Time: 下午 03:24
 */
class View  extends \MVC\abstractView
{
    public $arr=array();

    function show($dir){
        //$contorl = isset($_GET['contorl']) ? $_GET['contorl'] : 'page';
        extract($this->arr);
        //include_once "View/".$contorl."View.html";
        include_once $dir;
    }

    function assign($name,$value){
        $this->arr[$name]=$value;
    }

//    function __destruct()
//    {
//        $this->show();
//    }
}