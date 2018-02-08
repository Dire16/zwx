<?php
namespace app\user\controller;

use think\Controller;

class login extends Controller{
    public function index()
    {
        $data=input('get.');
        $UserMessage=Model('User')->login($data['user_name']);
        if($UserMessage['user_password']!=$data['user_password']){
            $error=show('-1','密码错误',null,200);
            return $error;
        }else{
            $success=show('0','登陆成功',null,200);
            return $success;
        }
    }
}