<?php

/**
 * Created by PhpStorm.
 * User: Eric
 * Date: 2016/4/8
 * Time: 下午 05:13
 */
namespace MVC;

abstract class abstractView
{
    abstract protected function assign($name,$value);
    abstract protected function show($dir);
}