<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/9/17
 * Time: 0:10
 */

namespace Nmfox;


class MaleUserStrategy implements UserStrategy
{
    function showAd(){
        echo '2015ÐÂ¿îÄÐ×°';
    }
    function showMain(){
        echo 'new man dress';
    }
}