<?php
/**
 * Created by PhpStorm.
 * User: 27057
 * Date: 2018/2/8
 * Time: 20:57
 */
namespace app\common\model;
use think\Model;
class user extends Model{

    public function isreg($username){
        $result=$this->where('user_name',$username)
            ->find();
        return $result;
    }
    public function register($data){
        $this->save($data);
        return $data;
    }
    public function login($username){
        $result=$this->where('user_name',$username)
            ->find();
        return $result;
    }
}