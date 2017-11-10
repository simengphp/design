<?php
/**
 * create by simengphp
 * website www.simengphp.com
 * QQ 476319748 (备注设计模式)
 * Date: 2017/11/10
 * Time: 14:44
 * 定义一个注册观察者模式的接口，统一规范
 */
namespace lib\code\Observe;
interface EventRegister
{
    public function register($object);
}