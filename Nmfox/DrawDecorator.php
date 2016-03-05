<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/9/18
 * Time: 17:41
 */

namespace Nmfox;


interface DrawDecorator
{
    function beforeDraw();
    function afterDraw();
}