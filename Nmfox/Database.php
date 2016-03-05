<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/9/16
 * Time: 1:55
 */
namespace Nmfox;

//interface IDatabase{
//    function connect($host,$user,$passwd,$dbname);
//    function query($sql);
//    function close();
//}

class Database{
    private static $db;
    private function __construct(){
//        return $this->db;
    }


    static function getInstance(){
        if (self::$db){
            return self::$db;
        }else{
            self::$db=new self();
            return self::$db;
        }
    }

    function where($where){
        return '1';
    }
}