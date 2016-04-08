<?php

/**
 * Created by PhpStorm.
 * User: Eric
 * Date: 2016/4/7
 * Time: 下午 03:24
 */
include_once "DB.php";
class Model extends \MVC\abstractModel
{
    public  function LoginCount(){
        $db= new DB("MessageBoard");
        $sql = "SELECT COUNT(*) FROM login";
        $arr= null;
        return $db->Count($sql,$arr);
    }
}