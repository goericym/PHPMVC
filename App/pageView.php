<?php

/**
 * Created by PhpStorm.
 * User: Eric
 * Date: 2016/4/7
 * Time: 下午 03:28
 */
class pageView extends View
{
    function home(){
//        echo "welcome MVC";
        $this->assign("wel","welcome in MVC 2");
    }
}