<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/9/16
 * Time: 20:16
 */
namespace Nmfox\Database;
use Nmfox\IDatabase;

class Mysql implements IDatabase{
    function connect($host,$user,$passwd,$dbname){
        $conn=mysql_connect($host,$user,$passwd);
        mysql_select_db($dbname,$conn);
        $this->conn=$conn;
    }
    function query($sql){
        $res=mysql_query($sql,$this->conn);
        return $res;
    }
    function close(){
        mysql_close($this->conn);
    }
}