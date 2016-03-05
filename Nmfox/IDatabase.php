<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/9/16
 * Time: 22:15
 */

namespace Nmfox;

interface IDatabase{
    function connect($host,$user,$passwd,$dbname);
    function query($sql);
    function close();
}