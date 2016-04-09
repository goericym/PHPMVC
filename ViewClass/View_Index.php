<?php

/**
 * Created by PhpStorm.
 * User: Eric
 * Date: 2016/4/7
 * Time: 下午 03:24
 */

class View_Index  extends \MVC\abstractView
{
    public $arr = array();

    function show($dir)
    {
        extract($this->arr);
        require_once $dir;
    }

    function assign($name, $value)
    {
        $this->arr[$name] = $value;
    }
}