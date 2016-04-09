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
    abstract public function Select($sql, $ArrayVar);
    abstract public function Exec($sql, $ArrayVar);

}