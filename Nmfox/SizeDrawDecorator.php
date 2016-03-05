<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/9/18
 * Time: 17:51
 */

namespace Nmfox;


class SizeDrawDecorator implements DrawDecorator
{
    protected $size;
    function __construct($size="14px"){
        $this->size=$size;
    }

    function beforeDraw(){
        echo "<div style='font-size:{$this->size}'>2";
    }
    function afterDraw(){
        echo "2</div>";
    }
}