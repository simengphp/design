<?php
/**
 * create by simengphp
 * website www.simengphp.com
 * QQ 476319748 (备注设计模式)
 * Date: 2017/11/8
 * Time: 16:33
 */
namespace lib\code;
class Object
{
    public $arr = array();
    public function __set($key,$value){
        $this->arr[$key] = $value;
    }
    public function __get($key){
        return $this->arr[$key];
    }
}