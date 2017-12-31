<?php
namespace app\index\controller;
use think\Controller;

/**
 * Created by IntelliJ IDEA.
 * User: admin
 * Date: 2017/12/28
 * Time: 11:19
 */
class Paper extends Controller{
    public function vue(){
        return $this->fetch();
    }

}