<?php
/**
 * Created by PhpStorm.
 * User: Eric
 * Date: 2016/4/9
 * Time: 下午 03:12
 */

namespace MVC;


abstract class abstractDB
{
//    abstract public function Select($sql, $ArrayVar);
    abstract public function Query($sql, $ArrayVar);
    abstract public function Count($sql, $ArrayVar);
    abstract public function Count1($sql, $ArrayVar);
    abstract public function Count2($sql, $ArrayVar);
}