<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/9/16
 * Time: 13:24
 */
namespace Nmfox;
class Register{
    protected static $objects;

    /**
     * @param $alias
     * @param $object
     */
    static function set($alias,$object){
        self::$objects[$alias]=$object;
    }

    static function get($name){
        return self::$objects[$name];
    }

    function _unset($alias){
        unset(self::$objects[$alias]);
    }
}
