<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/9/16
 * Time: 0:48
 */
header("Content-type: text/html; charset=utf-8");
define('BASEDIR',__DIR__);
include BASEDIR.'./Nmfox/Loader.php';

spl_autoload_register('\\Nmfox\\Loader::autoload');

//$db=new Nmfox\Database\Mysqli();
//$db->connect('localhost','root','joyshop2015','muyi_data');
//$db->getall("muyi_user");
//$db->close();

class page{
    function test1($name){
        $user=\Nmfox\Factory::getUser(1);
        var_dump($user);
        $user->username=$name;
        return;
    }
    function test2(){
        $user= \Nmfox\Factory::getUser(1);
        var_dump($user);
        $user->email='kali@qq.com';
        return;
    }
}

class Event extends \Nmfox\EvnetGenerator{
    function trigger(){
        echo "Eve..\n";
        $this->notify();
//        echo "更新1\n";
//        echo "更新1\n";
//        echo "更新1\n";

    }
}
class Observer1 implements \Nmfox\Observer{
    function update($event_info=null){
        echo "更新1\n";
    }
}
class Observer2 implements \Nmfox\Observer{
    function update($event_info=null){
        echo "更新2\n";
    }
}

//$user = Nmfox\Factory::getUser(1);
//var_dump($user);
//$user->username = 'jis';


//$event = new Event;
//$event->addObserver(new Observer1);
//$event->addObserver(new Observer2);
//print_r($event);
//$event->trigger();

/*$draw=new \Nmfox\Canves();
$draw->addDecorator(new Nmfox\ColorDrawDecorator('pink'));
$draw->addDecorator(new \Nmfox\SizeDrawDecorator('35px'));
$draw->Draw();*/


//$user= new page();
//$user->test1('nice');
//$user->test2();
////var_dump($user);


//$user=\Nmfox\Factory::getUser(1);
//$user->username='just love me';
//$user->qq="10000";
//$user->email="jingling@cn.com";

//var_dump($user);
//class page{
//    protected $strategy;
//    function index(){
//        echo 'ad:';
//        $this->strategy->showAd();
//        echo "<br />cate:";
//        $this->strategy->showMain();
//    }
//
//    /**
//     * @param \Nmfox\UserStrategy $strategy
//     */
//    function setStrategy(\Nmfox\UserStrategy $strategy){
//        $this->strategy=$strategy;
//    }
//
//}
//$page = new page;
//if(isset($_GET['female'])){
//    $strategy=new \Nmfox\FemaleUserStrategy();
//}else{
//    $strategy=new \Nmfox\MaleUserStrategy();
//}
//$page->setStrategy($strategy);
//$page->index();

//$obj = new Nmfox\Object();
//$obj->tille='hello';
//echo $obj->tille;
//echo $obj->test("hello",1);
//echo Nmfox\Object::test("hello",2);
//echo $obj("test2");
//
$db=Nmfox\Factory::createDatabase();
//$db= new Nmfox\Database();
$db=Nmfox\Factory::createDatabase();
$db=Nmfox\Factory::createDatabase();
$db= Nmfox\Database::getInstance();
$db= Nmfox\Database::getInstance();
$db=\Nmfox\Register::get('db1');
//$db->get("3");
var_dump($db);
$db=new Nmfox\Database\Mysqli();
$db->connect('localhost','root','root','dbname');
$db->query('show databases');
$db->close();
