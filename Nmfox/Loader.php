<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/9/16
 * Time: 0:52
 */
namespace Nmfox;

class Loader
{
    static function autoload($class)
    {
        //echo BASEDIR.'/'.str_replace('\\','/',$class).'.php';
        include BASEDIR.'/'.str_replace('\\','/',$class).'.php';
    }
}