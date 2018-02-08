<?php
namespace app\user\controller;

use think\Controller;

class register extends Controller{
    public function index()
    {
        $data=input('get.');
        $IsRegister=Model('User')->isreg($data['user_name']);
        if(empty($IsRegister))
        {
            $res=Model('User')->register($data);
            $success=show('0','注册成功',$res,200);
            return $success;
        } else{
            $error=show('-1','用户已注册',null,200);
            return $error;
        }
    }
}