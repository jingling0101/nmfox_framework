<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/9/18
 * Time: 0:01
 */

namespace Nmfox;


abstract class EvnetGenerator
{
    private $observer=array();
    function addObserver(Observer $observer){
        $this->observer[]=$observer;
    }
    function notify(){
        foreach($this->observer as $observer){
            $observer->update();
        }
    }
}