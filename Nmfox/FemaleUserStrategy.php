<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/9/17
 * Time: 0:10
 */

namespace Nmfox;


class FemaleUserStrategy implements UserStrategy
{
    function showAd(){
        echo '2015新款女装';
    }
    function showMain(){
        echo 'new girl dress';
    }
}