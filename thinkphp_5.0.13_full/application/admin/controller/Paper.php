<?php
namespace app\admin\controller;
use think\Controller;
/**
 * Created by IntelliJ IDEA.
 * User: admin
 * Date: 2017/12/30
 * Time: 15:06
 */
class Paper extends Controller{
    public function index(){
        return $this->fetch();
    }
    public function add()
    {
        return $this->fetch();
    }
    public function save(){

    }
}