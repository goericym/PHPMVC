<?php

/**
 * Created by PhpStorm.
 * User: eric_yang
 * Date: 2016/3/29
 * Time: 下午 12:03
 */
class DB_Index extends \MVC\abstractDB
{
//    private $_ServerName;
//    private $_UserName;
//    private $_password;
//    private $_dbName;
    private $_conn;

    public function __construct($DB_Name)
    {
        $_ServerName = "localhost";
        $_UserName = "root";
        $_password = "asdf1234";
        $_dbName= $DB_Name ;
        $this->_conn = new PDO("mysql:host=$_ServerName;dbname=$_dbName", $_UserName, $_password);
        $this->_conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->_conn->exec("SET NAMES utf8");
    }
    public  function query($sql,$ArrayVar){
        $sth = $this->_conn->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
        $sth->execute($ArrayVar);
        $count = $sth->fetchColumn();
        return $count;
    }

    function __destruct()
    {
        $this->_conn = null;
    }
}
