<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/9/17
 * Time: 11:11
 */

namespace Nmfox;


class User
{
    public $id;
    public $username;
    public $qq;
    public $email;

    protected $db;

    function __construct($ids){
        $this->db=new \Nmfox\Database\Mysqli();
        $this->db->connect('localhost','root','root','dbname');
        $res=$this->db->query("select * from muyi_user where user_id=$ids limit 1");
        $data=$res->fetch_assoc();
        $this->id=$data['user_id'];
        $this->username=$data['username'];
        $this->qq=$data['qq'];
        $this->email=$data['email'];
    }
    function __destruct(){
        $sql="update muyi_user set username='{$this->username}',
        qq='{$this->qq}',email='{$this->email}' where user_id = '{$this->id}'";
        print_r($sql);
        $this->db->query($sql);
    }
}

