<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/9/16
 * Time: 20:48
 */
namespace Nmfox;
class Factory{
    static function createDatabase(){
        $db = Database::getInstance();
        Register::set('db1',$db);
        return $db;
    }

    /**
     * @param $id
     * @return User
     */
    static function getUser($id){
        $key='user_'.$id;
        $user=Register::get($key);
        if(!$user) {
            $user = new User($id);
            Register::set($key,$user);
        }
        return $user;
    }
}