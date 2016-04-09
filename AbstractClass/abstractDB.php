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
    abstract protected  function Select($sql, $ArrayVar);
    abstract protected function Exec($sql, $ArrayVar);

}