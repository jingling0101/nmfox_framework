<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/9/18
 * Time: 0:03
 */

namespace Nmfox;


interface Observer
{
    function update($event_info=null);
}