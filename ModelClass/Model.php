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
      function getData(){
        $db= new DB("MessageBoard");
        $sql = "SELECT COUNT(*) FROM login";
        $arr= null;
        return $db->Count($sql,$arr);
    }

}
class Modelaaa extends \MVC\abstractModel
{
      function getData(){
        $db= new DB("MessageBoard");
        $sql = "SELECT * FROM message";
        $arr = null;
        return  $db->Select($sql, $arr);
    }
}

class Modelbbb extends \MVC\abstractModel
{
      function getData(){
        $db= new DB("MessageBoard");
        $sql = "SELECT * FROM message";
        $arr = null;
        return  $db->Select($sql, $arr);
    }

}