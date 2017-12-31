<?php
/**
 * Created by IntelliJ IDEA.
 * User: admin
 * Date: 2017/12/28
 * Time: 14:24
 */
namespace app\index\controller;
use think\Controller;
class User extends Controller{
    function login(){
        return $this->fetch();
    }
    function logout(){
        return $this->fetch();
    }
}