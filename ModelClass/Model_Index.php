<?php

/**
 * Created by PhpStorm.
 * User: Eric
 * Date: 2016/4/7
 * Time: 下午 03:24
 */
include_once "DB_Index.php";

class Model_Index extends \MVC\abstractModel
{
     public function getData($ArrayVar){
        $db= new DB_Index("MessageBoard");
        $sql = "SELECT COUNT(*) FROM login";
        return $db->query($sql,$ArrayVar);
    }
}
