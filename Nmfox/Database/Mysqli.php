<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/9/16
 * Time: 20:16
 */
namespace Nmfox\Database;
use Nmfox\IDatabase;

class Mysqli implements IDatabase{
    protected $conn;

    function connect($host,$user,$passwd,$dbname){
        $conn=mysqli_connect($host,$user,$passwd,$dbname);
        mysqli_set_charset($conn,'utf8');
        $this->conn=$conn;
    }
    function query($sql){
        $result=mysqli_query($this->conn,$sql);
        return $result;
    }
    function getall($table){
        $sql="select * from $table limit 0,5";
        $result=$this->query($sql);
        while ($row=mysqli_fetch_row($result)){
            //var_dump($row);
            printf("%s -- %s\n", $row[0],$row[5]);
        };
        mysqli_free_result($result);
    }

    function close(){
        mysqli_close($this->conn);
    }
}