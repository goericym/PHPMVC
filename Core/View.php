<?php

/**
 * Created by PhpStorm.
 * User: Eric
 * Date: 2016/4/7
 * Time: 下午 03:24
 */
class View
{
    public $arr=array();
    function show(){
        $contorl = isset($_GET['contorl']) ? $_GET['contorl'] : 'page';
        extract($this->arr);
        include_once "View/".$contorl."View.html";
    }

    function assign($name,$value){
        $this->arr[$name]=$value;
    }

    function __destruct()
    {

        $this->show();
    }
}