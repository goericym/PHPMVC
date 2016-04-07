<?php

/**
 * Created by PhpStorm.
 * User: Eric
 * Date: 2016/4/7
 * Time: 下午 03:24
 */
include_once "Core/DB.php";
class Model
{
    public  function LoginCount(){
        $db= new DB("MessageBoard");
        $sql = "SELECT COUNT(*) FROM login";
        $arr= null;
        return $db->Count($sql,$arr);
    }
}