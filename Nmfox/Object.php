<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/9/16
 * Time: 0:44
 */
namespace Nmfox;
class Object{
    protected $array=array();

    function __set($key,$value){
        var_dump(__METHOD__);
        $this->array[$key]=$value;
    }
    function __get($key){
        var_dump(__METHOD__);
        return $this->array[$key];
    }
    function __call($func,$param){
        var_dump($func,$param);
        return "magic function\n";
    }
    static function __callStatic($func,$param){
        var_dump($func,$param);
        return "static function\n";
    }
    function __toString(){
        return 'this is '.__CLASS__;
    }
    function __invoke($param){
        var_dump($param);
        return 'invoke';
    }
}