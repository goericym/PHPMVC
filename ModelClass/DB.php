<?php

/**
 * Created by PhpStorm.
 * User: eric_yang
 * Date: 2016/3/29
 * Time: 下午 12:03
 */

class DB extends \MVC\abstractDB
{
    private $_ServerName;
    private $_UserName;
    private $_password;
    private $_dbName;
    private $_conn;

    public function __construct($DB_Name)
    {
        $this->_ServerName = "localhost";
        $this->_UserName = "root";
        $this->_password = "asdf1234";
        $this->_dbName= $DB_Name ;
        $this->_conn = new PDO("mysql:host=$this->_ServerName;dbname=$this->_dbName", $this->_UserName, $this->_password);
        $this->_conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->_conn->exec("SET NAMES utf8");
    }

    protected  function Select($sql, $ArrayVar)
    {
        $sth = $this->_conn->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
        $sth->execute($ArrayVar);
        $res = $sth->fetchAll();
        return $res;
    }
     protected  function Exec($sql,$ArrayVar)
    {
        $sth = $this->_conn->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
        return $sth->execute($ArrayVar);
    }
    public  function GetLastId()
    {
        return $this->_conn->lastInsertId();
    }
    public  function Count($sql,$ArrayVar){
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