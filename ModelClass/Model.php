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
     public function getData($ArrayVar){
        $db= new DB("MessageBoard");
        $sql = "SELECT COUNT(*) FROM login";
        return $db->Count($sql,$ArrayVar);
    }

}
class ModelMainMsg extends \MVC\abstractModel
{
      function getData($ArrayVar){
        $db= new DB("MessageBoard");
        $sql = "SELECT * FROM message";
        return  $db->Select($sql, $ArrayVar);
    }
}

class ModelMainReMsg extends \MVC\abstractModel
{
      function getData($ArrayVar){
        $db= new DB("MessageBoard");
        $sql = "SELECT * FROM ReMessage";
        return  $db->Select($sql, $ArrayVar);
    }

}


class ModelLoginCheck extends \MVC\abstractModel
{
    function getData($ArrayVar){
        $db= new DB("MessageBoard");
        $sql = "SELECT COUNT(*) FROM login where account=:account LIMIT 1";
        $arr= array(":account"=> $ArrayVar['account']);
        return $db->Count($sql,$arr);

    }

}