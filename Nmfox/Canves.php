<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/9/18
 * Time: 17:27
 */

namespace Nmfox;


class Canves
{
    public $decor=array();


    function addDecorator(DrawDecorator $decorator){

        $this->decor[]=$decorator;

    }

    function beforeDraw(){
        print_r($this->decor);
        foreach($this->decor as $decorator){
           // print_r($decorator);
            $decorator->beforeDraw();
        }
    }
    function afterDraw(){
        $this->decor=array_reverse($this->decor);
        print_r($this->decor);
        foreach($this->decor as $decorator){
           //  print_r($decorator);
            $decorator->afterDraw();
        }


    }


    function Draw(){
        $this->beforeDraw();
        echo "***************<br />";
        echo "***&nbsp;&nbsp;********<br />";
        echo "***&nbsp;&nbsp;********<br />";
        echo "***&nbsp;&nbsp;********<br />";
        echo "***************<br />";
        $this->afterDraw();
    }

}