<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/9/18
 * Time: 19:51
 */

namespace Nmfox;


class ColorDrawDecorator implements DrawDecorator
{
    protected $color;
    function __construct($color="red"){
        $this->color=$color;
    }

    function beforeDraw(){
        echo "<div style='color:{$this->color}'>1";
    }
    function afterDraw(){
        echo "1</div>";
    }
}